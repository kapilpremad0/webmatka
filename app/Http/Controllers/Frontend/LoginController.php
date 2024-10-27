<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
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


}
