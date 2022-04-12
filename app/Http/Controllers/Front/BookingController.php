<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Room;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index(Request $request){
        $room = Room::where('id', $request->input('room'))->first();
        abort_if(!$room, 404);
        return view('front.booking.index', compact($room));
    }
}
