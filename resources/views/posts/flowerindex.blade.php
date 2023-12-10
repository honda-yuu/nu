<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>花言葉を検索</h1>
        
        <!--検索機能ここから -->
        <div>
            <form action="{{ route('flowerindex')}}" method="GET">
                <input type="text" name="keyword" value="{{ $keyword }}">
                <input type="submit" value="検索">
            </form>
        </div>
        <!--検索機能はここまで-->
                
        <h2>花言葉一覧</h2>
        
        {{--<form action="flowerindex" method="GET">
            <select name= "month">
                <option>1月</option>
                <option>2</option>
            </select>
        </form>--}}
        <div>
            @foreach ($flowers as $flower)
                <div class='flower' style='border:solid 1px; margin-bottom: 10px;'>
                    <h2 class='name'>{{ $flower->name}}</h2>
                    <p>{{$flower->flower_mean}}</p>
                    <p>{{$flower->money}}</p>
                    <div class='image'>
                        <input type="file" name="image">
                    </div>
                </div>
            @endforeach
        </div>
    </body>
</html>
