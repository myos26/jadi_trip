<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Iklan;
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
        return view('index', compact('datas'));
    }


    public function blog()
    {
        $iklans = Iklan::all();
        $Datalink = Post::all();
        return view('blog', compact('iklans','Datalink'));
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
