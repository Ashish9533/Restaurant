<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\RateLimiter;

class AuthController extends Controller
{
    public function login(){
        return view("auth.login");
    }

    // function signup(){
    //     return view("auth.signup");
    // }

    // function loginPost(){
    //     return view('');
    // }

    // public function auth_login(Request $request) {

       
    //     $remember = !empty($request->remember) ? true : false;

    //     if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1,
    //      'status' => 0, 'is_delete' => 0], $remember))
    //      {
    //         return redirect('panel/dashboard');
    //      } else {
    //         return redirect()->back()->with('error', "Please enter correct email and password");
    //      }
    // }



    public function auth_login(Request $request)
    {
        

            $validator = Validator::make($request->all(), [
                'email' => 'required|string|email|max:255',
                'password' => 'required|string|min:6',
            ]);

            if ($validator->fails()) {
                return response()->json([
                    'status' => false,
                    'message' => 'Validation errors',
                    'errors' => $validator->errors(),
                ], 422);
            }

            $email = $request->input('email');
            $key = 'login-attempts:' . $email;


            if (RateLimiter::tooManyAttempts($key, 5)) {
                return redirect()->back()->with('error', 'Too many login attempts. Please try again in ' . RateLimiter::availableIn($key) . ' seconds.');
                // return response()->json([
                //     'status' => 429,
                //     'message' => 'Too many login attempts. Please try again in ' . RateLimiter::availableIn($key) . ' seconds.',

                // ], 429);
            }






            // $customer = Customer::where('email', $email)->first();

            // $customerTrashed = $customer = Customer::withTrashed()->where('email', $request->email)->first();

            // if ($customerTrashed && $customerTrashed->trashed()) {
            //     return response()->json([
            //         'status' => 'temporary-deactive',
            //         'message' => 'Your account has been marked for deletion. You can restore it within 30 days.',
            //     ], 200);

            // }



            // if (!$customer) {

            //     RateLimiter::hit($key, 120);
            //     return response()->json([
            //         'status' => false,
            //         'message' => 'Customer not found',
            //     ], 404);
            // }





            // if ($customer->status == "0") {
            //     RateLimiter::hit($key, 120);
            //     return response()->json([
            //         'status' => 'deactive',
            //         'message' => 'Your Account is Deactivate Please Contact To Admin',
            //     ], 200);
            // }


            // if ($customer->is_verified == "0") {
            //     $this->resendOtp($request);
            //     return response()->json([
            //         'status' => false,
            //         'message' => 'Customer not verified, OTP resent',
            //     ], 200);
            // }


            $remember = !empty($request->remember) ? true : false;

                 if(Auth::attempt(['email' => $request->email, 'password' => $request->password, 'is_admin' => 1,
                  'status' => 0, 'is_delete' => 0], $remember))
                     {
                       RateLimiter::clear($key);

                       return redirect('panel/dashboard');
                   } else {
                    RateLimiter::hit($key, 120);
                 
                     return redirect()->back()->with('error', "Please enter correct email and password");
                }



           


           


   

           
         
    }




}
