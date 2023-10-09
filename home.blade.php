<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  {{$judul}}
  
    @foreach ($pengaduan as $pengaduan)
   <th scope="row">{{ $pengaduan->nik }}</th>
   <td>{{ $pengaduan->isi_laporan }}</td>
   <td>
      {{-- <a href="hapus.php?id= $pengaduan->id_pengaduan ?>">hapus</a> --}}
      <a href="/hapus-pengaduan/{{$pengaduan->id_pengaduan}}">hapus</a>
      <a href="/detail-pengaduan/{{$pengaduan->id_pengaduan}}">detail</a>
</td>
</body>
</html>