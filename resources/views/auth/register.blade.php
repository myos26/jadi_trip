<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('auth/style.css') }}" />

    <title>Form Registrasi</title>
</head>

<body>

    <div class="wrapper">
        <form action="">
            <h1>Registrasi</h1>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="fullname" placeholder="Full Name" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-field">
                    <input type="number" name="no_telp" placeholder="Nomor Telepon" required>
                    <i class='bx bxs-phone'></i>
                </div>
                <div class="input-field">
                    <select name="provinsi" id="provinsi" class="dropdown-field">
                        <option value="">Provinsi</option>
                        @foreach ($data_provinsi as $dp)
                            <option value="{{ $dp->id }}">{{ $dp->name }}</option>
                        @endforeach
                    </select>
                    <i class='bx bxs-business'></i>
                </div>
                <div class="input-field">
                    <select name="kabupaten" id="kabupaten" class="dropdown-field" disabled>
                        <option value="">Kabupaten</option>
                    </select>
                    <i class='bx bx-buildings'></i>
                </div>
                <div class="input-field">
                    <select name="kecamatan" id="kecamatan" class="dropdown-field" disabled>
                        <option value="">Kecamatan</option>
                    </select>
                    <i class='bx bx-buildings'></i>
                </div>
                <div class="input-field">
                    <select name="kota" id="kota" class="dropdown-field" disabled>
                        <option value="">Kota</option>
                    </select>
                    <i class='bx bxs-city'></i>
                </div>
            </div>
            <label>
                <input type="checkbox">Saya menyatakan bahwa informasi yang diberikan di atas adalah benar dan tepat
            </label>

            <button type="submit" class="btn">Register</button>
            <a href="/login" class="btn2">Sudah mempunyai akun? Login disini</a>
        </form>
    </div>

    <script>
        const prov = document.getElementById('provinsi');
        const kab = document.getElementById('kabupaten');
        const kec = document.getElementById('kecamatan');
        const kota = document.getElementById('kota');

        // handle data provinsi
        prov.addEventListener('change', function() {
            if (prov.value != "") {
                kab.disabled = false;

                // mereset semua elemen option di dalam select dengan id kabupaten
                while (kab.lastElementChild) {
                    kab.removeChild(kab.lastElementChild);
                }

                // membuat element option kabupaten
                const optKab = document.createElement('option');
                const textKab = document.createTextNode('Kabupaten');
                optKab.appendChild(textKab);
                optKab.value = "";
                kab.appendChild(optKab);

                // mengambil semua data kabuaten
                fetch(`https://Bayik4.github.io/api-wilayah-indonesia/api/regencies/${prov.value}.json`)
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
            } else {
                // menghapus semua elemen option dalam select dengan id kabupaten
                while (kab.lastElementChild) {
                    kab.removeChild(kab.lastElementChild);
                }

                const optKab = document.createElement('option');
                const textKab = document.createTextNode('Kabupaten');
                optKab.appendChild(textKab);
                optKab.value = "";
                kab.appendChild(optKab);

                kab.disabled = true;
                kab.selectedIndex = 0;

                kec.disabled = true;
                kec.selectedIndex = 0;

                kota.disabled = true;
                kota.selectedIndex = 0;
            }
        });

        // handle data kabupaten
        kab.addEventListener('change', function() {
            if (kab.value != "") {
                kec.disabled = false;

                // mereset semua elemen option dalam select dengan id kecamatan
                while (kec.lastElementChild) {
                    kec.removeChild(kec.lastElementChild);
                }

                const optKec = document.createElement('option');
                const textKec = document.createTextNode('Kecamatan');
                optKec.appendChild(textKec);
                optKec.value = "";
                kec.appendChild(optKec);

                fetch(`https://Bayik4.github.io/api-wilayah-indonesia/api/districts/${kab.value}.json`)
                    .then(response => response.json())
                    .then(districts => {
                        for (const key in districts) {
                            if (Object.hasOwnProperty.call(districts, key)) {
                                const element = districts[key];

                                // membuat element option kecamatan
                                const opt = document.createElement('option');
                                const text = document.createTextNode(element.name);
                                opt.appendChild(text);
                                opt.value = element.id;
                                kec.appendChild(opt);
                            }
                        }
                    });
            } else {
                // menghapus semua elemen option dalam select dengan id kecamatan
                while (kec.lastElementChild) {
                    kec.removeChild(kec.lastElementChild);
                }

                const optKec = document.createElement('option');
                const textKec = document.createTextNode('Kecamatan');
                optKec.appendChild(textKec);
                optKec.value = "";
                kec.appendChild(optKec);

                kec.disabled = true;
                kec.selectedIndex = 0;

                kota.disabled = true;
                kota.selectedIndex = 0;
            }
        });

        // handle data kecamatan
        kec.addEventListener('change', function() {
            if (kec.value != "") {
                kota.disabled = false;

                // mereset semua elemen option di dalam select dengan id kota
                while (kota.lastElementChild) {
                    kota.removeChild(kota.lastElementChild);
                }

                const optKota = document.createElement('option');
                const textKota = document.createTextNode('Kelurahan/Kota');
                optKota.appendChild(textKota);
                optKota.value = "";
                kota.appendChild(optKota);

                fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/villages/${kec.value}.json`)
                    .then(response => response.json())
                    .then(villages => {
                        for (const key in villages) {
                            if (Object.hasOwnProperty.call(villages, key)) {
                                const element = villages[key];

                                // membuat element option kota
                                const opt = document.createElement('option');
                                const text = document.createTextNode(element.name);
                                opt.appendChild(text);
                                opt.value = element.id;
                                kota.appendChild(opt);
                            }
                        }
                    });
            } else {
                // menghapus semua elemen option dalam select dengan id kota
                while (kota.lastElementChild) {
                    kota.removeChild(kota.lastElementChild);
                }

                const optKota = document.createElement('option');
                const textKota = document.createTextNode('Kelurahan/Kota');
                optKota.appendChild(textKota);
                optKota.value = "";
                kota.appendChild(optKota);

                kota.disabled = true;
                kota.selectedIndex = 0;
            }
        });
    </script>

</body>

</html>
