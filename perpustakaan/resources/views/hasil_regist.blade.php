<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Berhasil</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <table class="table table-bordered">
            <tr class="table-success">
                <th>Nama</th>
                <th>Email</th>
                <th>Lokasi</th>
                <th>Semester</th>
                <th>Jenis kelamin</th>
                <th>Tema</th>
            </tr>
            <tr>
                <td>{{ $data->nama}}</td>
                <td>{{ $data->email}}</td>
                <td>{{ $data->lokasi}}</td>
                <td>{{ $data->semester}}</td>
                <td>{{ $data->jenis_kelamin}}</td>
                <td>{{ $data->tema}}</td>
            </tr>
        </table>
    </div>
</body>
</html>