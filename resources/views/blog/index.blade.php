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
<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Tên Blog</th>
        <th scope="col">Nội dung</th>
        <th scope="col">Ngày viết</th>
        <th scope="col">Hoạt động</th>
    </tr>
    </thead>
    @foreach($blogs as $key => $blog)
        <tbody>
        <tr>
            <th scope="row">{{$key}}</th>
            <td>{{$blog->name}}</td>
            <td>{{$blog->content}}</td>
            <td>{{$blog->writingDate}}</td>
            <td>
                <a href="{{route('blog.edit', $blog->id)}}">
                    <button type="button" class="btn btn-outline-success">Chỉnh sửa</button>
                </a>
                <a href="{{route('blog.show', $blog->id)}}">
                    <button type="button" class="btn btn-outline-danger">Xóa</button>
                </a>
            </td>
        </tr>
        </tbody>
    @endforeach
</table>
<a href="{{route('blog.create')}}">
    <button type="button" class="btn btn-outline-info">Thêm mới</button>
</a>
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