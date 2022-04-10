<?php

namespace App\Helpers;

use App\Models\Merchant;
use Illuminate\Support\Str;

class HomestayHelper
{
    public static function renameImageFileUpload($file): string
    {
        $imageName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        return Str::of($imageName)->slug('_').'_'.date('YmdHis').'.'.$file->extension();
    }

    public static function isMerchant($user){
        $merchant = Merchant::where('user_id', $user->id)->first();
        if($merchant) return true;
        return false;
    }


    public static function isVerifiedMerchant($user){
        if(self::isMerchant($user)){
           return $user->merchant->verified === 'yes';
        }
        return false;
    }

}
