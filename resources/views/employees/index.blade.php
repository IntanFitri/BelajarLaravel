<!DOCTYPE html>
<html lang="en">
<head>
    <title>Employees</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Employees</h1>
            <a class="btn btn-success" href="{{url('employees/create')}}">New</a>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firts Nama</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Job ID</th>
                    <th scope="col">Hired Date</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($employees as $emp)
                <tr>
                    <th scope="row">{{$emp->id}}</th>
                    <td>{{$emp->first_name}}</td>
                    <td>{{$emp->last_name}}</td>
                    <td>{{$emp->email}}</td>
                    <td>{{$emp->phone_number}}</td>
                    <td>{{$emp->job_id}}</td>
                    <td>{{$emp->hired_date}}</td>
                    <td>{{$emp->location_id}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
