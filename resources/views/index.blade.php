<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <p><strong>Hell world!</strong></p>
    <div class="w-64 h-64 bg-red-200"></div>
    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>
    @foreach ($posts as $post)
        <div>
            <h2>{{$post->title}}</h2>
        </div>
    @endforeach
    {{$posts->links()}}
</body>
</html>