<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MyStayController;

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

Route::get('/', function () {
    return view('pages/home');
});

// Route::get('login', [EcommerceController::class, 'loginPage']);

Route::get('customer-signin', [MyStayController::class, 'customerSigninPage']);

Route::get('merchant-signin', [MyStayController::class, 'merchantSigninPage']);

Route::get('customer-signup', [MyStayController::class, 'customerSignupPage']);

Route::get('merchant-signup', [MyStayController::class, 'merchantSignupPage']);

Route::get('blog', [MyStayController::class, 'blogPage']);