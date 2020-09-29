<!DOCTYPE html>
<html lang="en">
<head>
    <title>Mata Kuliah</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Mata Kuliah</h1>
            <a class="btn btn-success" href="{{url('matkul/create')}}">New</a>
            <form method="POST" action="{{url('matkul/cari')}}" class="form-inline">
                @csrf
                <input type="text" name="nama_dosen" class="form-control mb-2 mr-sm-2"  placeholder="Masukkan Nama">

                <button type="submit" class="btn btn-primary mb-2">Cari</button>
            </form>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Dosen</th>
                    <th scope="col">Mata Kuliah</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Nomor</th>
                    <th scope="col">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($matkul as $mat)
                <tr>
                    <th scope="row">{{$mat->id}}</th>
                    <td>{{$mat->nama_dosen}}</td>
                    <td>{{$mat->matakuliah}}</td>
                    <td>{{$mat->keterangan}}</td>
                    <td>{{$mat->nomor}}</td>

                    <td>
                        <div class="btn-group" role="group">
                        <a class="btn btn-warning" href="{{url('matkul/'.$mat->id .'/edit')}}">Edit</a>
                        <form action="{{url('matkul', [$mat->id])}}" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="submit" class="btn btn-danger" value="DELETE">
                        </form>
                    </td>
                </tr>

                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
