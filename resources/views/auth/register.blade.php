<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('auth/style.css') }}" />
    <title>Registrasi</title>
    <link rel="icon" href="{{asset('assets/logo/logo.ico')}}" type="image/x-icon">
</head>

<body>

    <div class="wrapper">
        <form id="daftarForm" action="">
            <h1>Registrasi</h1>

            <div class="input-box">
                {{-- <div class="input-field">
                    <input type="text" name="fullname" placeholder="Full Name" required>
                    <i class='bx bxs-user'></i>
                </div> --}}
                <div class="input-field">
                    <input type="text" name="username" placeholder="Username" required>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-field">
                    <input type="email" name="email" placeholder="Email" required>
                    <i class='bx bxs-envelope'></i>
                </div>
                <div class="input-field">
                    <input type="password" name="password" placeholder="password" required>
                    <i class='bx bxs-key'></i>
                </div>
                <div class="input-field">
                    <input type="password" name="password_reType" placeholder="Re-Type Password" required>
                    <i class='bx bxs-key'></i>
                    <span id="error-message" class="error-message" style="display: none;">Password tidak sama</span>
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
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('no_telp').addEventListener('input', function (e) {
                var value = e.target.value;
                e.target.value = value.replace(/[^0-9+]/g, '');
            });
        });

        document.getElementById('daftarForm').addEventListener('submit', function (e) {
            var password = document.getElementById('password').value;
            var passwordReType = document.getElementById('password_reType').value;
            var errorMessage = document.getElementById('error-message');

            if (password !== passwordReType) {
                e.preventDefault(); // Mencegah form submit
                errorMessage.style.display = 'block'; // Menampilkan pesan error
            } else {
                errorMessage.style.display = 'none'; // Menyembunyikan pesan error
            }
        });
    </script>

</body>

</html>
