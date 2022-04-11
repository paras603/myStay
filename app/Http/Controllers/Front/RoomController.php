<?php

namespace App\Http\Controllers\Front;

use App\Helpers\HomestayHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\Models\Merchant;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoomController extends Controller
{
    public function index(){

    }

    public function create(){
        $user = \auth()->user();
        if(HomestayHelper::isMerchant($user)){
            if(HomestayHelper::isVerifiedMerchant($user)){
                return view('front.room.add');
            }else{
                return redirect()->back()->with('toast.success', 'Please wait until we verify your merchant detail');
            }
        }else{
            return redirect()->route('front.merchant.index')->with('toast.error', 'First become a merchant to add rooms');
        }
    }

    public function store(RoomRequest $request){
            $merchant = auth()->user()->merchant;
            $image = $request->file('room_image');
            $imageName = HomestayHelper::renameImageFileUpload($image);
            $image->storeAs(
                'public/uploads/rooms/',$imageName
            );
            Room::create([
                'room_type'             =>  $request->input('room_type'),
                'description'           =>  $request->input('description'),
                'image'                 =>  $imageName,
                'price'                 =>  $request->input('price'),
                'homestay_id'           =>  $merchant->homestay->id,
                'status'                =>  'active',
            ]);

            return redirect()->route('front.index')->with('toast.success', 'Room added');
    }

    public function update(){
//        return view('front.room.edit');
    }
}
