<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User_controller;
use App\Http\Controllers\Mail_controller;
use App\Http\Controllers\Otp_controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// --------------------------------------------------Index Page--------------------------------------------------------
Route::get('/', function () {
    if(isset($_COOKIE['UserId'])){
        Session::put('UserId',$_COOKIE['UserId']);
    }
    return view('index');
});

// --------------------------------------------------Contact Page--------------------------------------------------------

Route::get('/contact', function () {
    return view('contact');
});

// --------------------------------------------------About Page--------------------------------------------------------

Route::get('/about', function () {
    return view('about');
});

// --------------------------------------------------Login Page--------------------------------------------------------

Route::get('/login', function () {
    return view('login');
});
Route::get('/login/newuser', function () {
    return view('newuser');
});
Route::get('/login/otppage', function () {
    return view('otp');
});
Route::get('/login/passwordpage', function () {
    return view('password');
});

// Password Check 
Route::post('/success', [User_controller::class,'success']);

// --------------------------------------------------Registration Page--------------------------------------------------------
Route::get('/registration', [User_controller::class,'create']);
Route::post('/submit', [User_controller::class,'store']);

// --------------------------------------------------Dashboard Page--------------------------------------------------------
Route::get('/dashboard', [User_controller::class,'dashboard']);

// --------------------------------------------------Course Signup--------------------------------------------------------
Route::get('/signup/{x}/{y}', [User_controller::class,'signup']);
Route::get('/remove/{x}', [User_controller::class,'remove']);



// --------------------------------------------------Registration Edit Page--------------------------------------------------------
Route::get('/registrationedit/{x}', [User_controller::class,'registrationedit']);
Route::post('/update/{x}', [User_controller::class,'updateregistration']);


// --------------------------------------------------Contact Page Mail--------------------------------------------------------
Route::post('/sent', [Mail_controller::class,'sent']);

// --------------------------------------------------Login Access Pages--------------------------------------------------------
Route::post('/login/otp', [Otp_controller::class,'otp']);
Route::post('/login/password', [Otp_controller::class,'password']);
Route::post('/login/newpassword', [Otp_controller::class,'newpassword']);

// --------------------------------------------------Password Edit Page--------------------------------------------------------
Route::get('/changepassword/{x}', [User_controller::class,'changepassword']);
Route::post('/updatepassword/{x}', [User_controller::class,'updatepassword']);
Route::get('/delete/{x}', [User_controller::class,'destroy']);

// --------------------------------------------------Logout Page--------------------------------------------------------
Route::get('/logout', [User_controller::class,'logout']);