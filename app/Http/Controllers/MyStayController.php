<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyStayController extends Controller
{
    public function customerSigninPage(){
        return view('pages.customer-signin');
    }

    public function merchantSigninPage(){
        return view('pages.merchant-singin');
    }

    public function customerSignupPage()
    {
        return view('pages.customer-signup');
    }

    public function merchantSignupPage(){
        return view('pages.merchant-signup');
    }

    public function blogPage(){
        return view('pages.blog');
    }
}
