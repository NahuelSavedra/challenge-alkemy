@extends('layout')

@section('content')

			<section id="One" class="wrapper style3">
				<div class="inner">
					<header class="align-center">
						<h2>{{ $post->title }}</h2>
					</header>
				</div>
			</section>

            <section id="two" class="wrapper style2">
				<div class="inner">
					<div class="box">
						<div class="content">
                            {{ $post->created_at }}
                            <br>
                            <br>
                            <p>{{ $post->body }}</p>
                        </div>
					</div>
				</div>
			</section>

@endsection