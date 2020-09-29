@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Data Karyawan</h1>
@stop

@section('content')
    <a class="btn btn-success" href="{{url('karyawan/create')}}">New</a>
    <form class="form-inline" method="POST" action="{{url('carikaryawan')}}">
    @csrf
    <label class="sr-only">Karyawan</label>
    <input type="text" class="form-control mb-2 mr-sm-2" name="txtcari">
    <button type="submit" class="btn btn-primary mb-2">Cari</button>
    </form>

    <div class="d-flex justify-content-end mb-4">
        <a class="btn btn-primary" href="{{ URL::to('/cetakkaryawan/pdf') }}">Export</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>Nama</td>
                <td>Jabatan</td>
                <td>Alamat</td>
                <td>Keterangan</td>
                <td>Aksi</td>
            </tr>
        </thead>
        @foreach ($karyawan as $kar)
            <tr>
                <td>{{$kar->nama}}</td>
                <td>{{$kar->jabatan}}</td>
                <td>{{$kar->alamat}}</td>
                <td>{{$kar->keterangan}}</td>
                <td>
                    <div class="btn-group" role="group" aria-label="Basic example">
                    <a href="{{ URL::to('karyawan/' . $kar->id . '/edit') }}">
                    <button type="button" class="btn btn-warning">Edit</button>
                    </a>&nbsp;
                    <form action="{{url('karyawan', [$kar->id])}}" method="POST">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="submit" class="btn btn-danger" value="Delete"/>
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
