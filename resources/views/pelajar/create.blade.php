<!DOCTYPE html>
<html lang="en">
<head>
    <title> CREATE PELAJAR </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Data Pelajaran</h1>
            <form method ="post" action="{{url('pelajar')}}">
            @csrf

                <div class="form-group">
                <label> Nama </label>
                <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label> Alamat </label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <label> Nomor </label>
                    <input type="text" class="form-control" name="telephone">
                </div>
                <input type="submit" value="simpan" name="simpan" class="btn btn-success">
                    </div>
                </div>
             </div>
       </form>
</body>
</html>
