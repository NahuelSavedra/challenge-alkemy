<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    //
    public function index(){

        $posts = Post::latest()->paginate();
        return view('posts.index',compact('posts'));
    }

    public function show(Post $post){
        return view('posts.show', compact('post'));
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Post $post){

        $post = Post::create($this->validatePost());

        return redirect(route('post.show',$post->id));
    }

    public function edit(Post $post){
        return view('posts.edit',compact('post'));    
    }

    public function update(Post $post){

        $post->update($this->validatePost());

        return redirect(route('posts.show',$post->id));

    }

    public function destroy(Post $post){

        $post->delete();

        return redirect(route('posts.index'));

    }
    public function validatePost(){
        return request()->validate([
            'title' => 'required',
            'body' => 'required'
        ]);
    }
}
