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
        <p>{{$post->author}}</p>
        <p>{{$post->title}}</p>
        <p>{{$post->content}}</p>
    </div>

    <a href="/posts">Back to all posts</a>
</body>
</html>