<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
</head>
<body>
    @foreach ($Books as $post)
    <p>{{$post->title}}</p>
    <p>{{$post->firstname}}</p>
    <p>{{$post->price}}</p>
    <p>{{$post->numpages}}</p>
    @endforeach
</body>
</html>