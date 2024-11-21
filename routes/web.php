<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login']);

Route::post('/', [AuthController::class, 'auth_login']);

Route::get('panel/dashboard',function (){
    return view('app');
});
