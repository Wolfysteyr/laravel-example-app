<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create post</title>
</head>
<body>
    <h1>Create post</h1>
    <form action="/posts" method="post">
        @csrf 
        Author: <input type="text">
        Title: <input type="text">
        Content: <textarea name="" id=""></textarea>
        <input type="submit" value="Save">
    </form>
</body>
</html>