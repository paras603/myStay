<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Review;

class ReviewController extends Controller
{
    // public function index($current_homestay)
    // {
    //     $reviews = Review::where('homestay_id', $current_homestay)->get();
    //     @dd($reviews);
    //     return view('front.homestay.detail', compact('reviews'));
    // }

    public function store(Request $request,  $current_homestay)
    {

        $current_user = \auth()->user();
        Review::create([
            'review'        =>  $request->input('review_desc'),
            'user_id'       =>  $current_user->id,
            'homestay_id'   =>  $current_homestay
            
        ]);

        return redirect()->back()->with('toast.success', 'Homestay Reviewed');
    }

    // public function show($current_homestay){
    //     $reviews = Review::where('homestay_id', $current_homestay)->get();
    //     dd($reviews);
    //     return view('front.homestay.detail', compact('reviews'));
    // }
}
