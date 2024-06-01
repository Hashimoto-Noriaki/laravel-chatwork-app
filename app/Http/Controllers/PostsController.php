<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
