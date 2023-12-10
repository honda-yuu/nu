<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>投稿作成</h1>
        <form action="/posts" method="POST" enctype="multipart/form-data">
            @csrf
            <div>
                <h2>タイトル</h2>
                <input type="text" name="post[title]" placeholder="投稿のタイトルを入力" value="{{ old('post.title') }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div>
                <h2>説明</h2>
                <textarea name="post[body]" placeholder="使用した花やこだわりポイントを入力">{{ old('post.body') }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div>
                <h2>花言葉</h2>
                <input type="text" name="post[flower_mean]" placeholder="花言葉を入力" value="{{ old('post.flower_mean') }}"/>
                <p class="flower_mean__error" style="color:red">{{ $errors->first('post.flower_mean') }}</p>
            </div>
             <div>
                <h2>予算</h2>
                <input type="number" name="post[money]" placeholder="予算を入力" value="{{ old('post.money') }}"> 円</input>
                <p class="money__error" style="color:red">{{ $errors->first('post.money') }}</p>
            </div>
            <div>
                <h2>季節</h2>
                @foreach($months as $month)
                    <label>
                        <input type="checkbox" value="{{ $month->id }}" name="months_array[]">{{ $month->month }}</input>
                    </label>
                    
                @endforeach
            </div>
            <div>
                <h2>イメージ画像</h2>
                <input type="file" name="image">
            </div>
            <input type="submit" value="投稿"/>
        </form>
        
    </body>
</html>
