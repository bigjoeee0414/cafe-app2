<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>cafe-app2</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
    </head>
    <body>
        <h1>投稿一覧</h1>
        [<a href='/posts/create'>create</a>]
        <div class='posts'>
           @foreach ($posts as $post)
                <div class='post'>
                    <h2 class='title'>
                        <a href="/posts/{{ $post->id }}">タイトル：{{ $post->title }}</a>
                    </h2>
                    <h3 class='name'>店名：{{ $post->name }}</h3>
                    <p class='address'>住所：{{ $post->address }}</p>
                    <p class='tel'>電話番号：{{ $post->tel }}</p>
                    <p class='opening'>開店時間：{{ $post->opening }}</p>
                    <p class='closed'>閉店時間：{{ $post->closed }}</p>
                    <p class='body'>レビュー：{{ $post->body }}</p>
                </div>
            @endforeach
        </div>
    </body>
</html>
