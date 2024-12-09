<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Inertia\Inertia;


// Route::get('/', [AuthController::class, 'login']);

// Route::post('/', [AuthController::class, 'auth_login']);

// Route::get('panel/dashboard',function (){
//     return view('app');
// });

Route::get('/', function () {
    return Inertia::render('Welcome');
});