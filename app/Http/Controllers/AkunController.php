<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.page.akun.Akun', compact('users'));
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
        $user = User::where('id', $id)->get();
        return view('admin.page.akun.detail', compact('user'));
    }

    public function edit(string $id)
    {
        $user = User::where('id', $id)->get();
        return view('admin.page.akun.edit', compact('user'));
    }

    // 'username',
    //     'photo',
    //     'email',
    //     'is_activated',
    //     'is_info_verified',
    //     'password',
    //     'is_admin',
    //     'deskripsi',
    //     'nomor_hp',
    //     'provinsi',
    //     'kabupaten/kota',
    //     'kecamatan',
    //     'kelurahan/desa',
    //     'status'
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::beginTransaction();
        try {
            User::where('id', $id)->update([
                'is_admin' => $request->is_admin,
                'status' => $request->status
            ]);
            DB::commit();
            return redirect('/akun')->with('success', 'Data berhasil diubah');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->with('failed', 'Data gagal diubah');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        switch ($request->tipe) {
            case 'permanen':
                DB::beginTransaction();
                try {
                    User::where('id', $request->user_id)->delete();
                    DB::commit();
                    return redirect()->back()->with('success', 'Akun user berhasil dihapus permanen');
                } catch (\Exception $e) {
                    DB::rollback();
                    return redirect()->back()->with('failed', 'Akun user gagal dihapus permanen');
                }
                break;
            case 'temporary':
                DB::beginTransaction();
                try {
                    User::where('id', $request->user_id)->update([
                        'status' => 'Pasif'
                    ]);
                    DB::commit();
                    return redirect('/akun')->with('success', 'Akun user berhasil dihapus sementara');
                } catch (\Exception $e) {
                    DB::rollback();
                    return redirect()->back()->with('failed', 'Akun user gagal dihapus sementara');
                }
                break;
        }
    }
}
