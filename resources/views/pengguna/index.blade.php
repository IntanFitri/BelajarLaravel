<!DOCTYPE html>
<html lang="en">
<head>
    <title>User</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>User</h1>
            <a class="btn btn-success" href="{{url('pengguna/create')}}">New</a>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fist Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Username</th>
                    <th scope="col">Password</th>
                    <th scope="col">Type ID</th>
                    <th scope="col">Location ID</th>
                    <th scope="col">Phone Number</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($pengguna as $pen)
                <tr>
                    <th scope="row">{{$pen->id}}</th>
                    <td>{{$pen->first_name}}</td>
                    <td>{{$pen->last_name}}</td>
                    <td>{{$pen->username}}</td>
                    <td>{{$pen->password}}</td>
                    <td>{{$pen->type_id}}</td>
                    <td>{{$pen->location_id}}</td>
                    <td>{{$pen->phone_number}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
