<!DOCTYPE html>
<html lang="en">
<head>
    <title>Customers</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Customers</h1>
            <a class="btn btn-success" href="{{url('customer/create')}}">New</a>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Firts Nama</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Phone Number</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($customer as $cus)
                <tr>
                    <th scope="row">{{$cus->id}}</th>
                    <td>{{$cus->first_name}}</td>
                    <td>{{$cus->last_name}}</td>
                    <td>{{$cus->phone_number}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
