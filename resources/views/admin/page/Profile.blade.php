@extends('admin.index')
<link rel="stylesheet" href="{{ asset('profile/style.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
{{-- <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script> --}}
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
        <form action="{{ url('/update/profile/' . Auth::user()->id) }}" method="post" enctype="multipart/form-data"
            id="form-profile">
            @method('put')
            @csrf
            <div class="box-besar">
                <div class="box-image">
                    <img src="{{ asset('profile/images/' . Auth::user()->photo) }}" alt="" srcset=""
                        id="img">
                </div>
                <div class="box-data">
                    <div class="label-data">
                        <label class="item-data" for="username">Username</label>
                        <label class="isi-data" style="display: none;" id="labelUser">
                            <input type="text" id="username" name="username" placeholder="Masukkan username"
                                value="{{ Auth::user()->username }}" required>
                        </label>
                        <label class="isi-data" id="labelUser2">{{ Auth::user()->username }}</label>
                    </div>
                    <div class="label-data">
                        <label class="item-data" for="nohp">No HP</label>
                        <label class="isi-data" style="display: none;" id="labelNohp">
                            <input type="number" id="nohp" name="nomor_hp" placeholder="Masukkan nomor HP"
                                value="{{ Auth::user()->nomor_hp }}" required>
                        </label>
                        <label class="isi-data" id="labelNohp2">{{ Auth::user()->nomor_hp }}</label>
                    </div>
                    <div class="label-data">
                        <label class="item-data">Provinsi</label>
                        <label class="isi-data" style="display: none;" id="labelProv">
                            <select class="data-wilayah" name="provinsi" id="provinsi" required>
                                <option value="">Pilih</option>
                            </select>
                        </label>
                        <label class="isi-data" id="labelProv2"></label>
                        <input type="hidden" id="inprov" value="{{ Auth::user()->provinsi }}">
                    </div>
                    <div class="label-data">
                        <label class="item-data">Kabupaten/Kota</label>
                        <label class="isi-data" style="display: none;" id="labelKab">
                            <select class="data-wilayah" name="kabupaten_kota" id="kabupaten" required>
                                <option value="">Pilih</option>
                            </select>
                        </label>
                        <label class="isi-data" id="labelKab2"></label>
                        <input type="hidden" id="inkab" value="{{ Auth::user()->kabupaten_kota }}">
                    </div>
                    <div class="label-data">
                        <label class="item-data">Kecamatan</label>
                        <label class="isi-data" style="display: none;" id="labelKec">
                            <select class="data-wilayah" name="kecamatan" id="kecamatan" required>
                                <option value="">Pilih</option>
                            </select>
                        </label>
                        <label class="isi-data" id="labelKec2"></label>
                        <input type="hidden" id="inkec" value="{{ Auth::user()->kecamatan }}">
                    </div>
                    <div class="label-data">
                        <label class="item-data">Kelurahan/Desa</label>
                        <label class="isi-data" style="display: none;" id="labelDes">
                            <select class="data-wilayah" name="kelurahan_desa" id="desa" required>
                                <option value="">Pilih</option>
                            </select>
                        </label>
                        <label class="isi-data" id="labelDes2"></label>
                        <input type="hidden" id="indes" value="{{ Auth::user()->kelurahan_desa }}">
                    </div>
                </div>

            </div>

            {{-- input photo --}}
            <input type="file" name="photo" id="foto_profile" style="display: none;">
            <button class="button" type="button" onclick="hapus_photo()" style="display: none;"
                id="hapus_profile">Hapus Pofile</button>
            <input type="hidden" name="old_photo" value="{{ Auth::user()->photo }}" id="old_photo">
        </form>

        <div style="width: 100%; height: 10px; border-bottom: 3px solid black;"></div>

        <button class="button" onclick="simpan()" style="display: none;" id="btn-simpan">Simpan</button>
        <button class="button" onclick="edit()" id="btn-edit">Edit</button>

    </section>

    <script src="{{ asset('admin/js/api-wilayah.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        @if (@session('success'))
            let msg = @json(session()->pull('success'));
            Swal.fire({
                title: "Sukses!",
                text: msg,
                icon: "success"
            });
        @endif
    </script>
@endsection
