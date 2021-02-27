<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){
        return view('posts.index', [
            'posts' => Post::orderBy('id', 'desc')->paginate(10)
        ]);
    }
    public function show($id){
        return view('posts.show', [
            'post' => Post::find($id)
        ]);
    }
}
