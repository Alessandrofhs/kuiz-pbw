<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" cellpadding="3">
        <tr>
            <td>Nomor</td>
            <td>NIM</td>
            <td>Nama</td>
            <td>Action</td>
        </tr>
        @foreach($data as $item) 
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->nim }}</td>
            <td>{{ $item->nama }}</td>
            <td>Ubah | Hapus</td>
        </tr>
        @endforeach
    </table>
</body>
</html>