<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use App\Services\IklanService;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;

class IklanController extends Controller
{
    public function index()
    {
        // $iklan = Iklan::withTrashed()->orderBy('created_at', 'desc')->get();
        // foreach ($iklan as $ad) {
        //     if ($ad->status == 'active') {
        //         $ad->time_remaining = $this->iklanService->getTimeRemaining($ad->expires_at);
        //     }
        // }

        return view('admin.page.Iklan.iklan');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $data = $request->validate([
        //     'perusahaan' => 'required|string',
        //     'sampul' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        //     'tautan' => 'required|string',
        //     'type' => 'required|in:iklan1,iklan2',
        // ]);

        // if ($request->hasFile('sampul')) {
        //     $image = $request->file('sampul');
        //     $imageName = time().'.'.$image->getClientOriginalExtension();
        //     $path = $image->storeAs('assets/images/iklan/', $imageName, 'public');
        //     $data['sampul'] = $path;
        // }


        // $this->iklanService->createIklan($data);

        // return redirect('/iklan')->with('success', 'Iklan created successfully');
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
