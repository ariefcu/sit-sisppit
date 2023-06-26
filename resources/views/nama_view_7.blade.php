<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nama Judul</title>
</head>
<body>
    <h1>Nama : {{$nama}}</h1> <br>
    <h1>Mata Kuliah :</h1> <br>
    <ul>
        @foreach ($matkul as $mk)
            <li>{{ $mk }}</li>
        @endforeach
    </ul>
</body>
</html>
