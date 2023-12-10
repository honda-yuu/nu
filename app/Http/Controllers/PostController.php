<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Month;
// use App\Models\Category;
use Cloudinary;  //use宣言追加

class PostController extends Controller
{
    public function index(Post $post)
    {
        // $posts=Post::where('user_id',\Auth::user()->id)->get();
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit()]);
    }

    // public function show(Post $post)
    // {
    //     return view('posts/show')->with(['post' => $post]);
    // }

    public function create(Month $month)
    {
        return view('posts/create')->with(['months' => $month->get()]); //create.blade.phpを表示
    }

    public function store(Post $post, Request $request)
    {
        $input_post = $request['post'];
        $image_url = Cloudinary::upload($request->file('image')->getRealPath())->getSecurePath();//追加
        $input_post += ['image_url' => $image_url];  //追加
        
        $input_months=$request->months_array; //months_arrayはnameで設定した配列
        
        //先にpostsテーブルにデータを保存
        $post->fill($input_post)->save();
        
        //attachメソッドを使って中間テーブルに、上の$postのidと対応する月のid配列$input_monthsを保存
        $post->months()->attach($input_months);
        return redirect('/posts');
    }

    public function edit(Post $post)
    {
        return view('posts/edit')->with(['post' => $post]);
    }

    public function update(Request $request, Post $post)
    {
        $input_post = $request['post'];
        $post->fill($input_post)->save();

        return redirect('/posts/' . $post->id);
    }

}
