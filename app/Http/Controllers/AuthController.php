<?php

namespace App\Http\Controllers;

use App\Mail\SendEmail;
use App\Models\User;
use App\Models\VerifiedToken;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('auth.register');
    }

    public function loginView()
    {
        if (Auth::check()) {
            return redirect()->back();
        } else {
            return view('auth/login');
        }
    }

    public function registerView()
    {
        if (Auth::check()) {
            return redirect()->back();
        } else {
            return view('auth/register');
        }
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $user = User::where('email', $request->email)->first();

        if (Auth::attempt($credentials) && Hash::check($request->password, $user->password)) {
            $request->session()->regenerate();

            if ($user->is_activated == 1 && $user->is_info_verified == 1) {
                if ($user->is_admin == 1) {
                    return redirect('/profil');
                }
                return redirect('/');
            } else {
                return redirect('/verify');
            }
        } else {
            return redirect()->back()->with('failed', 'Email atau password yang anda masukkan salah!!');
        }
    }


    public function register(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $is_user_exist = User::where('email', $request->email)->first();

        if ($request->term == "on") {
            if ($is_user_exist) {
                return redirect()->back()->with('failed', 'Maaf, alamat email sudah digunakan');
            } else {
                User::create([
                    'username' => $request->username,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);

                $validToken = rand(1000, 9999);
                $get_token = new VerifiedToken();
                $get_token->token = $validToken;
                $get_token->email = $request->email;
                $get_token->save();

                $get_user_email = $request->email;
                $get_user_name = $request->username;
                Mail::to($get_user_email)->send(new SendEmail($get_user_email, $validToken, $get_user_name));

                $credentials = $request->validate([
                    'email' => ['required', 'email'],
                    'password' => ['required'],
                ]);

                if (Auth::attempt($credentials)) {
                    $request->session()->regenerate();

                    return redirect('/temp-home');
                }
            }
        }

        return redirect()->back()->with('failed', 'Gagal registrasi user');
    }

    public function resendCode(Request $request)
    {
        $getting_token = VerifiedToken::where('email', $request->email)->first();
        $getting_token->delete();

        $validToken = rand(1000, 9999);
        $get_token = new VerifiedToken();
        $get_token->token = $validToken;
        $get_token->email = $request->email;
        $get_token->save();

        $get_user_email = $request->email;
        $get_user_name = $request->username;
        Mail::to($get_user_email)->send(new SendEmail($get_user_email, $validToken, $get_user_name));

        return redirect()->back()->with('success', 'Sukses mengirim ulang kode');
    }

    public function verified(Request $request)
    {
        $get_token = VerifiedToken::where('token', $request->token)->first();

        if ($get_token) {
            $get_token->is_activated = 1;
            $get_token->save();
            $user = User::where('email', $get_token->email)->first();
            $user->is_activated = 1;
            $user->email_verified_at = now();
            $user->save();

            $getting_token = VerifiedToken::where('token', $request->token)->first();
            $getting_token->delete();

            return redirect('/info');
        } else {
            return redirect()->back()->with('failed', 'Kode yang anda masukkan salah!');
        }
    }

    public function info()
    {
        $user = User::where('is_info_verified', Auth()->user()->is_info_verified)->first();

        if ($user->is_activated == 1) {
            if ($user->is_info_verified == 1) {
                return redirect('/');
            } else {
                return view('auth/lengkap_data');
            }
        } else {
            return redirect('/verify');
        }
    }

    public function verifyInfo()
    {
        $get_user = User::where('email', Auth()->user()->email)->first();

        if ($get_user->is_activated == 1) {
            return redirect('/info');
        } else {
            return view('auth/verifikasi');
        }
    }

    public function infoVerified(Request $request)
    {
        $request->validate([
            'nomor_hp' => ['required', 'numeric'],
            'provinsi' => ['required'],
            'kabupaten_kota' => ['required'],
            'kecamatan' => ['required'],
            'kelurahan_desa' => ['required']
        ]);

        $get_user = User::where('email', Auth()->user()->email)->first();
        $get_user->nomor_hp = $request->nomor_hp;
        $get_user->provinsi = $request->provinsi;
        $get_user->kabupaten_kota = $request->kabupaten_kota;
        $get_user->kecamatan = $request->kecamatan;
        $get_user->kelurahan_desa = $request->kelurahan_desa;
        $get_user->is_info_verified = 1;
        $get_user->save();
        return redirect('/')->with('success', 'Data anda berhasil disimpan');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function handleAuth(Request $request)
    {
        if ($request->has('code')) {
            $authCode = $request->input('code');
            // Lakukan sesuatu dengan kode otorisasi, misalnya menyimpannya di sesi atau database
            return view('auth', ['authCode' => $authCode]);
        } else {
            return view('auth', ['message' => 'Tidak ada kode otorisasi yang ditemukan.']);
        }
    }
}
