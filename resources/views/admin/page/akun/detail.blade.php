@extends('admin.index')
<link rel="stylesheet" href="{{ asset('pages/akun.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">

<script src="https://kit.fontawesome.com/b2117167da.js" crossorigin="anonymous"></script>
<style>
    .konten .container {
        margin: 15px;
        /* border: 1px solid black; */
        display: flex;
        justify-content: flex-start;
    }

    .sisi-kiri {
        /* border: 1px solid black; */
    }

    .sisi-kanan {
        /* border: 1px solid black; */
    }

    .photo {
        box-shadow: 0px 0px 20px -10px black;
        width: 350px;
        border-radius: 10px;
        overflow: hidden;
    }
</style>
@section('content')
    <section class="top-bar" id="top-bar">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item"><a href="{{ url('/akun') }}">Akun</a></li>
                <li class="breadcrumb-item"><a href="">Detail</a></li>
            </ol>
        </nav>
    </section>

    <section class="konten">
        @foreach ($user as $data)
            <div class="container">
                <div class="sisi-kiri">
                    <div class="photo">
                        <img src="{{ asset('/profile/images/' . $data->photo) }}" alt="">
                    </div>
                </div>
                <div class="sisi-kanan">
                    <table>
                        <tr>
                            <th style="text-align: left;">Username</th>
                            <th>:</th>
                            <th style="text-align: left;">{{ $data->username }}</th>
                        </tr>
                        <tr>
                            <th style="text-align: left;">Email</th>
                            <th>:</th>
                            <th style="text-align: left;">{{ $data->email }}</th>
                        </tr>
                        <tr>
                            <th style="text-align: left;">Nomor Telepon</th>
                            <th>:</th>
                            <th style="text-align: left;">{{ $data->nomor_hp }}</th>
                        </tr>
                        @if ($data->is_activated == 1)
                            <tr>
                                <th style="text-align: left;">Aktivasi</th>
                                <th>:</th>
                                <th style="text-align: left;">Teraktivasi</th>
                            </tr>
                        @else
                            <tr>
                                <th style="text-align: left;">Aktivasi</th>
                                <th>:</th>
                                <th style="text-align: left;">-</th>
                            </tr>
                        @endif
                        @if ($data->is_info_verified == 1)
                            <tr>
                                <th style="text-align: left;">Verifikasi</th>
                                <th>:</th>
                                <th style="text-align: left;">Terverifikasi</th>
                            </tr>
                        @else
                            <tr>
                                <th style="text-align: left;">Verifikasi</th>
                                <th>:</th>
                                <th style="text-align: left;">-</th>
                            </tr>
                        @endif
                        @if ($data->is_admin == 1)
                            <tr>
                                <th style="text-align: left;">Level</th>
                                <th>:</th>
                                <th style="text-align: left;">Admin</th>
                            </tr>
                        @else
                            <tr>
                                <th style="text-align: left;">Level</th>
                                <th>:</th>
                                <th style="text-align: left;">User</th>
                            </tr>
                        @endif
                        <tr>
                            <th style="text-align: left;">Status Akun</th>
                            <th>:</th>
                            <th style="text-align: left;">{{ $data->status }}</th>
                        </tr>
                        <tr>
                            <th style="text-align: center;" colspan="3">Alamat</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <tr>
                            <th style="text-align: left;">Provinsi</th>
                            <th>:</th>
                            <th style="text-align: left;" id="labelProv"></th>
                            <input type="hidden" id="inprov" value="{{ $data->provinsi }}">
                        </tr>
                        <tr>
                            <th style="text-align: left;">Kabuaten/Kota</th>
                            <th>:</th>
                            <th style="text-align: left;" id="labelKab"></th>
                            <input type="hidden" id="inkab" value="{{ $data->kabupaten_kota }}">
                        </tr>
                        <tr>
                            <th style="text-align: left;">Kecamatan</th>
                            <th>:</th>
                            <th style="text-align: left;" id="labelKec"></th>
                            <input type="hidden" id="inkec" value="{{ $data->kecamatan }}">
                        </tr>
                        <tr>
                            <th style="text-align: left;">Kelurahan/Desa</th>
                            <th>:</th>
                            <th style="text-align: left;" id="labelDes"></th>
                            <input type="hidden" id="indes" value="{{ $data->kelurahan_desa }}">
                        </tr>
                    </table>
                    <a href="{{ url('/akun') }}">Kembali</a>
                </div>
            </div>
        @endforeach
    </section>

    <script>
        window.onload = () => {

            // provinsi saat ini
            fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/provinces.json`)
                .then(response => response.json())
                .then(regencies => {
                    for (const value in regencies) {
                        if (Object.hasOwnProperty.call(regencies, value)) {
                            const element = regencies[value];

                            if (element.id == document.querySelector('#inprov').value) {
                                document.querySelector('#labelProv').innerHTML = element.name
                            }
                        }
                    }
                });

            fetch(
                    `https://bayik4.github.io/api-wilayah-indonesia/api/regencies/${document.querySelector('#inprov').value}.json`
                )
                .then(response => response.json())
                .then(regencies => {
                    for (const value in regencies) {
                        if (Object.hasOwnProperty.call(regencies, value)) {
                            const element = regencies[value];

                            if (element.id == document.querySelector('#inkab').value) {
                                document.querySelector('#labelKab').innerHTML = element.name
                            }

                        }
                    }
                });

            // ID KABUPATEN
            fetch(
                    `https://bayik4.github.io/api-wilayah-indonesia/api/districts/${document.querySelector('#inkab').value}.json`
                )
                .then(response => response.json())
                .then(districts => {
                    for (const value in districts) {
                        if (Object.hasOwnProperty.call(districts, value)) {
                            const element = districts[value];

                            if (element.id == document.querySelector('#inkec').value) {
                                document.querySelector('#labelKec').innerHTML = element.name
                            }
                        }
                    }
                });

            // ID Kecamatan
            fetch(
                    `https://bayik4.github.io/api-wilayah-indonesia/api/villages/${document.querySelector('#inkec').value}.json`
                )
                .then(response => response.json())
                .then(villages => {
                    for (const value in villages) {
                        if (Object.hasOwnProperty.call(villages, value)) {
                            const element = villages[value];

                            if (element.id == document.querySelector('#indes').value) {
                                document.querySelector('#labelDes').innerHTML = element.name
                            }
                        }
                    }
                });

        }
    </script>
@endsection
