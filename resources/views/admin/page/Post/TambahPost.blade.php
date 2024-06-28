@extends('admin.index')

@section('head')
    {{-- <link rel="stylesheet" href="{{ asset('post/tambahpost.css') }}"> --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- include libraries(jQuery, bootstrap) -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endsection

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

            <form action="#">

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
                    <textarea name="content" id="summernote"></textarea>
                </div>
            </form>
        </div>

    </section>
@endsection

@section('js')
    <script>
        $(document).ready(function() {
            $('#summernote').summernote();
        });
    </script>
@endsection
