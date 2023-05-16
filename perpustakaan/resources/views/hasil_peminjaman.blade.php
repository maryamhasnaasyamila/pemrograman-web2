<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detail Peminjaman</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="padding: 2vw;">
        <h2 class="text-center">Peminjaman Berhasil</h2> <br>
        <table border="1" class="table table-bordered">
            <tr class="table-primary">
                <th class="text-center">Nama</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Tanggal Peminjaman</th>
                <th class="text-center">Tema</th>
                <th class="text-center">No ISBN</th>
            </tr>
            <tr>
                <td class="text-center">{{ $data->nama }}</td>
                <td class="text-center">{{ $data->jenis_kelamin }}</td>
                <td class="text-center">{{ $data->date }}</td>
                <td class="text-center">{{ $data->tema }}</td>
                <td class="text-center">{{ $data->isbn }}</td>
            </tr>
        </table>
    </div>
</body>
</html>