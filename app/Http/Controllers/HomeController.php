<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Kategori;
use App\Models\Iklan;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Paket;
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

        $datas = Post::orderBy('id', 'desc')->take(10)->get();


        $iklans = Iklan::all();
        $pakets = Paket::where('tipe', 'rekomendasi')->get();
        return view('index', [
            'mediaData' => $result['data'],
            'paging' => $result['paging'],
            'datas' => $datas,
            'iklans' => $iklans,
            'pakets' => $pakets
        ]);
    }

    public function paket()
    {
        $paketCount = Paket::whereIn('kategori', ['Paket Wisata', 'Open Trip'])->count();
        $pakets = Paket::all();

        return view('paket', compact('pakets', 'paketCount'));
    }

    public function pakets($kategori)
    {
        $kategori = explode('/', $kategori);
        $kategori = end($kategori);
        $iklans = Iklan::all();

        $pakets = Paket::where('kategori', $kategori)->get();
        $paketCount = $pakets->count(); // Hitung jumlah paket dengan kategori tertentu
        return view('paket', ['pakets' => $pakets, 'paketCount' => $paketCount, 'iklans' => $iklans, 'kategori' => $kategori]);
    }

    public function detailPaket($tipe, $slug)
    {
        $post = Paket::where('slug', $slug)->first();

        // $sedangAktif = $post->id;
        $blogs = Post::inRandomOrder()->take(5)->get();
        $bloges = Post::inRandomOrder()->take(9)->get();
        $kategoris = DB::table('pakets')->select('kategori', DB::raw('count(*) as total'))->groupBy('kategori')->inRandomOrder()->take(8)->get();
        $iklans = Iklan::all();

        return view('detailPaket', compact('post', 'blogs', 'bloges', 'kategoris', 'iklans'));
    }

    public function blog()
    {
        $iklans = Iklan::all();
        $Posting = Post::all();
        return view('blog', compact('Posting', 'iklans'));
    }

    public function bloges($kategori)
    {
        $kategori = explode('/', $kategori);
        $kategori = end($kategori);
        $iklans = Iklan::all();
        $Posting = Post::whereHas('kategori', function ($query) use ($kategori) {
            $query->where('name', $kategori);
        })->get();

        return view('blog', ['Posting' => $Posting, 'Kategori' => $kategori, 'iklans' => $iklans]);
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

    public function search(Request $request)
    {
        $query = $request->input;
        $iklans = Iklan::all();

        $posts = Post::where('title', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->orWhere('content', 'LIKE', '%' . $query . '%')
            ->get();

        if (!$posts->isEmpty()) {
            $Posting = $posts;
            return view('blog', compact('Posting', 'iklans'));
        } else {
            return redirect()->back()->with('failed', 'Konten yang anda cari untuk saat ini belum tersedia');
        }
    }
}
