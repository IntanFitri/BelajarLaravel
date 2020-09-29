<!DOCTYPE html>
<html lang="en">
<head>
    <title>Product</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Product</h1>
            <a class="btn btn-success" href="{{url('product/create')}}">New</a>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">QTY Stock</th>
                    <th scope="col">Price</th>
                    <th scope="col">Category ID</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($product as $pro)
                <tr>
                    <th scope="row">{{$pro->id}}</th>
                    <td>{{$pro->name}}</td>
                    <td>{{$pro->description}}</td>
                    <td>{{$pro->qty_stock}}</td>
                    <td>{{$pro->price}}</td>
                    <td>{{$pro->category_id}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
