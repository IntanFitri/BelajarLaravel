<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pelajar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1> Data Pelajaran </h1>
            <a class="btn btn-success" href="{{url('pelajar/create')}}">New</a>
            <form method="POST" action="{{ url('pelajar/cari') }}" class="form-inline">
              @csrf
             <input type="text" name="nama" class="form-control mb-2 mr-sm-2" placeholder="masukkan nama">

            <button type="submit" class="btn btn-primary mb-2"> Cari </button>
            </form>

            <table class="table">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Nomor</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody>

                <tr>
                    <th scope="row">{{$pelajar->id}}</th>
                    <td>{{$pelajar->nama}}</td>
                    <td>{{$pelajar->alamat}}</td>
                    <td>{{$pelajar->telephone}}</td>
                    <td>
                        <div class="btn-group" role="group">
                        <a class="btn btn-warning" href="{{'pelajar/'. $pelajar-> id.'/edit'}}"> Edit</a>
                        <form action="{{ url('pelajar', [$pelajar->id]) }}" method="POST" >
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="btn btn-danger" value="DELETE">
                        </form>
                        </div>
                    </td>
                </tr>


                </tbody>
            </table>
            </div>
        </div>
    </div>

</body>
</html>
