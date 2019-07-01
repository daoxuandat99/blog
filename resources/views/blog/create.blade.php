<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
          integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
<form action="{{route('blog.add')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="exampleInputName">Tên Blog</label>
        <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp"
               placeholder="Tên Blog" name="name">
        <small id="nameHelp" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputContent">Nội dung</label>
        <input type="text" class="form-control" id="exampleInputContent" placeholder="Nội dung" name="content">
    </div>
    <div class="form-group">
        <label for="exampleInputWritingDate">Ngày viết</label>
        <input type="text" class="form-control" id="exampleInputWritingDate" placeholder="Ngày viết" name="writingDate">
    </div>
    <button type="submit" class="btn btn-primary">Chỉnh sửa</button>
</form>
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</html>