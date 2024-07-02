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

            <div class="box-deskripsi">
                <div class="deskripsi" style="display: none;" id="textDeskripsi">
                    <textarea style="padding: 10px;" name="deskripsi" id="deskripsi" cols="100" rows="6">{{ Auth::user()->deskripsi }}</textarea>
                </div>
                <div class="deskripsi" id="textDeskripsi2">{{ Auth::user()->deskripsi }}</div>
            </div>
        </form>

        <button class="button" onclick="simpan()" style="display: none;" id="btn-simpan">Simpan</button>
        <button class="button" onclick="edit()" id="btn-edit">Edit</button>

    </section>

    <script>
        const user = document.querySelector('#username');
        const nohp = document.querySelector('#nohp');
        const prov = document.querySelector('#provinsi');
        const kab = document.querySelector('#kabupaten');
        const kec = document.querySelector('#kecamatan');
        const des = document.querySelector('#desa');
        const desc = document.querySelector('#deskripsi');
        const pro = document.querySelector('#foto_profile');

        let isHapus = false;

        const hapus_photo = () => {
            isHapus = true;
            document.querySelector('#img').setAttribute('src', 'profile/images/noprofile.png')
        }

        window.onload = () => {

            // provinsi saat ini
            fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/provinces.json`)
                .then(response => response.json())
                .then(regencies => {
                    for (const value in regencies) {
                        if (Object.hasOwnProperty.call(regencies, value)) {
                            const element = regencies[value];

                            if (element.id == document.querySelector('#inprov').value) {
                                document.querySelector('#labelProv2').innerHTML = element.name
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
                                document.querySelector('#labelKab2').innerHTML = element.name
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
                                document.querySelector('#labelKec2').innerHTML = element.name
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
                                document.querySelector('#labelDes2').innerHTML = element.name
                            }
                        }
                    }
                });

        }


        const edit = () => {
            // button simpan
            document.querySelector('#btn-simpan').style.display = 'block'

            // button edit
            document.querySelector('#btn-edit').style.display = 'none'

            // button hapus profile
            document.querySelector('#hapus_profile').style.display = 'block'

            // label user
            document.querySelector('#labelUser').style.display = 'block'
            document.querySelector('#labelUser2').style.display = 'none'
            // label nohp
            document.querySelector('#labelNohp').style.display = 'block'
            document.querySelector('#labelNohp2').style.display = 'none'
            // label provinsi
            document.querySelector('#labelProv').style.display = 'block'
            document.querySelector('#labelProv2').style.display = 'none'
            // label kabupaten
            document.querySelector('#labelKab').style.display = 'block'
            document.querySelector('#labelKab2').style.display = 'none'
            // label kecamatan
            document.querySelector('#labelKec').style.display = 'block'
            document.querySelector('#labelKec2').style.display = 'none'
            // label desa
            document.querySelector('#labelDes').style.display = 'block'
            document.querySelector('#labelDes2').style.display = 'none'
            // textarea deskripsi
            document.querySelector('#textDeskripsi').style.display = 'block'
            document.querySelector('#textDeskripsi2').style.display = 'none'
            // input foto
            pro.style.display = 'block'

            if (document.querySelector('#inprov').value != '') {
                // mereset semua elemen option di dalam select dengan id provinsi
                while (prov.lastElementChild) {
                    prov.removeChild(prov.lastElementChild);
                }

                // mereset semua elemen option di dalam select dengan id kabupaten
                while (kab.lastElementChild) {
                    kab.removeChild(kab.lastElementChild);
                }

                // mereset semua elemen option dalam select dengan id kecamatan
                while (kec.lastElementChild) {
                    kec.removeChild(kec.lastElementChild);
                }

                // mereset semua elemen option di dalam select dengan id desa
                while (des.lastElementChild) {
                    des.removeChild(des.lastElementChild);
                }

                // provinsi saat ini
                fetch(`https://bayik4.github.io/api-wilayah-indonesia/api/provinces.json`)
                    .then(response => response.json())
                    .then(regencies => {
                        for (const value in regencies) {
                            if (Object.hasOwnProperty.call(regencies, value)) {
                                const element = regencies[value];

                                if (element.id == document.querySelector('#inprov').value) {
                                    // membuat element option provinsi
                                    const opt = document.createElement('option');
                                    const text = document.createTextNode(element.name);
                                    opt.appendChild(text);
                                    opt.value = element.id;
                                    prov.appendChild(opt);
                                }
                            }
                        }
                    });

                // kabupaten saat ini
                fetch(
                        `https://bayik4.github.io/api-wilayah-indonesia/api/regencies/${document.querySelector('#inprov').value}.json`
                    )
                    .then(response => response.json())
                    .then(regencies => {
                        for (const value in regencies) {
                            if (Object.hasOwnProperty.call(regencies, value)) {
                                const element = regencies[value];

                                if (element.id == document.querySelector('#inkab').value) {
                                    // membuat element option kabupaten
                                    const opt = document.createElement('option');
                                    const text = document.createTextNode(element.name);
                                    opt.appendChild(text);
                                    opt.value = element.id;
                                    kab.appendChild(opt);
                                }

                            }
                        }
                    });

                // kecamatan saat ini
                fetch(
                        `https://bayik4.github.io/api-wilayah-indonesia/api/districts/${document.querySelector('#inkab').value}.json`
                    )
                    .then(response => response.json())
                    .then(districts => {
                        for (const value in districts) {
                            if (Object.hasOwnProperty.call(districts, value)) {
                                const element = districts[value];

                                if (element.id == document.querySelector('#inkec').value) {
                                    // membuat element option kabupaten
                                    const opt = document.createElement('option');
                                    const text = document.createTextNode(element.name);
                                    opt.appendChild(text);
                                    opt.value = element.id;
                                    kec.appendChild(opt);
                                }
                            }
                        }
                    });

                // desa saat ini
                fetch(
                        `https://bayik4.github.io/api-wilayah-indonesia/api/villages/${document.querySelector('#inkec').value}.json`
                    )
                    .then(response => response.json())
                    .then(villages => {
                        for (const value in villages) {
                            if (Object.hasOwnProperty.call(villages, value)) {
                                const element = villages[value];

                                if (element.id == document.querySelector('#indes').value) {
                                    // membuat element option kabupaten
                                    const opt = document.createElement('option');
                                    const text = document.createTextNode(element.name);
                                    opt.appendChild(text);
                                    opt.value = element.id;
                                    des.appendChild(opt);
                                }
                            }
                        }
                    });


                // mengambil semua data provinsi
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
                            }
                        }
                    });

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
                    fetch(
                            `https://bayik4.github.io/api-wilayah-indonesia/api/regencies/${prov.value}.json`
                        )
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
                    fetch(
                            `https://bayik4.github.io/api-wilayah-indonesia/api/districts/${kab.value}.json`
                        )
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
                    fetch(
                            `https://bayik4.github.io/api-wilayah-indonesia/api/villages/${kec.value}.json`
                        )
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

            } else {
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

            }
        }

        const simpan = () => {

            if (user.value != '' && nohp.value != '' && prov.value != '' && kab.value != '' && kec.value != '' && des
                .value != '' && desc.value != '') {

                if (isHapus) {
                    // aksi mengirim data
                    document.querySelector('#old_photo').value = 'noprofile.png'
                    document.querySelector('#form-profile').submit();
                } else {
                    document.querySelector('#form-profile').submit();
                }

                // button simpan
                document.querySelector('#btn-simpan').style.display = 'none'
                // button edit
                document.querySelector('#btn-edit').style.display = 'block'
                // button hapus profile
                document.querySelector('#hapus_profile').style.display = 'none'

                // label username
                document.querySelector('#labelUser').style.display = 'none'
                document.querySelector('#labelUser2').style.display = 'block'
                // label nohp
                document.querySelector('#labelNohp').style.display = 'none'
                document.querySelector('#labelNohp2').style.display = 'block'
                // label provinsi
                document.querySelector('#labelProv').style.display = 'none'
                document.querySelector('#labelProv2').style.display = 'block'
                // label kabupaten
                document.querySelector('#labelKab').style.display = 'none'
                document.querySelector('#labelKab2').style.display = 'block'
                // label kecamatan
                document.querySelector('#labelKec').style.display = 'none'
                document.querySelector('#labelKec2').style.display = 'block'
                // label desa
                document.querySelector('#labelDes').style.display = 'none'
                document.querySelector('#labelDes2').style.display = 'block'
                // textarea deskripsi
                document.querySelector('#textDeskripsi').style.display = 'none'
                document.querySelector('#textDeskripsi2').style.display = 'block'
                // input foto
                pro.style.display = 'none'
            } else {
                alert('semua form harus di isi');
            }

        }
    </script>
@endsection
