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
            <form method ="post" action="{{url('wisata')}}">
            @csrf

                <div class="form-group">
                <label> Destinasi </label>
                <input type="text" class="form-control" name="destinasi">
                </div>
                <div class="form-group">
                    <label> Foto </label>
                    <input type="text" class="form-control" name="foto">
                </div>
                <div class="form-group">
                    <label> Longtitude </label>
                    <input type="text" class="form-control" name="longtitude">
                </div>
                <div class="form-group">
                    <label> Latitude </label>
                    <input type="text" class="form-control" name="latitude">
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
