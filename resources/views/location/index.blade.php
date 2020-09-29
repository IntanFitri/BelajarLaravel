<!DOCTYPE html>
<html lang="en">
<head>
    <title>Location</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Location</h1>
            <a class="btn btn-success" href="{{url('location/create')}}">New</a>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Province</th>
                    <th scope="col">City</th>
                    <th scope="col">Street</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($location as $loc)
                <tr>
                    <th scope="row">{{$loc->id}}</th>
                    <td>{{$loc->province}}</td>
                    <td>{{$loc->city}}</td>
                    <td>{{$loc->street}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
