<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Models\Bookmark;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class BookmarkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = \auth()->user();
        $bookmarks = Bookmark::where('user_id', $user->id)->get();
        // $bookmarks = Bookmark::all();
        // abort_if(!$room, 404);
        return view('front.user.bookmark', compact('bookmarks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,  $current_homestay)
    {
        $current_user = \auth()->user();
        Bookmark::create([
            'user_id'       =>  $current_user->id,
            'homestay_id'   =>  $current_homestay
            
        ]);

        return redirect()->back()->with('toast.success', 'Homestay Bookmarked');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bookmark::where('id', $id)->delete();
        return redirect()->back()->with('toast.success', 'Bookmark Removed');
    }
}
