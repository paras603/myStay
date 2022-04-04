<?php

namespace App\Http\Controllers\Front;

use App\Helpers\HomestayHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\MerchantRequest;
use App\Models\Merchant;
use Illuminate\Support\Facades\Auth;


class MerchantController extends Controller
{
    public function index(){
        return view('front.merchant');
    }

    public function store(MerchantRequest $request){
        $user = Auth::user();
        $identity_front = $request->file('identity_front');
        $identity_back = $request->file('identity_back') ;
        $pan_number = $request->input('pan_number');

        $identity_front_image = HomestayHelper::renameImageFileUpload($identity_front);
        $identity_back_image = HomestayHelper::renameImageFileUpload($identity_back);
        $identity_front->storeAs(
            'public/uploads/users/' . $user->id, $identity_front_image
        );
        $identity_back->storeAs(
            'public/uploads/users/' . $user->id, $identity_back_image
        );
        /** Merchant::VERIFIED[0]  =>  'yes' */
        Merchant::create([
           'pan_number'             =>           $pan_number,
           'identity_front'         =>           $identity_front_image,
            'identity_back'         =>           $identity_back_image,
            'verified'              =>           Merchant::VERIFIED[0],
            'user_id'               =>           $user->id,
        ]);
        return redirect()->route('front.index')->with('toast.success', 'Merchant Successfully Registered !!');
    }
}
