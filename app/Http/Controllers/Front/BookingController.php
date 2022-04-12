<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
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
         'start_date'           =>          $start_date,
         'end_date'             =>          $end_date,
         'room_id'              =>          $room,
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
//            $resp_body = collect(json_decode($resp->body()));
//            \DB::transaction(function () use(){
//                $order = Order::create([
//                    'code'                      =>      str_replace(' ', '', config('app.name')).'-'.\Illuminate\Support\Str::random(18),
//                    'transaction_id'            =>      $resp_body['idx'],
//                    'user_id'                   =>      $user->id,
//                    'total'                     =>      $total,
//                    'shipping_charge'           =>      $shipping_price,
//                ]);
//                $order_details = [];
//                foreach($cart->cartItems as $k => $v){
//                    $per_unit_price = $v->product->sale_price_per_unit;
//                    $sub_total = $per_unit_price * $v->quantity;
//                    $order_details[] = [
//                        'product_id'    =>  $v->product->id,
//                        'quantity'      =>  $v->quantity,
//                        'unit_price'    =>  $per_unit_price,
//                        'sub_total'     =>  $sub_total,
//                        'order_id'      =>  $order->id,
//                        'created_at'    =>  date('Y-m-d H:i:s'),
//                        'updated_at'    =>  date('Y-m-d H:i:s')
//                    ];
//                }
//                OrderDetail::insert($order_details);
//                Cart::where('id',$cart->id)->delete();
//            });

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

}
