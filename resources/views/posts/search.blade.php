<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <x-app-layout>
        <body>
            <h1>投稿検索</h1>
           <form method="get" action="/posts/search" class="d-inline-block w-75">
                <div class="form-group ">
                    <div class="input-group">
                        <input type="text" name="keyword" class="form-control" placeholder="検索"  value="{{ request()->input('keyword') }}"autocomplete="on">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-success">検索</button>
                        </div>
                    </div>
                </div>
             </form>
           
            <div>
                @foreach ($posts as $post)
                    <div style='border:solid 1px; margin-bottom: 10px;'>
                        タイトル：
                        <h5>{{ $post->title }}</h5>
                        説明：
                        <h5 class='body'>{{ $post->body }}</h5>
                        花言葉：
                        <h5 class='flower_mean'>{{ $post->flower_mean }}</h5>
                        予算：
                        <h5 class='money'>{{ $post->money }}円</h5>
                        季節：
                        <h5 class='month'>
                            @foreach($post->months as $month)
                                {{ $month->month }}
                            @endforeach
                        </h5>
                        イメージ画像：
                        <img src="{{ $post->image_url }}" alt="画像が読み込めません。"/>
                    </div>
                @endforeach
            </div>
            
        </body>
    </x-app-layout>
</html>