<?php

namespace App\Http\Controllers\Front;

use App\Helpers\HomestayHelper;
use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Homestay;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class BookingController extends Controller
{
    public function index(Request $request){
        $room = Room::where('id', $request->input('room'))->first();
        abort_if(!$room, 404);
        return view('front.booking.index', compact('room'));
    }

    public function checkout(Request $request){
        $request->validate([
            'start_date'            =>          ['required'],
            'end_date'              =>          ['required'],
            'room'                  =>          ['required', 'string']
        ]);
        $room = Room::where('id', $request->input('room'))->first();
        if(!$room){
            abort(404);
        }
        $start_date = Carbon::parse($request->input('start_date'));
        $end_date = Carbon::parse($request->input('end_date'));
        $days_count = $end_date->diffInDays($start_date);
        $per_night_price = $room->price;
        $total = (float)$days_count * $per_night_price;
        if($total == 0 || $total < 0) return redirect()->back()->with('toast.error', 'Invalid date selected');
        $booking = [
         'start_date'           =>          $start_date->format('Y-m-d'),
         'end_date'             =>          $end_date->format('Y-m-d'),
         'room_id'              =>          $room->id,
            'total'              =>         $total,
        ];
       if(session('booking')){
           session()->forget('booking');
       }
       session(['booking' => $booking]);
       if(session('total')) {
        session()->forget('total');
       }
       session(['total' => $total]);
        return view('front.booking.payment' , compact('days_count', 'total', 'room'));
    }

    public function verify(Request $request){
        $user = Auth::user();
        $total = (float)session('total');
        $args = self::setArgs($request->token,$total*100);
        $url = "https://khalti.com/api/v2/payment/verify/";
        $header = self::getApiHeader();
        $resp = Http::acceptJson()->withHeaders($header)->post( $url, $args);
        if($resp->getStatusCode() === 200){
            $resp_body = collect(json_decode($resp->body()));

            \DB::transaction(function () use($resp_body) {
                $booking = session('booking');
                $booking['transaction_id']= $resp_body['idx'];
                $booking['created_at'] = Carbon::now();
                $booking['updated_at'] = Carbon::now();
                $booking['user_id'] = Auth::user()->id;
                $bookings = Booking::insert($booking);
            });
            $request->session()->flash('toast.success', 'Payemnt Done!');
        
            return response()->json([
                'success'       =>      1,
                'redirect'      =>  route('front.index'),
            ],200);
        }else{
            return response()->json([
                'error'         =>      1,
                'message'       =>      'Failed',
                'code'          =>      200
            ]);
        }
    }

    // public function success(Request $request){
    //     if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] === url('/booking/checkout')){
    //         return view('front.booking.success');
    //     }
    //     abort(404);
    // }

    public function setArgs($token, $amount){
        return [
            'token' => $token,
            'amount'  => $amount,
        ];
    }

    public function getApiHeader(): array
    {
        return [
            'Authorization'    =>  'Key '.config('services.khalti.private_key'),
        ];
    }

    public function show(){
        $user = \auth()->user();
        $bookings = Booking::where('user_id', $user->id)->get();
        return view('front.booking.show', compact('bookings'));
    }

}
