@extends('admin.index')
{{-- <link rel="stylesheet" href="{{ asset('profile/style.css') }}"> --}}
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
                <li class="breadcrumb-item"><a href="">Layanan</a></li>
            </ol>
        </nav>
    </section>
    <section class="konten">
        <div class="button">
            <a href="{{ url('/layanan/create') }}">Add Layanan</a>
        </div>

        @foreach ($pakets as $paket)
            <div class="box-besar">
                <div class="box-image">
                    <img src="{{ asset('/post_media/' . $paket->thumbnail) }}" alt="" srcset="">
                </div>
                <div class="box-content">
                    <h2 onclick="target('{{ $paket->slug }}')">{{ Str::limit($paket->title, 30, '...') }}</h2>
                    <div class="box-detail">
                        <h4>{{ $paket->created_at->diffForHumans() }}</h4>
                        <h5>{{ $paket->kategori }}</h5>
                    </div>
                </div>
                <div class="box-action">
                    <div class="action">
                        <h5>{{ $paket->status }}</h5>
                        <a href="#" onclick="lihat('{{ $paket->slug }}')">Lihat</a>
                        <a href="{{ url('/layanan/delete/' . $paket->id) }}">Hapus</a>
                    </div>
                </div>

            </div>
        @endforeach

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            const target = (slug) => {
                window.location = "/layanan/update/" + slug;
            }

            const lihat = (slug) => {
                window.open("/article/" + slug, "_blank");
            }

            @if (@session('success'))
                let msg = @json(session()->pull('success'));
                Swal.fire({
                    title: "Success!!",
                    text: msg,
                    icon: "success"
                });
            @endif
        </script>
    </section>
@endsection
