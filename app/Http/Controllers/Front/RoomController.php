<?php

namespace App\Http\Controllers\Front;

use App\Helpers\HomestayHelper;
use App\Helpers\LocalHubHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\RoomRequest;
use App\Models\Homestay;
use App\Models\Room;

class RoomController extends Controller
{
    public function index(){
        $user = \auth()->user();
        if(HomestayHelper::isMerchant($user)){
            if(HomestayHelper::isVerifiedMerchant($user)){
                $rooms = Room::where('homestay_id', $user->merchant->homestay->id)->get();
                return view('front.room.index', compact('rooms'));
            }else{
                return redirect()->back()->with('toast.success', 'Please wait until we verify your merchant detail');
            }
        }else{
            return redirect()->route('front.merchant.index')->with('toast.error', 'First become a merchant to add rooms');
        }
    }

    public function create(){
        $user = \auth()->user();
        if(HomestayHelper::isMerchant($user)){
            if(HomestayHelper::isVerifiedMerchant($user)){
                return view('front.room.create');
            }else{
                return redirect()->back()->with('toast.success', 'Please wait until we verify your merchant detail');
            }
        }else{
            return redirect()->route('front.merchant.index')->with('toast.error', 'First become a merchant to add rooms');
        }
    }

    public function store(RoomRequest $request){
            $merchant = auth()->user()->merchant;
            $image = $request->file('image');
            $imageName = HomestayHelper::renameImageFileUpload($image);
            $image->storeAs(
                'public/uploads/rooms/',$imageName
            );
            Room::create([
                'type'             =>  $request->input('type'),
                'description'           =>  $request->input('description'),
                'image'                 =>  $imageName,
                'price'                 =>  $request->input('price'),
                'homestay_id'           =>  $merchant->homestay->id,
                'status'                =>  'active',
            ]);

            return redirect()->route('front.index')->with('toast.success', 'Room added');
    }

    public function edit($id){
        $room = Room::where('id', $id)->first();
        if(!$room || $room->homestay->merchant->user->id != auth()->user()->id){
            abort('404');
        }
        return view('front.room.edit', compact('room'));
    }

    public function update(RoomRequest $request,$id){
        $room = Room::where('id', $id)->first();
        if(!$room || $room->homestay->merchant->user->id != auth()->user()->id){
            abort('404');
        }
        if ($request->hasFile('image')) {
            @unlink(public_path('storage/uploads/rooms/' . $room->s));
            $imageName = HomestayHelper::renameImageFileUpload($request->file('image'));
            $request->file('image')->storeAs(
                'public/uploads/rooms', $imageName
            );
            $room->image = $imageName;
        }
        $room->type                 = $request->input('type');
        $room->description          = $request->input('description');
        $room->price                = $request->input('price');
        $room->status               = $request->input('status');
        $room->save();
        $homestay = $room->homestay;
        return view('front.homestay.detail', compact('homestay'))->with('toast.success', 'Room details updated');
    }
}
