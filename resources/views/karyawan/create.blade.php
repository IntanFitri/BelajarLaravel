@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Create</h1>
@stop

@section('content')
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <form method ="post" action="{{url('karyawan')}}">
            @csrf

                <div class="form-group">
                <label> Nama </label>
                <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label> Jabatan </label>
                    <input type="text" class="form-control" name="jabatan">
                </div>
                <div class="form-group">
                    <label> Alamat </label>
                    <input type="text" class="form-control" name="alamat">
                </div>
                <div class="form-group">
                    <label> Keterangan </label>
                    <input type="text" class="form-control" name="keterangan">
                </div>
                <input type="submit" value="simpan" name="simpan" class="btn btn-success">
                    </div>
                </div>
             </div>
       </form>
</body>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
