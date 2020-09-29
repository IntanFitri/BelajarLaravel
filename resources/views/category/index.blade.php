<!DOCTYPE html>
<html lang="en">
<head>
    <title>Category</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Category</h1>
            <a class="btn btn-success" href="{{url('category/create')}}">New</a>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Description</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($category as $cat)
                <tr>
                    <th scope="row">{{$cat->id}}</th>
                    <td>{{$cat->name}}</td>
                    <td>{{$cat->description}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
