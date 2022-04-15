<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyStayController;
use App\Http\Controllers\Login;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('front.index');
Route::get('/search', [\App\Http\Controllers\Front\HomeController::class , 'search'])->name('front.search');

Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/email-verified', function (){
        return view('auth.email-verified');
    });

    Route::get('booking', [\App\Http\Controllers\Front\BookingController::class, 'index'])->name('front.booking.index');
    Route::post('booking/checkout', [\App\Http\Controllers\Front\BookingController::class, 'checkout'])->name('front.booking.checkout');
    Route::post('booking/checkout/verify',[App\Http\Controllers\Front\BookingController::class,'verify'])->name('front.checkout.verify');
    Route::get('booking/success', [\App\Http\Controllers\Front\BookingController::class, 'success'])->name('front.booking.success');


    Route::resource('rooms', \App\Http\Controllers\Front\RoomController::class);
    Route::get('homestay/{slug}', [\App\Http\Controllers\Front\HomestayController::class, 'show'])->name('front.homestay.show');
    Route::get('homestay/edit/{homestay}', [\App\Http\Controllers\Front\HomestayController::class, 'edit'])->name('front.homestay.edit');
    Route::put('homestay/update/{homestay}', [\App\Http\Controllers\Front\HomestayController::class, 'update'])->name('front.homestay.update');
    Route::get('merchant', [\App\Http\Controllers\Front\MerchantController::class, 'index'])->name('front.merchant.index');
    Route::post('merchant/store', [\App\Http\Controllers\Front\MerchantController::class, 'store'])->name('front.merchant.create');

    Route::get('user/edit', [\App\Http\Controllers\Front\UserController::class, 'edit'])->name('front.user.edit');
    Route::put('user/update/{id}', [\App\Http\Controllers\Front\UserController::class, 'update'])->name('user-setting.update');

//    Route::get('merchant-setting', [\App\Http\Controllers\Front\MerchantController::class, 'merchantSettings'])->name('merchant-settings');
//    Route::get('homestay/details', [\App\Http\Controllers\Front\HomestayController::class, 'index'])->name('front.homestay.index');

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('users', \App\Http\Controllers\Dashboard\UserController::class);
        Route::resource('merchants', \App\Http\Controllers\Dashboard\MerchantController::class);
        Route::resource('homestays', \App\Http\Controllers\Dashboard\HomestayController::class);
    });
});


//Route::get('booking', function(){
//    return view('front.booking.booking');
//});

//Route::get('payment', function(){
//    return view('front.booking.payment');
//});

Route::get('payment-success', function(){
    return view('front.booking.payment-success');
});

Route::get('blogs', function(){
    return view('front.blog.blogs');
});
Route::get('blog', function(){
    return view('front.blog.view');
});
