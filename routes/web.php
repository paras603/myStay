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
    Route::get('my-customer-booking', [\App\Http\Controllers\Front\BookingController::class, 'myCustomers'])->name('front.my-customer-booking.index');
    Route::post('booking/checkout', [\App\Http\Controllers\Front\BookingController::class, 'checkout'])->name('front.booking.checkout');
    Route::post('booking/checkout/verify',[App\Http\Controllers\Front\BookingController::class,'verify'])->name('front.checkout.verify');
    // Route::get('booking/success', [\App\Http\Controllers\Front\BookingController::class, 'success'])->name('front.booking.success');
    Route::get('booking/show', [\App\Http\Controllers\Front\BookingController::class, 'show'])->name('front.user.bookings');
    Route::post('homestay/rate/{id}', [\App\Http\Controllers\Front\HomestayController::class, 'rate'])->name('front.homestay.rate');

    Route::resource('rooms', \App\Http\Controllers\Front\RoomController::class);
    // Route::resource('my-customers', \App\Http\Controllers\Front\RoomController::class);
    Route::get('homestay/{slug}', [\App\Http\Controllers\Front\HomestayController::class, 'show'])->name('front.homestay.show');
    Route::get('homestay/edit/{homestay}', [\App\Http\Controllers\Front\HomestayController::class, 'edit'])->name('front.homestay.edit');
    Route::put('homestay/update/{homestay}', [\App\Http\Controllers\Front\HomestayController::class, 'update'])->name('front.homestay.update');
    Route::get('merchant', [\App\Http\Controllers\Front\MerchantController::class, 'index'])->name('front.merchant.index');
    Route::post('merchant/store', [\App\Http\Controllers\Front\MerchantController::class, 'store'])->name('front.merchant.create');
    Route::post('homestay/feature/verify',[App\Http\Controllers\Front\HomestayController::class,'verify'])->name('front.homestay.featuredVerify');
    Route::get('/homestay/feature/{homestay}', [\App\Http\Controllers\Front\HomestayController::class, 'feature'])->name('front.homestay.feature');
    Route::post('/homestay/feature/{homestay}', [\App\Http\Controllers\Front\HomestayController::class, 'featureStore'])->name('front.homestay.featureStore');



    Route::get('user/index', [\App\Http\Controllers\Front\UserController::class, 'index'])->name('front.user.index');
    Route::get('user/edit', [\App\Http\Controllers\Front\UserController::class, 'edit'])->name('front.user.edit');
    Route::put('user/update/{id}', [\App\Http\Controllers\Front\UserController::class, 'update'])->name('user-setting.update');

    // Route::get('user/bookmark', [\App\Http\Controllers\Front\UserController::class, 'bookmark'])->name('front.user.bookmark');


    Route::get('blog/index', [\App\Http\Controllers\Front\BlogController::class, 'index'])->name('front.blog.index');
    Route::get('blog/create', [\App\Http\Controllers\Front\BlogController::class, 'create'])->name('front.blog.create');
    Route::post('blog/store', [\App\Http\Controllers\Front\BlogController::class, 'store'])->name('front.blog.store');

    Route::post('booking/store/{homestay_id}', [\App\Http\Controllers\Front\BookmarkController::class, 'store'])->name('front.bookmark.store');
    Route::get('booking/index', [\App\Http\Controllers\Front\BookmarkController::class, 'index'])->name('front.bookmark.index');
    Route::post('booking/delete/{bookmark_id}', [\App\Http\Controllers\Front\BookmarkController::class, 'destroy'])->name('front.bookmark.delete');

    //Route::get('merchant-setting', [\App\Http\Controllers\Front\MerchantController::class, 'merchantSettings'])->name('merchant-settings');
    //Route::get('homestay/details', [\App\Http\Controllers\Front\HomestayController::class, 'index'])->name('front.homestay.index');

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('users', \App\Http\Controllers\Dashboard\UserController::class);
        Route::resource('merchants', \App\Http\Controllers\Dashboard\MerchantController::class);
        Route::resource('homestays', \App\Http\Controllers\Dashboard\HomestayController::class);
        Route::resource('bookings', \App\Http\Controllers\Dashboard\BookingController::class);
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

// Route::get('blogs', function(){
//     return view('front.blog.blogs');
// });
// Route::get('blog', function(){
//     return view('front.blog.view');
// });

Route::get('faq', function(){
    return view('pages.faq');
});

Route::get('blogs', [\App\Http\Controllers\Front\BlogController::class, 'blogs'])->name('front.blogs');
Route::get('blog/{id}', [\App\Http\Controllers\Front\BlogController::class, 'blog'])->name('front.blog');
