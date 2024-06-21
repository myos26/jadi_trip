<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\iklan;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Post::all();
        $datas = Post::with('kategori')->latest()->get();
        $iklans = iklan::all();
        return view('index', compact('datas','iklans'));
    }


    public function blog()
    {
        $iklans = iklan::all();
        $Posting = Post::all();
        return view('blog', compact('iklans','Posting'));
    }

    public function verifyOtp()
    {
        $get_user = User::where('email', Auth()->user()->email)->first();

        if ($get_user->is_activated == 1) {
            return redirect('/');
        } else {
            return redirect('/verify');
        }
    }
}
