<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;

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
        $total = (int)$days_count * $per_night_price;
        $booking = [
         'start_date'           =>          $start_date,
         'end_date'             =>          $end_date,
         'room_id'              =>          $room,
        ];
       if(session('booking')){
           session()->forget('booking');
       }
       session(['booking' => $booking]);
        return view('front.booking.payment' , compact('days_count', 'total', 'room'));
    }
}
