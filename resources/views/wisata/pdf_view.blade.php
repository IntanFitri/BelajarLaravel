<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
    crossorigin="anonymous">
    <title>Wisata</title>
</head>
<body>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <td> Destinasi</td>
                <td> Foto </td>
                <td> Longtitude</td>
                <td> Latitude</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $dat)
            <tr>
                <td>{{$dat->destinasi}}</td>
                <td>{{$dat->foto}}</td>
                <td>{{$dat->longtitude}}</td>
                <td>{{$dat->latitude}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
