<!DOCTYPE html>
<html lang="en">
<head>
    <title>Job</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            <h1>Job</h1>
            <a class="btn btn-success" href="{{url('job/create')}}">New</a>


            <table class="table table-striped">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Job Tittle</th>
                    <th scope="col">Salary</th>

                </tr>
                </thead>
                <tbody>
                @foreach ($job as $jo)
                <tr>
                    <th scope="row">{{$jo->id}}</th>
                    <td>{{$jo->tittle}}</td>
                    <td>{{$jo->salary}}</td>
                </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
    </div>
</body>
</html>
