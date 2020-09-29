<!DOCTYPE html>
<html lang="en">
<head>
    <title>Type</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Type</h1>
            <a class="btn btn-success" href="{{url('type/create')}}">New</a>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Type</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($type as $ty)
                <tr>
                    <th scope="row">{{$ty->id}}</th>
                    <td>{{$ty->type}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
