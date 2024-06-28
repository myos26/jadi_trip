<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Verification Code</title>
</head>

<body>
    <h1>Halo {{ $get_user_name }} 🌟,</h1>
    <h2>Terima kasih telah mendaftar di Jadi Trip! 😊</h2>

    <p>🔑 Kode OTP Anda adalah
    <h2>{{ $validToken }}</h2>Mohon masukkan kode ini untuk memverifikasi data Anda.</p>

    <p>⚠ Harap jangan berikan kode OTP ini kepada siapapun demi menjaga keamanan akun Anda.</p>

    <h3>Terima kasih! 🌴✈</h3>
</body>

</html>
