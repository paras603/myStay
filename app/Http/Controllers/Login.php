<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\custRegister;
use App\Models\merchantRegister;
use Illuminate\Support\Facades\Hash;
use Session;

class Login extends Controller
{
    //
    public function customerRegister(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:cust_registers|unique:merchant_registers',
            'password' => 'required',
            'confirmPassword' => 'required',
            'Agree' => 'required',
        ]);

        $password = $request->password;
        $con_password = $request->confirmPassword;
        if ($password != $con_password){
            return redirect()->back()->with('status','password and confirm password did not matched');
        } else{
            $custRegister = new custRegister;
            $custRegister->name=$request->name;
            $custRegister->email=$request->email;
            $custRegister->password=Hash::make($request->password);
            $custRegister->confirmPassword=Hash::make($request->confirmPassword);
            $custRegister->Agree=$request->has('Agree');
            $custRegister->save();
            return redirect()->back()->with('status','Successfully registered');
       
        }
       
    }


    public function merchantRegister(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:cust_registers|unique:merchant_registers',
            'password' => 'required',
            'confirmPassword' => 'required',
            'Agree' => 'required',
        ]);

        $password = $request->password;
        $con_password = $request->confirmPassword;
        if ($password != $con_password){
            return redirect()->back()->with('status','password and confirm password did not matched');
        } else{
            $merchantRegister = new merchantRegister;
            $merchantRegister->name=$request->name;
            $merchantRegister->email=$request->email;
            $merchantRegister->password=Hash::make($request->password);
            $merchantRegister->confirmPassword=Hash::make($request->confirmPassword);
            $merchantRegister->Agree=$request->has('Agree');
            $merchantRegister->save();
            return redirect()->back()->with('status','Successfully registered');
       
        }
       
    }

    public function customerLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = custRegister::where(['email'=>$request->email])->first();
        if ( !$user || !Hash::check($request->password,$user->password))
        {
            return redirect()->back()->with('status','Email or password not correct');
        }
        else{
            $request->Session()->put('user',$user);
            return redirect('/');
        }
    }

    public function merchantLogin(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = merchantRegister::where(['email'=>$request->email])->first();
        if ( !$user || !Hash::check($request->password,$user->password))
        {
            return redirect()->back()->with('status','Email or password not correct');
        }
        else{
            $request->Session()->put('user',$user);
            return redirect('/');
        }
    }

    public function logout(){
        Session::forget('user');
        return redirect ('/');
    }
}
