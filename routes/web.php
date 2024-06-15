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
Route::get('/blog', [HomeController::class, 'blog'])->name('blog');
// Route::get('/blog/{kategori?}', function(){return view('blog');})->name('blogs');

Route::get('/login', function(){
return view('auth/login');
});
Route::get('/register', function(){
    return view('auth/register');
});
Route::get('/verify', function(){
    return view('auth/verifikasi');
});
Route::get('/info', function(){
    return view('auth/lengkap_data');
});
Route::get('/paket', function(){
    return view('paket');
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
