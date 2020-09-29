<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
    crossorigin="anonymous">
    <title>Data Karyawan</title>
</head>
<body>

    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Nama</td>
                <td>Jabatan</td>
                <td>Alamat</td>
                <td>Keterangan</td>
            </tr>
        </thead>
        @foreach ($data as $dat)
            <tr>
                <td>{{$dat->nama}}</td>
                <td>{{$dat->jabatan}}</td>
                <td>{{$dat->alamat}}</td>
                <td>{{$dat->keterangan}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>
