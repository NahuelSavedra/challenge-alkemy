@extends('layout')

@section('content')

    <section id="One" class="wrapper style3">
        <div class="inner">
            <header class="align-center">
                <h2>New post</h2>
            </header>
    </div>
    </section>

    <div class="container">
        <h3>Complete the form</h3>

        <form method="POST" action="/posts" enctype="multipart/form-data">
        @csrf
            <label for="title">Title: </label>
            <input type="text" name="title">
            <br>

            <label for="body">Body:</label>
            <textarea name="body" id="body" cols="30" rows="10"></textarea>
            <br>

            <button class="button special fit" type="submit">Send</button>
        </form>
    </div>
@endsection