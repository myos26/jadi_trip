<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Post::all();
        return view('index', compact('datas'));
    }


    public function blog(){

        return view('blog');
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


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
