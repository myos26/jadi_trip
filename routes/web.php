<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use App\Models\User;

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

Route::get('/temp-home', [HomeController::class, 'verifyOtp']);

// route auth
Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::get('/register', [AuthController::class, 'registerView']);
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/verified', [AuthController::class, 'verified']);
Route::post('/verified-info', [AuthController::class, 'infoVerified']);

// auth route guarded
Route::middleware(['auth'])->group(function () {
    Route::get('/verify', [AuthController::class, 'verifyInfo']);
    Route::get('/info', [AuthController::class, 'info']);
    Route::get('/logout', [AuthController::class, 'logout']);

    // ADMIN ROUTES
    Route::get('/Dashboard', [AdminController::class, 'Dashboard']);
    Route::get('/profil', [ProfileController::class, 'index']);
    Route::get('/postingan', [PostController::class, 'index']);
    Route::get('/tambahpostingan', [PostController::class, 'TambahPostingan']);
    Route::post('/upload', [PostController::class, 'upload'])->name('ckeditor.upload');
});


// route blog
Route::get('/paket', function () {
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
Route::get('/article/{slug}', [PostController::class, 'post']);
