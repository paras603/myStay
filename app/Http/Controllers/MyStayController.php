<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyStayController extends Controller
{
    public function customerSigninPage(){
        return view('pages.customer-signin');
    }

    public function merchantSigninPage(){
        return view('pages.merchant-signin');
    }

    public function customerSignupPage()
    {
        return view('pages.customer-signup');
    }

    public function merchantSignupPage(){
        return view('pages.merchant-signup');
    }

    public function blogsPage(){
        return view('pages.blogs');
    }

    public function blogPage(){
        return view('pages.blog');
    }

    public function faqPage()
    {
        return view('pages.faq');
    }

    public function customerDashboard(){
        return view('pages.customer');
    }

    public function customerProfilePage(){
        return view('pages.customer-profile');
    }
}
