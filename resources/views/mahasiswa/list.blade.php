<!DOCTYPE html>
<html>
<head>
 <title>Daftar Mahasiswa</title>
</head>
<body>
 <h1>Daftar Mahasiswa</h1>
 <table border="1" cellpadding="5">
 <tr>
 <th>Nama</th>
 <th>NIM</th>
 <th>Program Studi</th>
 </tr>
 @foreach($mahasiswa as $mhs)
 <tr>
 <td>{{ $mhs['nama'] }}</td>
 <td>{{ $mhs['nim'] }}</td>
 <td>{{ $mhs['prodi'] }}</td>
 </tr>
  @endforeach
 </table>
</body>
</html>
