<!DOCTYPE html>
<html lang="en">
<head>
    <title>Create</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Create Mata Kuliah </h1>
                <form method ="post" action="{{url('matkul', [$matkul->id])}}">
                @csrf
                    <input type="hidden" name="_method" value="PUT">
                    <div class="form-group">
                    <label> Nama Dosen </label>
                    <input type="text" class="form-control" name="nama_dosen" value="{{$matkul->nama_dosen}}">
                    </div>
                    <div class="form-group">
                        <label> Mata Kuliah </label>
                    <input type="text" class="form-control" name="matakuliah" value="{{$matkul->matakuliah}}">
                    </div>
                    <div class="form-group">
                        <label> Keterangan </label>
                        <input type="text" class="form-control" name="keterangan" value="{{$matkul->keterangan}}">
                    </div>
                    <div class="form-group">
                        <label> Nomor </label>
                        <input type="text" class="form-control" name="nomor" value="{{$matkul->nomor}}">
                    </div>
                    <input type="submit" value="simpan" name="simpan" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>
</body>
</html>
