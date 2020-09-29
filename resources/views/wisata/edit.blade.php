@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Wisata</h1>
@stop

@section('content')
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Edit Wisata</h1>
            <form method ="post" action="{{url('wisata',[$wisata->id])}}">
            @csrf
            <input type="hidden" name="_method" value="PUT">
            <div class="col-md-12">
                <label> Destinasi </label>
                <input type="text" class="form-control" name="destinasi" value="{{$wisata->destinasi}}">
                </div>
                <div class="form-group">
                    <label> Foto </label>
                    <input type="text" class="form-control" name="foto"  value="{{$wisata->foto}}">
                </div>
                <div class="form-group">
                    <label> Longtitude </label>
                    <input type="text" class="form-control" name="longtitude"  value="{{$wisata->longtitude}}">
                </div>
                <div class="form-group">
                    <label> Latitude </label>
                    <input type="text" class="form-control" name="latitude"  value="{{$wisata->latitude}}">
                </div>
                     <input type="submit" value="edit" name="edit" class="btn btn-success">
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
