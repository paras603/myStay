<?php

namespace App\Http\Controllers\Front;

use App\Helpers\HomestayHelper;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\ProfileRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = \auth()->user();
        return view('front.user.index', compact('user'));
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
    public function store(Request $request)
    {
        //
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
    public function edit()
    {
        $user = \auth()->user();
        $is_merchant = HomestayHelper::isVerifiedMerchant($user);
       
        return View('front.user.edit', compact('user','is_merchant'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProfileRequest $request,  $id)
    {
        $user=User::findOrFail($id);
        // dd($request->all());
        User::where('id', $id)->update([
            'first_name'        => $request->input('first_name'),
            'last_name'         => $request->input('last_name'),
            'password'          => Hash::make($request->input('password')),
            // 'email'             => $request->input('email'),
            // 'role_id'           => $request->input('role_id'),
            // 'updated_at'        => now(),

        ]);
        return redirect()->route('front.user.edit', compact('user'))->with('alert.success', 'User Successfully Updated !!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function bookmark(){
        return view('front.user.bookmark');
    }
}
