<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container-fluid">
        @foreach ($artikel as $ar)
        <div class="row">
            <div class="col-md-12">
                <h1>{{$ar->name}}</h1>
                <p> {!!$ar->description!!}</p>
            </div>
        </div>
        @endforeach
    </div>

</body>
</html>
