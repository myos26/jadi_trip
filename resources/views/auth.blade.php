<!DOCTYPE html>
<html>
<head>
    <title>Otorisasi</title>
</head>
<body>
    @if(isset($authCode))
        <p>Kode Otorisasi: {{ $authCode }}</p>
    @else
        <p>{{ $message }}</p>
    @endif
</body>
</html>
