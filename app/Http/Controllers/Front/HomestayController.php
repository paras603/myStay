<?php

namespace App\Http\Controllers\Front;

use App\Helpers\HomestayHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\HomestayRequest;
use App\Models\Homestay;
use App\Models\HomestayImage;
use App\Models\Merchant;
use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomestayController extends Controller
{

    public function show($homestay_name){
        abort_if(!$homestay_name, 404);
        $homestay = Homestay::with('rooms')->where('homestay_name', $homestay_name)->first();
        abort_if(!$homestay, 404);
        return view('front.homestay.detail', compact('homestay'));
//        $user = \auth()->user();
//        if(HomestayHelper::isMerchant($user)) {
//            if (HomestayHelper::isVerifiedMerchant($user)) {
//
//
//                return view('front.homestay.detail', compact('homestay'));
//            } else {
//                return redirect()->back()->with('toast.success', 'Please wait until we verify your merchant detail');
//            }
//        }else{
//            return redirect()->route('front.merchant.index')->with('toast.error', 'First become a merchant to add homestay');
//        }
    }

    public function edit($homestay){
        $user = \auth()->user();
        $merchant = Merchant::where('user_id', $user->id)->first();
        $homestay = Homestay::with('homestayImages')->where('homestay_name', $homestay)->first();
        if(!$homestay){
            abort('404');
        }
        if(!$merchant || !($homestay->merchant_id === $merchant->id)){
            abort(401);
        }
        return View('front.homestay.edit', compact('homestay'));
    }

    public function update(HomestayRequest $request, $homestay_name){
        $homestay = Homestay::with('homestayImages')->where('homestay_name', $homestay_name)->first();
        \DB::transaction(function () use ($request, $homestay) {
            if ($request->hasFile('homestay_image')) {
                if($homestay->homestayImages->count() > 0){
                    foreach($homestay->homestayImages as $image){
                        @unlink(public_path('storage/uploads/homestay/' . $image->image));
                    }
                }
                $homestay_images = $request->file('homestay_image');
                    foreach($homestay_images as $image) {
                        $imageName = HomestayHelper::renameImageFileUpload($image);
                        $image->storeAs(
                            'public/uploads/homestay/',$imageName
                        );
                        HomestayImage::create([
                            'image'                     =>          $imageName,
                            'homestay_id'               =>          $homestay->id
                        ]);
                    }
            }
                $homestay->slogan               = $request->input('slogan');
                $homestay->description          = $request->input('description');
                $homestay->telephone            = $request->input('telephone');
                $homestay->services             = $request->input('services');
                $homestay->nearby_places        = $request->input('nearby_places');
                $homestay->homestay_name        = $request->input('homestay_name');
                $homestay->iframe               = $request->input('iframe');
                $homestay->updated_at           = now();
                $homestay->save();
        });
        return redirect()->route('front.index')->with('toast.success', 'Home stay details updated');
    }

    public function rate(Request $request, $id){
        $request->validate([
            'rating' => ["required","numeric","max:5","min:1"],
        ]);
        $homestay = Homestay::findorFail($id);
        $user = Auth::user();
        $can_rate = false;
        if($user->points >= 100){
            $user_bookings = $user->bookings;
            $homestay_arr = [];
            foreach ($user_bookings as $booking){
                $homestay_arr[]= $booking->room->homestay_id;
            }
            if(in_array($homestay->id, $homestay_arr))  $can_rate = true;
        }
        if($can_rate){
            $current_homestay_rating = $homestay->rating;
            $homestay->rating = ceil(($current_homestay_rating + $request->input('rating'))/2);
            $homestay->save();
            $user->points = $user->points - 100;
            $user->save();
            return redirect()->back()->with('toast.success', 'Rated');
        }
        return redirect()->back()->with('toast.error', 'Unauthorized');
    }
}
