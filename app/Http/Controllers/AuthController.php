<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    function signup(){
        return view("auth.signup");
    }

    function loginPost(){
        return view('');
    }

    public function auth_login(Request $request) {

       
        $remember = !empty($request->remember) ? true : false;

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1,
         'status' => 0, 'is_delete' => 0], $remember))
         {
            return redirect('panel/dashboard');
         } else {
            return redirect()->back()->with('error', "Please enter correct email and password");
         }
    }
}
