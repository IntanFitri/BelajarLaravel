<!DOCTYPE html>
<html lang="en">
<head>
    <title>Manager</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Manager</h1>
            <a class="btn btn-success" href="{{url('manager/create')}}">New</a>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Fist Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Location ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($manager as $man)
                <tr>
                    <th scope="row">{{$man->id}}</th>
                    <td>{{$man->first_name}}</td>
                    <td>{{$man->last_name}}</td>
                    <td>{{$man->location_id}}</td>
                    <td>{{$man->email}}</td>
                    <td>{{$man->phone_number}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
