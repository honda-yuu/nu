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
            <h1>作成した投稿一覧</h1>
            <a href='/posts/create'>新規投稿</a>
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
                    <div class="edit"><a href="/posts/{{ $post->id }}/edit">編集</a></div>
                    <form action="/posts/{{ $post->id }}" id="form_{{ $post->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="button" onclick="deletePost({{ $post->id }})">削除</button> 
                    </form>
                @endforeach
            </div>
            <div>
                {{ $posts->links() }}
            </div>
            
            <script>
                function deletePost(id) {
                    'use strict'
            
                    if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                        document.getElementById(`form_${id}`).submit();
                    }
                }
            </script>
        </body>
    </x-app-layout>
</html>
