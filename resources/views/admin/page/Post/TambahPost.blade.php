@extends('admin.index')
<link rel="stylesheet" href="{{ asset('post/tambahpost.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>

<style type="text/css">
    .ck-editor__editable_inline {
        height: 400px;
    }
</style>

@section('content')
    {{-- <section class="top-bar" id="top-bar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="postingan">Postingan</a></li>
            </ol>
        </nav>
    </section> --}}

    <section class="konten">
        <div class="box-besar">

            <div class="box-content">
                <input type="text" name="judul_post" placeholder="Judul Postingan">
            </div>

            <div class="box-label">
                <input type="text" name="kategori" id="kategori" placeholder="Kategori">
                <select name="kategori" id="kategori">
                    <option value="#kategori">pilih kategori</option>
                    <option value="#kategori">Destinasi</option>
                    <option value="#kategori">Kuliner</option>
                    <option value="#kategori">Wisata</option>
                </select>
            </div>

            <div class="box-deskripsi">
                <form action="#">
                    <textarea name="" id="editor" style="width: 100%; height: 50%"></textarea>


                </form>
            </div>
        </div>

        <script>
            ClassicEditor
                .create(document.querySelector('#editor'), {
                    ckFinder: {
                        uploadUrl: "{{ route('ckeditor.upload', ['_token' => csrf_token()]) }}",
                    }
                })
                .catch(error => {
                    console.error(error);
                });
        </script>



    </section>
@endsection
