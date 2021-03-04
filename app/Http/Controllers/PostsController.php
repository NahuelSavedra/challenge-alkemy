<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
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

    public function store(PostRequest $request){
        $post = Post::create($request->validated());
        return redirect(route('posts.show',$post->id));
    }

    public function edit(Post $post){
        return view('posts.edit',compact('post'));    
    }

    public function update(PostRequest $request,Post $post){

        $post->update($request->validated());

        return redirect(route('posts.show',$post->id));

    }

    public function destroy(Post $post){

        $post->delete();

        return redirect(route('posts.index'));

    }

}
