<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function login() {
        return view('login');
    }

    function registration() {
        return view('registration');
    }

    function loginPost(Request $request) {
       $request->validate([
        'email' => 'required',
        'password' => 'required'
       ]);

       $credentials = $request->only('email', 'password');
       if(Auth::attempt($credentials)){
        return redirect()->intended(route('home'));
       }
       return redirect(route('login'))->with("error", "Login details are not valid");
    }

    function registrationPost() {
        
    }
}
