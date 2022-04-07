<?php

namespace App\Providers;

use App\Models\Merchant;
use http\Client\Curl\User;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Guard $auth)
    {
        view()->composer('*', function($view) use ($auth) {
            $user = $auth->user();
            $is_merchant = false;
            if (Schema::hasTable('merchants') && Schema::hasTable('users')) {
                if($user){
                    $merchant = Merchant::where('user_id', $user->id)->first();
                    if($merchant && $merchant->verified === Merchant::VERIFIED[0]){
                        $is_merchant = true;
                        if($merchant->homestay){
                            $home_stay = $merchant->homestay->homestay_name;
                            \View::share('GLOBAL_HOMESTAY', $home_stay);
                        }
                    }
                }
            }
            \View::share('GLOBAL_MERCHANT', $is_merchant);
        });



    }

}
