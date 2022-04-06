<?php

namespace App\Http\Controllers\Front;

use App\Helpers\HomestayHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\MerchantRequest;
use App\Models\Homestay;
use App\Models\Merchant;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class MerchantController extends BaseFrontController
{
    public function index(){
        $user = Auth::user();
        $merchant = Merchant::where('user_id', $user->id)->first();
        if($merchant){
            if($merchant->verified === Merchant::VERIFIED[0]){
                return redirect()->back()->with('toast.success', 'You are already a merchant');
            }else{
                return redirect()->back()->with('toast.success', 'Please wait until we verify your merchant detail');
            }
        }
        return view('front.merchant');
    }

    public function store(MerchantRequest $request){
        $user = Auth::user();
        DB::transaction(function () use ($request, $user){
            $identity_front = $request->file('identity_front');
            $identity_back = $request->file('identity_back');
            $merchant = $request->file('merchant_image');

            $pan_number = $request->input('pan_number');
            $identity_front_image = HomestayHelper::renameImageFileUpload($identity_front);
            $identity_back_image = HomestayHelper::renameImageFileUpload($identity_back);
            $merchant_image = HomestayHelper::renameImageFileUpload($merchant);

            $identity_front->storeAs(
                'public/uploads/users/' . $user->id, $identity_front_image
            );
            $identity_back->storeAs(
                'public/uploads/users/' . $user->id, $identity_back_image
            );
            $merchant->storeAs(
                'public/uploads/users/' . $user->id, $merchant_image
            );

            $registration = $request->file('registration_certificate');
            $registration_image = HomestayHelper::renameImageFileUpload($registration);

            $registration->storeAs(
                'public/uploads/homestay', $registration_image
            );

            /** Merchant::VERIFIED[1]  =>  'now' */
            $merchant = Merchant::create([
                'identity_front'                =>           $identity_front_image,
                'identity_back'                 =>           $identity_back_image,
                'merchant_image'                =>           $merchant_image,
                'verified'                      =>           Merchant::VERIFIED[1],
                'user_id'                       =>           $user->id,
            ]);

            Homestay::create([
                'pan_number'                        =>           $pan_number,
                'registration_certificate'          =>           $registration_image,
                'homestay_name'                     =>           $request->input('homestay_name'),
                'homestay_address'                  =>           $request->input('homestay_address'),
                'telephone'                         =>           $request->input('telephone'),
                'merchant_id'                       =>           $merchant->id,
            ]);
        });
        return redirect()->route('front.index')->with('toast.success', 'Merchant Successfully Registered !!');
    }


}
