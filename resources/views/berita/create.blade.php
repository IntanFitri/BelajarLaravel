<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2 mt-5">
                <div class="card-header bg-info">
                    <h6 class="text-white"> Tambah Berita</h6>
                </div>
                <div class="card-body">
                    <form method="post" action="{{ URL::to('simpanberita')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label> Nama </label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label> Description : </strong></label>
                            <textarea class="ckeditor form-control" name="description"></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button type="submit" class="btn btn-success btn-sm"> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/4.15.0/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
    </script>

</body>
</html>
