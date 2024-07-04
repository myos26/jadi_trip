<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.page.Profile');
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
        $request->validate([
            'username' => ['required'],
            'nomor_hp' => ['required'],
            'provinsi' => ['required'],
            'kabupaten_kota' => ['required'],
            'kecamatan' => ['required'],
            'kelurahan_desa' => ['required']
        ]);

        DB::beginTransaction();
        try {
            if ($request->hasFile('photo')) {

                if ($request->old_photo != 'noprofile.png') {
                    if (File::exists(public_path('/profile/images/' . Auth::user()->photo))) {
                        File::delete(public_path('/profile/images/' . Auth::user()->photo));
                    }
                }

                $pName = $request->file('photo')->getClientOriginalName();
                $pExten = $request->file('photo')->getClientOriginalExtension();
                $pName = Auth::user()->username . time() . '.' . $pExten;

                $request->file('photo')->move(public_path('/profile/images/'), $pName);

                User::where('id', $id)->update([
                    'username' => $request->username,
                    'photo' => $pName,
                    'nomor_hp' => $request->nomor_hp,
                    'provinsi' => $request->provinsi,
                    'kabupaten_kota' => $request->kabupaten_kota,
                    'kecamatan' => $request->kecamatan,
                    'kelurahan_desa' => $request->kelurahan_desa
                ]);
            } else {
                if (!$request->hasFile('photo')) {
                    if ($request->old_photo == 'noprofile.png') {
                        if ($request->old_photo != Auth::user()->photo) {
                            if (File::exists(public_path('/profile/images/' . Auth::user()->photo))) {
                                File::delete(public_path('/profile/images/' . Auth::user()->photo));
                            }
                        }
                    }
                }

                User::where('id', $id)->update([
                    'username' => $request->username,
                    'photo' => $request->old_photo,
                    'nomor_hp' => $request->nomor_hp,
                    'provinsi' => $request->provinsi,
                    'kabupaten_kota' => $request->kabupaten_kota,
                    'kecamatan' => $request->kecamatan,
                    'kelurahan_desa' => $request->kelurahan_desa
                ]);
            }


            DB::commit();
            return redirect()->back()->with('success', 'Profile berhasil disimpan');
        } catch (\Exception $e) {
            DB::rollback();
            // return redirect()->back()->with('failed', 'Profile gagal disimpan');
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
