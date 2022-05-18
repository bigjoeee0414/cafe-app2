<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>cafe-app2</title>
    </head>
    <body>
        <h1>新規作成</h1>
        <form action="/posts" method="POST">
            {{ csrf_field() }}
            <div class="title">
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="タイトル" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div class="name">
                <h2>店名</h2>
                <input type="text" name="post[name]" placeholder="店名" value="{{ old('post.name') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.name') }}</p>
            </div>
            <div class="address">
                <h2>住所</h2>
                <input type="text" name="post[address]" placeholder="住所" value="{{ old('post.address') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.address') }}</p>
            </div>
            <div class="tel">
                <h2>電話番号</h2>
                <input type="text" name="post[tel]" placeholder="電話番号" value="{{ old('post.tel') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.tel') }}</p>
            </div>
            <div class="opening">
                <h2>開店時間</h2>
                <input type="text" name="post[opening]" placeholder="開店時間"/>
            </div>
            <div class="closed">
                <h2>閉店時間</h2>
                <input type="text" name="post[closed]" placeholder="閉店時間"/>
            </div>
            <div class="body">
                <h2>レビュー</h2>
                <textarea name="post[body]" placeholder="今日も1日お疲れさまでした。">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <input type="submit" value="保存"/>
        </form>
        <div class="back">[<a href="/">戻る</a>]</div>
    </body>
</html>