<?php

namespace App\Http\Controllers;

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

    public function TambahPostingan()
    {
        return view('admin.page.Post.TambahPost');
    }

    public function upload(Request $requests)
    {
    }
}
