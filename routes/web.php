<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\IklanController;
use App\Models\Post;
use App\Models\User;
use App\Models\iklan;
use App\Models\Kategori;
use Illuminate\Routing\RouteGroup;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;


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

Route::get('/blog/{Kategori?}', [HomeController::class, 'blog']);
Route::get('/blog', [HomeController::class, 'blog']);




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
    Route::post('/resend-code', [AuthController::class, 'resendCode']);
    Route::get('/logout', [AuthController::class, 'logout']);
});

Route::middleware(['auth', 'admin'])->group(function () {
    // ADMIN ROUTES
    Route::get('/Dashboard', [AdminController::class, 'Dashboard']);
    Route::get('/profil', [ProfileController::class, 'index']);
    Route::get('/postingan', [PostController::class, 'index']);

    // post routes
    Route::get('/create', [PostController::class, 'create']);
    Route::post('/upload', [PostController::class, 'upload']);
    Route::post('/save-post', [PostController::class, 'store']);
    Route::get('/update/{id}', [PostController::class, 'updateView']);
    Route::post('/update-post/{id}', [PostController::class, 'update']);
    Route::get('/delete/{id}', [PostController::class, 'destroy']);

    // kategori routes
    Route::post('/kategori', [PostController::class, 'storeKategori']);
    Route::get('/kategori/delete/{id}', [PostController::class, 'deleteKategori']);

    // iklan routes
    Route::get('/iklan', [IklanController::class, 'iklan']);

    // profile routes
    Route::put('/update/profile/{id}', [ProfileController::class, 'update']);
});


// route blog
Route::get('/paket/{kategori?}', function () {

    return view('paket');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/category', function () {
    return view('category');
});
Route::get('/kontak', function () {
    return view('contact');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/detail paket/{type?}', function () {
    return view('detailPaket');
});
Route::get('/article/{slug}', [PostController::class, 'post']);

Route::get('/auth', [AuthController::class, 'handleAuth']);

Route::get('/sitemap.xml', function () {
    $sitemap = Sitemap::create()
        ->add(ManifestUrl::create('/')->setLastModificationDate(now())->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)->setPriority(1.0))
        ->add(Url::create('/blog')->setLastModificationDate(now())->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)->setPriority(0.8));

    $posts = Post::all();
    foreach ($posts as $post) {
        $sitemap->add(Url::create("/article/{$post->slug}")->setLastModificationDate(now())->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)->setPriority(0.9));
    }


    $categories = Kategori::all();
    foreach ($categories as $category) {
        $sitemap->add(Url::create("/category/{$category->name}")->setLastModificationDate(now())->setChangeFrequency(Url::CHANGE_FREQUENCY_DAILY)->setPriority(0.5));
    }


    // $packages = Paket::all();
    // foreach ($packages as $package) {
    //     $sitemap->add(Url::create("/paket/{$package->slug}")->setPriority(0.7));
    // }

    return $sitemap->toResponse(request());
});

Route::get('/bacadata', function () {
    return view('auth/lengkap_data');
});
