<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\iklan;
use App\Models\User;
use App\Models\InstagramToken;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function makeCurlRequest($url)
    {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        $output = curl_exec($ch);
        curl_close($ch);

        return json_decode($output, true);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $baseUrl = "https://graph.instagram.com/me/media?";

        $instagramToken = InstagramToken::select('access_token')->latest()->first();
        $accessToken = env('INSTAGRAM_TOKEN');

        if ($instagramToken->access_token) {
            $accessToken = $instagramToken->access_token;
        }

        $params = array(
            'fields' => implode(',', array('id', 'caption', 'permalink', 'media_url', 'media_type', 'thumbnail_url', 'is_shared_to_feed', 'username', 'timestamps')),
            'access_token' => $accessToken,
            'limit' => 9
        );

        $url = $baseUrl . http_build_query($params);
        $result = $this->makeCurlRequest($url);

        // return response()->json($result);


        $datas = Post::all();
        $datas = Post::with('kategori')->latest()->get();
        $iklans = iklan::all();

        return view('index', [
            'mediaData' => $result['data'],
            'paging' => $result['paging'],
            'datas' => $datas,
            'iklans' => $iklans
        ]);
    }


    public function blog()
    {
        $iklans = iklan::all();
        $Posting = Post::all();
        return view('blog', compact('iklans', 'Posting'));
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
