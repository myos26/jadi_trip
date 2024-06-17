<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Models\User;
use App\Models\Iklan;
use App\Models\Post;

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
Route::get('/dashboard', function(){
    return view('admin.index');
});

Route::get('/blog', [HomeController::class, 'blog'])->name('blog');

Route::get('/blog', function () {
    $iklans = Iklan::all();
    $Datalink = Post::all();
    return view('blog', compact('iklans','Datalink'));
})->name('blog');

Route::get('/temp-home', [HomeController::class, 'verifyOtp']);

// route auth
Route::get('/login', [AuthController::class, 'loginView'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'registerView']);
Route::post('/register', [AuthController::class, 'register']);
Route::get('/verify', [AuthController::class, 'verifyInfo'])->middleware('auth');
Route::post('/verified', [AuthController::class, 'verified']);
Route::get('/info', [AuthController::class, 'info'])->middleware('auth');
Route::post('/verified-info', [AuthController::class, 'infoVerified']);


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
Route::get('/article', function () {
    return view('article');
});

Route::get('/logout', [AuthController::class, 'logout']);
