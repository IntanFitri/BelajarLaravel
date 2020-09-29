<!DOCTYPE html>
<html lang="en">
<head>
    <title>Supplier</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Supplier</h1>
            <a class="btn btn-success" href="{{url('supplier/create')}}">New</a>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Company Name</th>
                    <th scope="col">Location ID</th>
                    <th scope="col">Phone Number</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($supplier as $sup)
                <tr>
                    <th scope="row">{{$sup->id}}</th>
                    <td>{{$sup->company_name}}</td>
                    <td>{{$sup->location_id}}</td>
                    <td>{{$pro->phone_number}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
