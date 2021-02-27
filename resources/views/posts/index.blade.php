@extends('layout')

@section('content')

<section id="One" class="wrapper style3">
    <div class="inner">
        <header class="align-center">
            <h2>Latest post</h2>
        </header>
    </div>
</section>

<section class="wrapper style2">
    <div class="inner">
        <div class="grid-style">

            
                @foreach ($posts as $post)
                <div>
                    <div class="box">
                        <div class="content">
                            <header class="align-center">
                                <h2>{{ $post->title }}</h2>
                            </header>
                            
                            <p>Created at: {{ $post->created_at }}</p>
                    
                            <footer class="align-center">
                                <a href="/posts/{{ $post->id }}" class="button alt">Learn More</a>
                            </footer>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</section>

@endsection
