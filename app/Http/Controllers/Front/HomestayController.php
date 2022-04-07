<?php

namespace App\Http\Controllers\Front;

use App\Helpers\HomestayHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\HomestayRequest;
use App\Models\Homestay;
use App\Models\HomestayImage;
use App\Models\Merchant;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    public function index(){
        $user = \auth()->user();
        $merchant = Merchant::where('user_id', $user->id)->first();
        if($merchant){
            if($merchant->verified === Merchant::VERIFIED[0]){
                return view('front.homestay.index');
            }else{
                return redirect()->back()->with('toast.success', 'Please wait until we verify your merchant detail');
            }
        }else{
            return redirect()->route('front.merchant.index')->with('toast.error', 'First become a merchant to add homestay');
        }
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
                $homestay->nearby_places             = $request->input('nearby_places');
                $homestay->homestay_name             = $request->input('homestay_name');
                $homestay->iframe               = $request->input('iframe');



//            $package->excerpt       = $request->input('excerpt');
//            $package->time_frame    = $request->input('time_frame');
//            $package->service_id    = $request->input('service_id');
//            $package->updated_at    = date('Y-m-d H:i:s');
//            $package->label         = $request->input('service_id') . "(" . $request->input('title') . ')';
////            $package->style = $request->input('style') ?? 'tabular_style';
            $homestay->save();
        });
        return redirect()->route('front.index')->with('toast.success', 'Home stay details updated');
    }
}
