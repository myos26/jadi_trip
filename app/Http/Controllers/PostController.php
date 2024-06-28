<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Post;
use DOMDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::with('kategori')->where('status', 'Public')->get();

        return view('admin.page.Post.post', compact('posts'));
    }

    public function post($slug)
    {
        $post = Post::with('kategori')->where('slug', $slug)->first();
        return view('article', compact('post'));
    }

    public function create()
    {
        $kategoris = Kategori::all();

        return view('admin.page.Post.create_post', compact('kategoris'));
    }

    public function store(Request $request)
    {
        // upload thumbnail
        $thumb_name = $request->file('thumbnail')->getClientOriginalName();
        $thumb_exten = $request->file('thumbnail')->getClientOriginalExtension();
        $thumb_name = 'thumbail-' . time() . '.' . $thumb_exten;

        $request->file('thumbnail')->move(public_path('/post_media'), $thumb_name);

        //menyimpan konten
        $content = $request->content;

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
                Post::create([
                    'thumbnail' => $thumb_name,
                    'title' => $request->title,
                    'description' => $request->description,
                    'slug' => Str::slug(Str::lower($request->slug)),
                    'content' => $content,
                    'kategori_id' => $request->kategori,
                    'status' => $request->status
                ]);
            } else {
                Post::create([
                    'thumbnail' => $thumb_name,
                    'title' => $request->title,
                    'description' => $request->description,
                    'slug' => Str::slug(Str::lower($request->title)),
                    'content' => $content,
                    'kategori_id' => $request->kategori,
                    'status' => $request->status
                ]);
            }

            DB::commit();
            return redirect('/postingan')->with('success', 'Artikel berhasil diposting');
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('failed', 'Gagal memposting artikel');
        }
    }

    public function updateView(String $id)
    {
        $post = Post::where('id', $id)->first();

        if ($post) {
            return view('admin.page.Post.edit_post', compact('post'));
        } else {
            return redirect()->back()->with('failed', 'Maaf record tidak ada');
        }
    }

    public function update(Request $request, String $id)
    {

        //menyimpan konten
        $content = $request->content;

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
                Post::where('id', $id)->update([
                    'thumbnail' => $thumb_name,
                    'title' => $request->title,
                    'description' => $request->description,
                    'slug' => Str::slug(Str::lower($request->slug)),
                    'content' => $content,
                    'kategori_id' => $request->kategori,
                    'status' => $request->status
                ]);

                db::commit();
                return redirect('/postingan');
            } catch (\Exception $e) {
                db::rollBack();
                dd($e);
            }
        } else {

            try {
                Post::where('id', $id)->update([
                    'thumbnail' => $request->old_thumbnail,
                    'title' => $request->title,
                    'description' => $request->description,
                    'slug' => Str::slug(Str::lower($request->slug)),
                    'content' => $content,
                    'kategori_id' => $request->kategori,
                    'status' => $request->status
                ]);
                DB::commit();
                return redirect('/postingan');
            } catch (\Exception $e) {
                dd($e);
            }
        }
    }

    public function destroy($slug)
    {
        $post = Post::where('slug', $slug)->first();

        $dom = new DOMDocument();
        $dom->loadHTML($post->content);

        $images = $dom->getElementsByTagName('img');

        foreach ($images as $key => $img) {
            $path = $img->getAttribute('src');

            if (File::exists(public_path($path))) {
                File::delete(public_path('/post_media/' . substr($path, 12)));
                File::delete(public_path('/post_media/' . $post->thumbnail));
            }
        }

        $post->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus postingan');
    }

    // kategori
    public function storeKategori(Request $request)
    {
        db::beginTransaction();
        try {
            Kategori::create([
                'name' => $request->name
            ]);

            db::commit();
            return redirect()->back()->with('success', 'Berhasil menambah kategori');
        } catch (\Exception $e) {
            db::rollBack();
            return redirect()->back('failed', 'Gagal menambah kategori');
        }
    }

    public function deleteKategori(String $id)
    {
        $kategori = Kategori::find($id);

        $kategori->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus kategori');
    }
}
