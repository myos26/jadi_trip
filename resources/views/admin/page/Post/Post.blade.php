@extends('admin.index')
<link rel="stylesheet" href="{{ asset('post/post.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
@section('content')
    <section class="top-bar" id="top-bar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="postingan">Postingan</a></li>
            </ol>
        </nav>
    </section>
    <section class="konten" id="konten">
        <div class="button">
            <a href="tambahpostingan">Tambah Postingan</a>
        </div>

        <div class="box-besar">
            <div class="box-image">
                <img src="{{ asset('post/images/trip.jpg') }}" alt="" srcset="">
            </div>
            <div class="box-content">
                <h2>Judul Postingan</h2>
                <div class="box-detail">
                    <h4>Tanggal dan waktu rilis</h4>
                    <h5>Category</h5>
                </div>
            </div>
            <div class="box-action">
                <div class="action">
                    <h5>Status</h5>
                    <a href="#">Hapus</a>
                </div>
            </div>
        </div>
        <div class="box-besar">
            <div class="box-image">
                <img src="{{ asset('post/images/trip.jpg') }}" alt="" srcset="">
            </div>
            <div class="box-content">
                <h2>Judul Postingan</h2>
                <div class="box-detail">
                    <h4>Tanggal dan waktu rilis</h4>
                    <h5>Category</h5>
                </div>
            </div>
            <div class="box-action">
                <div class="action">
                    <h5>Status</h5>
                    <a href="#">Hapus</a>
                </div>
            </div>
        </div>
        <div class="box-besar">
            <div class="box-image">
                <img src="{{ asset('post/images/trip.jpg') }}" alt="" srcset="">
            </div>
            <div class="box-content">
                <h2>Judul Postingan</h2>
                <div class="box-detail">
                    <h4>Tanggal dan waktu rilis</h4>
                    <h5>Category</h5>
                </div>
            </div>
            <div class="box-action">
                <div class="action">
                    <h5>Status</h5>
                    <a href="#">Hapus</a>
                </div>
            </div>
        </div>
        <div class="box-besar">
            <div class="box-image">
                <img src="{{ asset('post/images/trip.jpg') }}" alt="" srcset="">
            </div>
            <div class="box-content">
                <h2>Judul Postingan</h2>
                <div class="box-detail">
                    <h4>Tanggal dan waktu rilis</h4>
                    <h5>Category</h5>
                </div>
            </div>
            <div class="box-action">
                <div class="action">
                    <h5>Status</h5>
                    <a href="#">Hapus</a>
                </div>
            </div>
        </div>

    </section>
@endsection
