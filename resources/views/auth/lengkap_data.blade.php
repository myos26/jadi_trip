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
            <h1>Registrasi</h1>

            <div class="input-box">
                <div class="input-field">
                    <input type="text" name="fullname" placeholder="Full Name" required>
                    <i class='bx bxs-user'></i>
                </div>
                {{-- <div class="input-field">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div> --}}
                <div class="input-field">
                    <input type="text" id="no_telp" name="no_telp" placeholder="Nomor Telepon" required>
                    <i class='bx bxs-phone'></i>
                </div>
                <div class="input-field">
                    <select name="provinsi" id="provinsi" class="dropdown-field">
                        <option value="#">Provinsi</option>
                        <option value="jawabarat">Jawa Barat</option>
                        <option value="jawatengah">Jawa Tengah</option>
                        <option value="jawatimur">Jawa Timur</option>
                    </select>
                    <i class='bx bxs-business'></i>
                </div>
                <div class="input-field">
                    <select name="kabupaten" id="kabupaten" class="dropdown-field">
                        <option value="#">Kabupaten</option>
                        <option value="bangkalan">Bangkalan</option>
                        <option value="blitar">Blitar</option>
                        <option value="bojonegoro">Banyuwangi</option>
                    </select>
                    <i class='bx bx-buildings'></i>
                </div>
                <div class="input-field">
                    <select name="kecamatan" id="kecamatan" class="dropdown-field">
                        <option value="#">Kecamatan</option>
                        <option value="klojen">Klojen</option>
                        <option value="lowokwaru">Lowokwaru</option>
                        <option value="sukun">Sukun</option>
                    </select>
                    <i class='bx bx-buildings'></i>
                </div>
                <div class="input-field">
                    <select name="kota" id="kota" class="dropdown-field">
                        <option value="#">Kota</option>
                        <option value="bangkalan">Bangkalan</option>
                        <option value="blitar">Blitar</option>
                        <option value="malang">Malang</option>
                    </select>
                    <i class='bx bxs-city'></i>
                </div>
            </div>
            <label>
                <input type="checkbox">Saya menyatakan bahwa informasi yang diberikan di atas adalah benar dan tepat
            </label>

            <button type="submit" class="btn">Simpan</button>
            <a href="/login" class="btn2">Sudah mempunyai akun? Login disini</a>
        </form>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('no_telp').addEventListener('input', function(e) {
                var value = e.target.value;
                e.target.value = value.replace(/[^0-9+]/g, '');
            });
        });
    </script>

</body>

</html>
