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
            <a href="{{ url('/create') }}">Add Post</a>
        </div>

        @foreach ($posts as $post)
            <div class="box-besar" onclick="target({{ $post->id }})">
                <div class="box-image">
                    <img src="{{ asset('/post_media/' . $post->thumbnail) }}" alt="" srcset="">
                </div>
                <div class="box-content">
                    <h2>{{ Str::limit($post->title, 30, '...') }}</h2>
                    <div class="box-detail">
                        <h4>{{ $post->created_at->diffForHumans() }}</h4>
                        <h5>{{ $post->kategori->name }}</h5>
                    </div>
                </div>
                <div class="box-action">
                    <div class="action">
                        <h5>{{ $post->status }}</h5>
                        {{-- <form action="{{ url('/delete/' . $post->id) }}" method="post" id="hapus">
                            @csrf
                            <input type="hidden" name="id" value="{{ $post->id }}">
                        </form> --}}
                        {{-- <button onclick="hapus()"
                            style="background: transparent; border: 1px solid black; cursor: pointer; z-index: 5;">Hapus</button> --}}
                        <a href="{{ url('/delete/' . $post->slug) }}">Hapus</a>
                    </div>
                </div>
            </div>
            <a target="_blank" href="{{ url('/article/' . $post->slug) }}">Lihat</a>
        @endforeach

        <script>
            const target = (id) => {
                window.location.href = "/update/" + id;
            }
            const hapus = () => {
                document.getElementById('#hapus').submit();
            }
        </script>

    </section>
@endsection
