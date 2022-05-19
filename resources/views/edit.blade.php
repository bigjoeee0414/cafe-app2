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
    <!-- body内だけを表示しています。 -->
    <body>
        <h1 class="title">編集画面</h1>
        <div class="content">
            <form action="/posts/{{ $post->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class='content__title'>
                    <h2>タイトル</h2>
                    <input type='text' name='post[title]' value="{{ $post->title }}">
                </div>
                <div class='content__name'>
                    <h2>店名</h2>
                    <input type='text' name='post[name]' value="{{ $post->name }}">
                </div>
                <div class='content__address'>
                    <h2>住所</h2>
                    <input type='text' name='post[address]' value="{{ $post->address }}">
                </div>
                <div class='content__tel'>
                    <h2>電話番号</h2>
                    <input type='text' name='post[tel]' value="{{ $post->tel }}">
                </div>
                <div class='content__opening'>
                    <h2>開店時間</h2>
                    <input type='text' name='post[opening]' value="{{ $post->opening }}">
                </div>
                <div class='content__closed'>
                    <h2>閉店時間</h2>
                    <input type='text' name='post[closed]' value="{{ $post->closed }}">
                </div>
                <div class='content__body'>
                    <h2>本文</h2>
                    <input type='text' name='post[body]' value="{{ $post->body }}">
                </div>
                <input type="submit" value="保存">
            </form>
        </div>
    </body>
</html>