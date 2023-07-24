<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>cetak pdf</title>
</head>

<body>
    <h1>Data Mahasiswa</h1>
    <table class="table" border="1px">
        <thead>
            <tr>
                <th>ID</th>
                <th>NIS</th>
                <th>NAMA</th>
                <th>TANGGAL LAHIR</th>
                <th>JENIS KELAMIN</th>
                <th>ALAMAT</th>
                <th>KOTA</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->tanggal_lahir }}</td>
                    <td>{{ $item->jenis_kelamin }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->kota }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>

</html>
