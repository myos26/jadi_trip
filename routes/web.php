<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/article', function () {
    return view('article');
});

// auth route
Route::get('/login', function () {
    return view('auth.login');
});
// Route::get('/register', [AuthController::class, 'index']);
// Route::post('/register', [AuthController::class, 'register']);

Route::get('/register', function () {
    return view('auth.coba');
});
Route::post('/register', [AuthController::class, 'register']);

Route::get('/temp-home', [HomeController::class, 'verifyOtp']);
Route::get('/verify-otp-page', function () {
    return view('auth.verifikasi');
});
Route::post('/verified', [AuthController::class, 'verified']);

Route::get('/logout', [AuthController::class, 'logout']);
