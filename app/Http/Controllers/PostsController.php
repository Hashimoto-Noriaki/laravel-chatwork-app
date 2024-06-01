<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Posts;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Posts::orderBy('id','Desc')->paginate(10);
        return view('welcome',[
            'posts' => $posts,
        ]);
    }

    public function store(PostRequest $request)
    {
        $post = new Posts;
        $post->text = $request->contents;
        $post->user_id = $request->user()->id;
        $post->save();
        return back();
    }
}
