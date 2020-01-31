<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <center>Daftar tabungan </center>
    @foreach ($tabungan as $item)

    Nama : {{$item-> nama}}<br>
    Nis : {{$item-> nis}}<br>
    kelas : {{$item-> kelas}}<br>
    jml : {{$item-> jml}}<br>

    @if ($item -> jml >= 50000)
    {{$paket = 'A'}}
    @elseif ($item -> jml >= 25000)
    {{$paket = 'B'}}
    @elseif ($item -> jml >= 10000)
    {{$paket = 'C'}}
    @endif

    @endforeach
</body>
</html>
