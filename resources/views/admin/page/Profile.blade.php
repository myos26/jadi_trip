@extends('admin.index')
<link rel="stylesheet" href="{{ asset('profile/style.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}
{{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
@section('content')
    <section class="top-bar" id="top-bar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="profile">Profile</a></li>
            </ol>
        </nav>
    </section>
    <section class="konten" id="konten">
        <h1>PROFILE</h1>
        <div class="box-besar">
            <div class="box-image">
                <img src="{{ asset('profile/images/profile.jfif') }}" alt="" srcset="">
            </div>
            <div class="box-data">
                <div class="label-data">
                    <label class="item-data">Nama Lengkap</label>
                    <label class="isi-data">Rangga</label>
                </div>
                <div class="label-data">
                    <label class="item-data">No HP</label>
                    <label class="isi-data">082716261</label>
                </div>
                <div class="label-data">
                    <label class="item-data">Provinsi</label>
                    <label class="isi-data">
                        <select class="data-wilayah" name="provinsi" id="provinsi" onclick="LoadProvinsi()">
                            <option value="">Pilih Provinsi</option>
                            {{-- @foreach ($provinces as $provinsi)
                                <option value="{{ $provinsi->id }}">{{ $provinsi->name }}</option>
                            @endforeach --}}
                        </select>
                    </label>
                </div>
                <div class="label-data">
                    <label class="item-data">Kabupaten</label>
                    <label class="isi-data">
                        <select class="data-wilayah" name="kabupaten" id="kabupaten">
                            <option value="">Pilih Kabupaten</option>
                        </select>
                    </label>
                </div>
                <div class="label-data">
                    <label class="item-data">Kecamatan</label>
                    <label class="isi-data">
                        <select class="data-wilayah" name="kecamatan" id="kecamatan">
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </label>
                </div>
                <div class="label-data">
                    <label class="item-data">Kota</label>
                    <label class="isi-data">
                        <select class="data-wilayah" name="kota" id="kota">
                            <option value="">Pilih Kota</option>
                        </select>
                    </label>
                </div>
            </div>

        </div>
        <div class="box-deskripsi">
            <div name="deskripsi" class="deskripsi">Saya adalah seorang customer service specialist dengan pengalaman kerja
                lebih dari 3 tahun. Seorang problem solver kreatif dengan kemampuan interpersonal yang kuat.

                Berhasil membangun program retensi pelanggan baru yang telah meningkatkan customer loyalty sebesar 20%. Saya
                kini mencari posisi sebagai sebagai customer service supervisor untuk melanjutkan perkembangan karier ke
                bidang manajemen.</div>
        </div>
        <button class="button"><a href="#">SAVE</a></button>

    </section>
    <script src="{{ asset('profile/Express.js') }}"></script>
    {{-- <script>
        $.ajax({
            url: "state",
            type: "GET",
            data: {
                method: "ajax_request"
            },
            success: function(result) {
                console.log(result);
            }
        })
    </script> --}}
    {{--
    <script>
        $(function() {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $(function() {
                $('#provinsi').on('change', function() {
                    let id_provinsi = $('#provinsi').val();

                    console.log(id_provinsi);
                })
            })
        });
    </script> --}}
@endsection
