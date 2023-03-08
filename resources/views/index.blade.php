<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($data as $mhs)
        <p>nama : {{ $mhs->nama }}</p>
        <p>alamat : {{ $mhs->alamat }}</p>
    @endforeach
</body>
</html>
