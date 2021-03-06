<!DOCTYPE HTML>
<html lang="{{ str_replace("_", "-", app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Posts</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <body>
        <p class="edit">[<a href="/posts/{{ $post->id }}/edit">edit</a>]</p>
        <h1 class="title">
            {{ $post->title }}
        </h1>
        <div class="content">
            <div class="content__post">
                <h3 class='name'>店名：{{ $post->name }}</h3>
                <p class='address'>住所：{{ $post->address }}</p>
                <p class='tel'>電話番号：{{ $post->tel }}</p>
                <p class='opening'>開店時間：{{ $post->opening }}</p>
                <p class='closed'>閉店時間：{{ $post->closed }}</p>
                <p class='body'>レビュー：{{ $post->body }}</p>    
            </div>
        </div>
        <div class="footer">
            <a href="/">戻る</a>
        </div>
    </body>
</html>