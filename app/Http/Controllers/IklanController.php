<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use App\Services\IklanService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class IklanController extends Controller
{
    public function index()
    {
        $iklans = DB::table('iklans')
                ->orderByRaw("CASE WHEN status = 'On' THEN 1 ELSE 0 END DESC")
                ->orderBy('id', 'desc')
                ->get();

        // $iklans = DB::table('iklans')->orderBy('tanggal','desc')->get();

        return view('admin.page.Iklan.iklan', compact('iklans'));
    }

    public function store(Request $request)
{
    $request->validate([
        'perusahaan' => 'required|string|max:255',
        'tautan' => 'required|url',
        'type' => 'required|in:Iklan 1,Iklan 2',
        'sampul' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    if ($request->hasFile('sampul')) {
        $image = $request->file('sampul');
        $imageName = time() . '_' . $image->getClientOriginalName();
        $image->move(public_path('assets/images/iklan/'), $imageName);
    }

    $iklan = new Iklan();
    $iklan->perusahaan = $request->perusahaan;
    $iklan->tautan = $request->tautan;
    $iklan->type = $request->type;
    $iklan->sampul = $imageName;
    $iklan->status = 'Off';
    $iklan->tanggal = now();
    $iklan->save();

    return redirect('/iklan')->with('success', 'Data iklan berhasil disimpan.');
}

public function updateStatus(Request $request, $id)
{
    $iklan = Iklan::findOrFail($id);

    if ($request->status === 'On') {
        $iklan->time = now(); // Simpan waktu mulai
    } else {
        $iklan->time = null; // Reset waktu mulai
    }

    $iklan->status = $request->status;
    $iklan->save();

    return response()->json(['message' => 'Status iklan berhasil diperbarui']);
}

public function expireAd(Request $request, $id)
{
    $iklan = Iklan::where('id', $id)->where('status', 'On')->first();

    if ($iklan) {
        $iklan->status = 'Expired';
        $iklan->time = now(); // Simpan waktu expired
        $iklan->deleted_at = now()->format('d-m-Y H:i');
        $iklan->save();

        return response()->json(['expired_at' => $iklan->time->format('d-m-Y, H:i')]);
    }

    return response()->json(['message' => 'Tidak ada iklan yang aktif dengan tipe tersebut'], 404);
}
}
