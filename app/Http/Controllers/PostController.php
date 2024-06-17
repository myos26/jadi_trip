<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.page.Post.post');
    }

    public function post($slug)
    {
        $post = Post::with('kategori')->where('slug', $slug)->first();
        return view('article', compact('post'));
    }

    public function TambahPostingan()
    {
        return view('admin.page.Post.TambahPost');
    }

    public function upload(Request $requests)
    {
    }
}
