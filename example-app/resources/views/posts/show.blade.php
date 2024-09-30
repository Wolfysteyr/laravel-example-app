<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Single post view</title>
</head>
<body>
    <h1>Post{{ $onepost->id }}</h1>

    <div class="post_container">
        <p>{{$onepost->author}}</p>
        <p>{{$onepost->title}}</p>
        <p>{{$onepost->content}}</p>
    </div>

    <a href="/posts">Back to all posts</a>
</body>
</html>