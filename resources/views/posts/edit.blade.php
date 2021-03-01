@extends('layout')

@section('content')

    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <h2>Update post</h2>
            </header>
    </div>
    </section>

    <div class="container">
        <h3>Complete the form</h3>

        <form method="POST" action="{{ route('posts.update',$post->id) }}" enctype="multipart/form-data">
            @method('PATCH')
        @csrf
            <label for="title">Title: </label>
            <input type="text" name="title" value="{{ $post->title }}"
            @error('title') class="danger" @enderror>

            @error('title')
            <p class="error">{{ $errors->first('title') }}</p>
            @enderror

            <br>
            <label for="body">Body:</label>
            <textarea name="body" id="body" cols="30" rows="10"
            @error('body') class="danger" @enderror>
            {{ $post->body }}</textarea>

            @error('body')
            <p class="error">{{ $errors->first('body') }}</p>
            @enderror

            <br>

            <button class="button special fit" type="submit">Send</button>
        </form>
    </div>
@endsection