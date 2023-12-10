<!DOCTYPE HTML>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
    </head>
    <body>
        <h1>投稿編集</h1>
        <form action="/posts/{{ $post->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <h2>タイトル</h2>
                <input type="text" name="post[title]" value="{{ old('post.title', $post->title) }}"/>
                <p class="title__error" style="color:red">{{ $errors->first('post.title') }}</p>
            </div>
            <div>
                <h2>説明</h2>
                <textarea name="post[body]">{{ old('post.body', $post->body) }}</textarea>
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            </div>
            <div>
                <h2>花言葉</h2>
                <input type="text" name="post[flower_mean]" value="{{ old('post.flower_mean', $post->flower_mean) }}"/>
                <p class="flower_mean__error" style="color:red">{{ $errors->first('post.flower_mean') }}</p>
            </div>
             <div>
                <h2>予算</h2>
                <input type="number" name="post[money]" value="{{ old('post.money', $post->money) }}"> 円</input>
                <p class="money__error" style="color:red">{{ $errors->first('post.money') }}</p>
            </div>
            <div>
                <h2>季節</h2>
                @foreach($months as $month)
                    <div>
                         <label>
                            @if(in_array($month->id, $checked_months))
                                <input type="checkbox" name="months_array[]" value="{{ $month->id }}" checked>
                                <span>{{ $month->month }}</span>
                            @else
                                <input type="checkbox" name="months_array[]" value="{{ $month->id }}">
                                <span>{{ $month->month }}</span>
                             @endif
                        </label>
                    </div>
                @endforeach
               
            </div>
            <div>
                <h2>イメージ画像</h2>
                <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
                <input type="file" name="image" value="{{ old('post.image', $post->image) }}">
            </div>
            <input type="submit" value="更新"/>
        </form>
    </body>
</html>
