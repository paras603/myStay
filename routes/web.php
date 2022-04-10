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



// Route::get('login', [EcommerceController::class, 'loginPage']);

//Route::get('customer-signin', [MyStayController::class, 'customerSigninPage']);
//
//Route::get('merchant-signin', [MyStayController::class, 'merchantSigninPage']);
//
//Route::get('customer-signup', [MyStayController::class, 'customerSignupPage']);
//
//Route::get('merchant-signup', [MyStayController::class, 'merchantSignupPage']);
//
//Route::get('customer', [MyStayController::class, 'customerDashboard']);
//
//Route::get('blogs', [MyStayController::class, 'blogsPage']);
//
//Route::get('blog', [MyStayController::class, 'blogPage']);
//
//Route::get('faq', [MyStayController::class, 'faqPage']);
//
//Route::get('customer-details', [MyStayController::class, 'customerDetailsPage']);
//
//Route::get('customer-bookings', [MyStayController::class, 'customerBookingsPage']);
//
//Route::get('customer-blogs', [MyStayController::class, 'customerBlogsPage']);
//
//Route::get('customer-settings', [MyStayController::class, 'customerSettingsPage']);
//
//Route::get('homestay', [MyStayController::class, 'homestayPage']);
//
//Route::get('bookmark', [MyStayController::class, 'bookmarkPage']);
//
//Route::get('search', [MyStayController::class, 'searchPage']);
//
//Route::get('merchant', [MyStayController::class, 'merchantPage']);
//
//Route::get('merchant-settings', [MyStayController::class, 'merchantsettingPage']);
//
//Route::get('merchant-view', [MyStayController::class, 'merchantViewPage']);
//
//Route::get('customer-add-blog', [MyStayController::class, 'addBlogPage']);

Route::get('/', [\App\Http\Controllers\Front\HomeController::class, 'index'])->name('front.index');
Route::group(['middleware' => ['auth', 'verified']], function () {
    Route::get('/email-verified', function (){
        return view('auth.email-verified');
    });

    Route::get('room', [\App\Http\Controllers\Front\RoomController::class, 'index'])->name('front.room.index');
    Route::get('room/create', [\App\Http\Controllers\Front\RoomController::class, 'create'])->name('front.room.create');
    Route::post('room/store', [\App\Http\Controllers\Front\RoomController::class, 'store'])->name('front.room.store');
    Route::post('room/show', [\App\Http\Controllers\Front\RoomController::class, 'store'])->name('front.room.show');
    Route::get('homestay/{slug}', [\App\Http\Controllers\Front\HomestayController::class, 'index'])->name('front.homestay.index');
    Route::get('homestay/edit/{homestay}', [\App\Http\Controllers\Front\HomestayController::class, 'edit'])->name('front.homestay.edit');
    Route::put('homestay/update/{homestay}', [\App\Http\Controllers\Front\HomestayController::class, 'update'])->name('front.homestay.update');
    Route::get('merchant', [\App\Http\Controllers\Front\MerchantController::class, 'index'])->name('front.merchant.index');
    Route::post('merchant', [\App\Http\Controllers\Front\MerchantController::class, 'store'])->name('front.merchant.create');

//    Route::get('merchant-setting', [\App\Http\Controllers\Front\MerchantController::class, 'merchantSettings'])->name('merchant-settings');
//    Route::get('homestay/details', [\App\Http\Controllers\Front\HomestayController::class, 'index'])->name('front.homestay.index');

    Route::group(['prefix' => 'dashboard'], function () {
        Route::get('/', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])->name('dashboard.index');
        Route::resource('users', \App\Http\Controllers\Dashboard\UserController::class);
        Route::resource('merchants', \App\Http\Controllers\Dashboard\MerchantController::class);
        Route::resource('homestays', \App\Http\Controllers\Dashboard\HomestayController::class);
    });
});


// Route::get('customer-signouts',[Login::class,'logout']);

/*login*/
// Route::post('/customerRegister', [Login::class, 'customerRegister']);
// Route::post('/merchantRegister', [Login::class, 'merchantRegister']);
// Route::post('/merchantLogin', [Login::class, 'merchantLogin']);
//Route::post('/customerLogin', [Login::class, 'customerLogin']);
