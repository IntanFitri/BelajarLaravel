@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1> Destinasi Wisata </h1>
@stop

@section('content')
    <a class="btn btn-success" href="{{url('wisata/create')}}">New</a>

    <form class="form-inline" method="POST" action="{{url('cariwisata')}}">
    @csrf
    <label class="sr-only">Destinasi</label>
    <input type="text" class="form-control mb-2 mr-sm-2" name="txtcari">
    <button type="submit" class="btn btn-primary mb-2">Cari</button>
    </form>

    <div class="d-flex justify-content-end mb-4">
    <a class="btn btn-primary" href="{{ URL::to('/cetakwisata/pdf') }}">Export</a>
    </div>
    <table class="table table-bordered">
       <thead>
           <tr>
               <td>Destinasi</td>
               <td>Foto</td>
               <td>Longtitude</td>
               <td>Latitude</td>
               <td>Aksi</td>
           </tr>
       </thead>
       @foreach ($wisata as $ws)
           <tr>
               <td>{{$ws->destinasi}}</td>
               <td>{{$ws->foto}}</td>
               <td>{{$ws->longtitude}}</td>
               <td>{{$ws->latitude}}</td>
               <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ URL::to('wisata/' . $ws->id . '/edit') }}">
                    <button type="button" class="btn btn-warning">Edit</button>
                    </a>&nbsp;

                    <form action="{{ url('wisata', [$ws->id]) }}" method="POST" >
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-danger" value="DELETE">
                </form>

               </td>
           </tr>
       @endforeach
   </table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
