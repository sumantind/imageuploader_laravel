<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .card{
        border: 1px solid #ddd8d8;
        padding: 10px;
        border-radius: 10px;
    }
  </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6 justify-content-center" style="margin-top:50px;">
            <div class="card">
                <form action="{{url('/upload-image')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <label for="">Image</label>
                    <input type="file" name="profile" class="form-control"><br>
                    <input type="submit" value="Submit" class="btn btn-info">
                </form>
            </div> 
        </div>
        <div class="col-md-3"></div>
    </div>

    <div class="row" style="margin-top:30px;">
        @foreach ($images as $image)
        <div class="col-sm-4">
            <img src="{{asset($image->name)}}" class="img-thumbnail" style="height:200px;width:100%;margin-bottom:5px;">
        </div>
        @endforeach

    </div>
</div>

</body>
</html>
