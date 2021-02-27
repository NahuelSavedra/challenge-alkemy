@extends('layout')

@section('content')
    


<section class="wrapper style2">
    <h2 class="align-center box">Latest posts</h2>
<br>
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
                                <a href="#" class="button alt">Learn More</a>
                            </footer>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
</section>

@endsection
