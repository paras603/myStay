<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Merchant;
use Illuminate\Http\Request;

class HomestayController extends Controller
{
    public function update(){
        $user = \auth()->user();
        $merchant = Merchant::where('user_id', $user->id)->first();
        if($merchant){
            if($merchant->verified === Merchant::VERIFIED[0]){
                return view('front.homestay_settings');
            }else{
                return redirect()->back()->with('toast.success', 'Please wait until we verify your merchant detail');
            }
        }else{
            abort(401);
        }
    }
    public function index(){
        $user = \auth()->user();
        $merchant = Merchant::where('user_id', $user->id)->first();
        if($merchant){
            if($merchant->verified === Merchant::VERIFIED[0]){
                return view('front.homestay');
            }else{
                return redirect()->back()->with('toast.success', 'Please wait until we verify your merchant detail');
            }
        }else{
            abort(401);
        }
    }

    public function homestaySettings(){
        $user = \auth()->user();
        $merchant = Merchant::where('user_id', $user->id)->first();
        if($merchant){
            if($merchant->verified === Merchant::VERIFIED[0]){
                return view('front.homestay-settings');
            }else{
                return redirect()->back()->with('toast.success', 'Please wait until we verify your merchant detail');
            }
        }else{
            abort(401);
        }
    }
}
