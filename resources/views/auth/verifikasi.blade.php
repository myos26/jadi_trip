<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('auth/style2.css') }}" />

    <title>Form Login</title>
</head>

<body>

    <div class="wrapper wrapper2">
        <form action="{{ url('/verified') }}" method="POST">
            @csrf
            <h1>Verifikasi Your Email</h1>

            <div class="input-box">
                <h3>Kami telah mengirimkan kode verifikasi ke {{ Auth::user()->email }}, silahkan masukkan kode anda
                </h3>
                <div class="input-field">
                    <input type="number" name="token" placeholder="Kode OTP" required>
                    <i class='bx bxs-lock-alt'></i>
                </div>
                <h3>Belum mendapatkan kode? <button type="button" id="resend"
                        style="background-color: transparent; border: none; outline: none;color: gray; cursor: pointer;">Kirim
                        ulang
                        kode</button>

            </div>
            {{-- <label>
                <input type="checkbox">Saya menyatakan bahwa informasi yang diberikan di atas adalah benar dan tepat
            </label> --}}

            <button type="submit" class="btn">Verifikasi</button>
            {{-- <a href="/register" class="btn2 btn3">Tidak punya akun? Daftar disini</a> --}}
        </form>
        <form action="{{ url('/resend-code') }}" method="post" id="resend-form">
            @csrf
            <input type="hidden" name="username" value="{{ Auth::user()->username }}">
            <input type="hidden" name="email" value="{{ Auth::user()->email }}">
        </form>
    </div>


    <script>
        const resend = document.querySelector('#resend');
        resend.addEventListener('click', function() {
            document.querySelector('#resend-form').submit();
        });
    </script>
</body>

</html>
