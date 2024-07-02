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
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            <div class="box-besar">
                <div class="box-image">
                    <img src="{{ asset('profile/images/' . Auth::user()->photo) }}" alt="" srcset="">
                </div>
                <div class="box-data">
                    <div class="label-data">
                        <label class="item-data" for="username">Username</label>
                        <label class="isi-data">
                            <input type="text" id="username" name="username" placeholder="Masukkan username"
                                value="{{ Auth::user()->username }}" disabled>
                        </label>
                    </div>
                    <div class="label-data">
                        <label class="item-data" for="nohp">No HP</label>
                        <label class="isi-data">
                            <input type="number" id="nohp" name="nomor_hp" placeholder="Masukkan nomor HP"
                                value="{{ Auth::user()->nomor_hp }}" disabled>
                        </label>
                    </div>
                    <div class="label-data">
                        <label class="item-data">Provinsi</label>
                        <label class="isi-data">
                            <select class="data-wilayah" name="provinsi" id="provinsi" disabled>
                                <option value="">Pilih</option>
                            </select>
                        </label>
                    </div>
                    <div class="label-data">
                        <label class="item-data">Kabupaten/Kota</label>
                        <label class="isi-data">
                            <select class="data-wilayah" name="kabupaten/kota" id="kabupaten" disabled>
                                <option value="">Pilih</option>
                            </select>
                        </label>
                    </div>
                    <div class="label-data">
                        <label class="item-data">Kecamatan</label>
                        <label class="isi-data">
                            <select class="data-wilayah" name="kecamatan" id="kecamatan" disabled>
                                <option value="">Pilih</option>
                            </select>
                        </label>
                    </div>
                    <div class="label-data">
                        <label class="item-data">Kelurahan/Desa</label>
                        <label class="isi-data">
                            <select class="data-wilayah" name="kelurahan/desa" id="desa" disabled>
                                <option value="">Pilih</option>
                            </select>
                        </label>
                    </div>
                </div>

            </div>

            <input type="file" name="photo" id="foto_profile" style="display: none;">
            <input type="hidden" name="old_photo" value="">

            <div class="box-deskripsi">
                <div name="deskripsi" class="deskripsi">
                    <textarea style="padding: 10px;" name="deskripsi" id="deskripsi" cols="85" rows="6" disabled>Saya adalah seorang customer service specialist dengan pengalaman kerja lebih dari 3 tahun. Seorang problem solver kreatif dengan kemampuan interpersonal yang kuat. membangun program retensi pelanggan baru yang telah meningkatkan customer loyalty sebesar 20%. Saya kini mencari posisi sebagai sebagai customer service supervisor untuk melanjutkan perkembangan karier ke bidang manajemen.</textarea>
                </div>
            </div>
        </form>

        <button class="button" onclick="simpan()">Simpan</button>
        <button class="button" onclick="edit()">Edit</button>

    </section>
    {{-- <script src="{{ asset('profile/Express.js') }}"></script> --}}

    <script>
        const user = document.querySelector('#username');
        const nohp = document.querySelector('#nohp');
        const prov = document.querySelector('#provinsi');
        const kab = document.querySelector('#kabupaten');
        const kec = document.querySelector('#kecamatan');
        const des = document.querySelector('#desa');
        const desc = document.querySelector('#deskripsi');
        const pro = document.querySelector('#foto_profile');


        const edit = () => {
            user.disabled = false;
            nohp.disabled = false;
            prov.disabled = false;
            kab.disabled = false;
            kec.disabled = false;
            des.disabled = false;
            desc.disabled = false;
            pro.style.display = 'block';

            // mengambil semua data kabuaten
            fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/provinces.json`)
                .then(response => response.json())
                .then(regencies => {
                    for (const value in regencies) {
                        if (Object.hasOwnProperty.call(regencies, value)) {
                            const element = regencies[value];

                            // membuat element option kabupaten
                            const opt = document.createElement('option');
                            const text = document.createTextNode(element.name);
                            opt.appendChild(text);
                            opt.value = element.id;
                            prov.appendChild(opt);

                            //console.log(element.id, element.name);
                        }
                    }
                });

        }

        prov.addEventListener('change', function() {
            // mereset semua elemen option di dalam select dengan id kabupaten
            while (kab.lastElementChild) {
                kab.removeChild(kab.lastElementChild);
            }

            // membuat element option kabupaten
            const optKab = document.createElement('option');
            const textKab = document.createTextNode('Pilih');
            optKab.appendChild(textKab);
            optKab.value = "";
            kab.appendChild(optKab);

            // mereset semua elemen option dalam select dengan id kecamatan
            while (kec.lastElementChild) {
                kec.removeChild(kec.lastElementChild);
            }

            const optKec = document.createElement('option');
            const textKec = document.createTextNode('Pilih');
            optKec.appendChild(textKec);
            optKec.value = "";
            kec.appendChild(optKec);

            // mereset semua elemen option di dalam select dengan id kota
            while (des.lastElementChild) {
                des.removeChild(des.lastElementChild);
            }

            const optDesa = document.createElement('option');
            const textDesa = document.createTextNode('Pilih');
            optDesa.appendChild(textDesa);
            optDesa.value = "";
            des.appendChild(optDesa);

            // ID Provinsi
            fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/regencies/${prov.value}.json`)
                .then(response => response.json())
                .then(regencies => {
                    for (const value in regencies) {
                        if (Object.hasOwnProperty.call(regencies, value)) {
                            const element = regencies[value];

                            // membuat element option kabupaten
                            const opt = document.createElement('option');
                            const text = document.createTextNode(element.name);
                            opt.appendChild(text);
                            opt.value = element.id;
                            kab.appendChild(opt);

                            //console.log(element.id, element.name);
                        }
                    }
                });
        });

        kab.addEventListener('change', function() {
            // mereset semua elemen option dalam select dengan id kecamatan
            while (kec.lastElementChild) {
                kec.removeChild(kec.lastElementChild);
            }

            const optKec = document.createElement('option');
            const textKec = document.createTextNode('Pilih');
            optKec.appendChild(textKec);
            optKec.value = "";
            kec.appendChild(optKec);

            // ID KABUPATEN
            fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/districts/${kab.value}.json`)
                .then(response => response.json())
                .then(districts => {
                    for (const value in districts) {
                        if (Object.hasOwnProperty.call(districts, value)) {
                            const element = districts[value];

                            // membuat element option kabupaten
                            const opt = document.createElement('option');
                            const text = document.createTextNode(element.name);
                            opt.appendChild(text);
                            opt.value = element.id;
                            kec.appendChild(opt);

                            //console.log(element.id, element.name);
                        }
                    }
                });
        });

        kec.addEventListener('change', function() {

            // mereset semua elemen option di dalam select dengan id kota
            while (des.lastElementChild) {
                des.removeChild(des.lastElementChild);
            }

            const optDesa = document.createElement('option');
            const textDesa = document.createTextNode('Pilih');
            optDesa.appendChild(textDesa);
            optDesa.value = "";
            des.appendChild(optDesa);

            // ID Kecamatan
            fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/villages/${kec.value}.json`)
                .then(response => response.json())
                .then(villages => {
                    for (const value in villages) {
                        if (Object.hasOwnProperty.call(villages, value)) {
                            const element = villages[value];

                            // membuat element option kabupaten
                            const opt = document.createElement('option');
                            const text = document.createTextNode(element.name);
                            opt.appendChild(text);
                            opt.value = element.id;
                            des.appendChild(opt);

                            //console.log(element.id, element.name);
                        }
                    }
                });
        });

        const simpan = () => {
            user.disabled = true;
            nohp.disabled = true;
            prov.disabled = true;
            kab.disabled = true;
            kec.disabled = true;
            des.disabled = true;
            desc.disabled = true;
            pro.style.display = 'none';

        }
    </script>
@endsection
