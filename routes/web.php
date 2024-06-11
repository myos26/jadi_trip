<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('index');
});
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

// AUTH LOGIN REGISTER
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register', function () {
    return view('auth.register');
});
Route::get('/verifikasi', function () {
    return view('auth.verifikasi');
});

// ADMIN ROUTES
Route::get('/backend', function () {
    return view('admin.index');
});

Route::get('/Dashboard', [AdminController::class, 'Dashboard']);
