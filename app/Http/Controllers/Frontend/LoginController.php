<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\LoginRequest;
use App\Http\Requests\Frontend\RegisterRequest;
use App\Http\Requests\Frontend\StoreBankDetailRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function login(){
        return view('frontend.auth.login');
    }

    function register(){
        return view('frontend.auth.register');
    }

    function signup(RegisterRequest $request){
        $data = $request->validated();
        $data['password'] = Hash::make($request->password);
        $data['password_2'] = $request->password;
        $data['role'] = User::$user;
        $user = User::create($data);
        session()->flash('success','Register Successfully Please Login Your Account');
        return route('login');
    }

    function signin(LoginRequest $request){
        if (Auth::attempt($request->validated())) {
            session()->flash('success','Login Successfully');
            return route('home');
        } else {
            session()->flash('error','Your email and password did not match');
            return route('login');
        }
    }

    function logout (){
        Auth::logout();
        return redirect()->route('login')->with('success','Logout Successfully');
    }

    function profile(){
        return view('frontend.profile.index');
    }


    function bankDetail(){
        return view('frontend.profile.bank_detail');
    }


    function submitBankDetail(StoreBankDetailRequest $request){
        User::where('id',auth()->user()->id)->update($request->validated());
        session()->flash('success','Bank Detail Update Successfully');
    }


}
