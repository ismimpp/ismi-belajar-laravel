<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href={{ asset("bs/bs/css/bootstrap.min.css") }}>
    <title>Document</title>
</head>
<body>
    <h1>{{$data->isi_laporan}}</h1>
    <p class="text-mute">NIK : {{ $data->nik }}</p>
        <p class="bg-secondary p-5">{{ $data->isi_laporan}}</p>

    </div>"
</body>
</html>