<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create Pelajar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Data Pelajaran</h1>
            <form method ="post" action="{{url('pelajar',[$pelajar->id])}}">
            @csrf
                <input type="hidden" name="_method" value="PUT">
                <div class="form-group">
                <label> Nama </label>
                <input type="text" class="form-control" name="nama" value="{{$pelajar->nama}}">
                </div>
                <div class="form-group">
                    <label> Alamat </label>
                    <input type="text" class="form-control" name="alamat"  value="{{$pelajar->alamat}}">
                </div>
                <div class="form-group">
                    <label> Nomor </label>
                    <input type="text" class="form-control" name="telephone"  value="{{$pelajar->telephone}}">
                </div>
                     <input type="submit" value="simpan" name="simpan" class="btn btn-success">
                    </div>
                </div>
             </div>
       </form>
</body>
</html>
