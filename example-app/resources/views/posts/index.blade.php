<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posts</title>
</head>
<body>
    <h1>All posts</h1>
    <a href="/posts/create">Create a post</a>
    <ul>
        @foreach($allposts as $post)
            <li>
                Author: {{ $post->author }},
                Title: {{ $post->title }},
                Content: {{ $post->content }}
                <a href="/posts/{{ $post->id }}/show">Show</a>
            </li>
        @endforeach
    </ul>
</body>
</html>