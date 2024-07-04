<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pakets = Paket::all();

        return view('admin.page.layanan.index', compact('pakets'));
    }

    public function create()
    {
        return view('admin.page.layanan.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        if ($request->hasFile('thumbnail')) {
            // upload thumbnail
            $thumb_name = $request->file('thumbnail')->getClientOriginalName();
            $thumb_exten = $request->file('thumbnail')->getClientOriginalExtension();
            $thumb_name = 'thumbail-' . time() . '.' . $thumb_exten;

            $request->file('thumbnail')->move(public_path('/post_media'), $thumb_name);

            //menyimpan konten
            $content = $request->konten;

            $dom = new DOMDocument();
            $dom->loadHTML($content, 9);

            $images = $dom->getElementsByTagName('img');

            foreach ($images as $key => $img) {
                $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
                $image_name = 'media-' . time() . $key . '.' . 'png';
                file_put_contents($image_name, $data);
                File::move(public_path('/') . $image_name, public_path('/post_media/') . $image_name);

                $img->removeAttribute('src');
                $img->setAttribute('src', '/post_media/' . $image_name);
            }

            $content = $dom->saveHTML();

            // menyimpan ke database
            DB::beginTransaction();
            try {

                if ($request->slug != '') {
                    Paket::create([
                        'thumbnail' => $thumb_name,
                        'title' => $request->title,
                        'deskripsi' => $request->description,
                        'slug' => Str::slug(Str::lower($request->slug)),
                        'konten' => $content,
                        'kategori' => $request->kategori,
                        'status' => $request->status,
                        'harga' => $request->harga,
                        'tipe' => $request->tipe
                    ]);
                } else {
                    Paket::create([
                        'thumbnail' => $thumb_name,
                        'title' => $request->title,
                        'deskripsi' => $request->description,
                        'slug' => Str::slug(Str::lower($request->title)),
                        'konten' => $content,
                        'kategori' => $request->kategori,
                        'status' => $request->status,
                        'harga' => $request->harga,
                        'tipe' => $request->tipe
                    ]);
                }

                DB::commit();
                return redirect('/layanan')->with('success', 'Layanan berhasil ditambahkan');
            } catch (\Exception $e) {
                DB::rollback();
                return redirect()->back()->with('failed', 'Layanan gagal ditambahkan');
                // dd($e);
            }
        } else {
            return redirect()->back()->with('failed', 'Thumbnail harus di isi');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
        $pakets = Paket::where('slug', $slug)->get();

        // dd($pakets);
        return view('admin.page.layanan.edit', compact('pakets'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //menyimpan konten
        $content = $request->konten;

        $dom = new DOMDocument();
        $dom->loadHTML($content, 9);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {

            // cek apakah gambar baru
            if (strpos($img->getAttribute('src'), 'data:image/') === 0) {
                $data = base64_decode(explode(',', explode(';', $img->getAttribute('src'))[1])[1]);
                $image_name = 'media-' . time() . $key . '.' . 'png';
                file_put_contents($image_name, $data);
                File::move(public_path('/') . $image_name, public_path('/post_media/') . $image_name);

                $img->removeAttribute('src');
                $img->setAttribute('src', '/post_media/' . $image_name);
            }
        }

        $content = $dom->saveHTML();

        if ($request->hasFile('thumbnail')) {
            // hapus thumbnail lama
            if (File::exists(public_path('/post_media' . $request->old_thumbnail))) {
                File::delete(public_path('/post_media' . $request->old_thumbnail));
            }

            // upload thumbnail baru
            $thumb_name = $request->file('thumbnail')->getClientOriginalName();
            $thumb_exten = $request->file('thumbnail')->getClientOriginalExtension();
            $thumb_name = 'thumbail-' . time() . '.' . $thumb_exten;

            $request->file('thumbnail')->move(public_path('/post_media'), $thumb_name);

            db::beginTransaction();

            try {
                Paket::where('id', $id)->update([
                    'thumbnail' => $thumb_name,
                    'title' => $request->title,
                    'deskripsi' => $request->description,
                    'slug' => Str::slug(Str::lower($request->slug)),
                    'konten' => $content,
                    'kategori' => $request->kategori,
                    'status' => $request->status,
                    'harga' => $request->harga,
                    'tipe' => $request->tipe
                ]);

                db::commit();
                return redirect('/postingan');
            } catch (\Exception $e) {
                db::rollBack();
                dd($e);
            }
        } else {

            try {
                Paket::where('id', $id)->update([
                    'thumbnail' => $request->old_thumbnail,
                    'title' => $request->title,
                    'deskripsi' => $request->description,
                    'slug' => Str::slug(Str::lower($request->slug)),
                    'konten' => $content,
                    'kategori' => $request->kategori,
                    'status' => $request->status,
                    'harga' => $request->harga,
                    'tipe' => $request->tipe
                ]);
                DB::commit();
                return redirect('/layanan')->with('success', 'Layanan berhasil di edit');
            } catch (\Exception $e) {
                dd($e);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $paket = Paket::find($id);

        $dom = new DOMDocument();
        $dom->loadHTML($paket->konten);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $path = $img->getAttribute('src');

            if (File::exists(public_path($path))) {
                File::delete(public_path('/post_media/' . substr($path, 12)));
            }
        }
        File::delete(public_path('/post_media/' . $paket->thumbnail));

        $paket->delete();
        return redirect()->back()->with('success', 'Layanan berhasil dihapus');
    }
}
