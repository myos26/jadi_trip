<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('auth/style.css') }}" />
    <link rel="icon" href="{{ asset('assets/logo/logo.ico') }}" type="image/x-icon">
    <title>Form Registrasi</title>
</head>

<body>

    <div class="wrapper">
        <form action="{{ url('/verified-info') }}" method="POST">
            @csrf
            <h1>Lengkapi Profil</h1>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="text" id="nomor_hp" name="nomor_hp" placeholder="Nomor Telepon" required>
                    <i class='bx bxs-phone'></i>
                </div>
                <div class="input-field">
                    <select name="provinsi" id="provinsi" class="dropdown-field" required>
                        <option value="">Provinsi</option>
                    </select>
                    <i class='bx bxs-business'></i>
                </div>
                <div class="input-field">
                    <select name="kabupaten_kota" id="kabupaten" class="dropdown-field" required disabled>
                        <option value="">Kabupaten/Kota</option>
                    </select>
                    <i class='bx bx-buildings'></i>
                </div>
                <div class="input-field">
                    <select name="kecamatan" id="kecamatan" class="dropdown-field" required disabled>
                        <option value="">Kecamatan</option>
                    </select>
                    <i class='bx bx-buildings'></i>
                </div>
                <div class="input-field">
                    <select name="kelurahan_desa" id="desa" class="dropdown-field" required disabled>
                        <option value="">Kelurahan/Desa</option>
                    </select>
                    <i class='bx bxs-city'></i>
                </div>
            </div>

            <button type="submit" class="btn">Simpan</button>
        </form>
    </div>

    <script src="{{ asset('auth/js/api-wilayah.js') }}"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('nomor_hp').addEventListener('input', function(e) {
                var value = e.target.value;
                e.target.value = value.replace(/[^0-9+]/g, '');
            });
        });
    </script>

</body>

</html>
