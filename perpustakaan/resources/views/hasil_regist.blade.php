<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Succes Regist</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="padding: 2vw;">
        <h2 class="text-center">Registrasi Berhasil</h2> <br>
        <table class="table table-stripped">
            <tr class="table-primary">
                <th class="text-center">Nama</th>
                <th class="text-center">Email</th>
                <th class="text-center">Lokasi</th>
                <th class="text-center">Semester</th>
                <th class="text-center">Jenis Kelamin</th>
                <th class="text-center">Tema</th>
            </tr>
            <tr>
                <td class="text-center">{{ $data->nama }}</td>
                <td class="text-center">{{ $data->email }}</td>
                <td class="text-center">{{ $data->lokasi }}</td>
                <td class="text-center">{{ $data->semester }}</td>
                <td class="text-center">{{ $data->jenis_kelamin }}</td>
                <td class="text-center">{{ $data->tema }}</td>
            </tr>
        </table>
    </div>
</body>
</html>