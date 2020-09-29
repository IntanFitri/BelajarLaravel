<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Berita</title>
</head>
<body>
   <div class="container">
       <div class="row" >
           <div class="col-md-12">
            <h1>Berita</h1>
            <a class="btn btn-success" href="{{url('berita/create')}}">New</a>
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nama </th>
                    <th>Berita</th>
                    <th> Aksi</th>
                  </tr>
                </thead>
                @foreach ($berita as $ber)
                <tr>
                <div class="row">
                    <div class="col-md-12">
                        <th scope="row">{{$ber->id}}</th>
                        <td>{{$ber->name}}</th>
                        <td>{!!$ber->description!!}</th>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                            <a href="{{ URL::to('berita/' . $ber->id . '/edit') }}">
                                <button type="button" class="btn btn-warning">Edit</button>
                            </a>&nbsp;
                            <form action="{{url('berita', [$ber->id])}}" method="POST">
                                <input type="hidden" name="_method" value="DELETE">
                                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                   <input type="submit" class="btn btn-danger" value="Delete"/>
                             </form>
                        </td>
                    </div>
                </div>
                </tr>
                @endforeach
              </table>
           </div>
       </div>
   </div>

</body>
</html>
