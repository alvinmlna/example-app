@extends('layouts.main')

@section('content')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <article class="container border-bottom mb-4">
                    <h1 class="mb-3">{{ $post -> title }} </h1>
                    <p>By. <a href="/posts?user={{ $post -> user -> username }}">{{ $post -> user -> name }}</a> on 
                        <a href="/posts?category={{ $post -> category -> slug }}">{{ $post -> category -> name }}</a></p>
            
                        
                    @if ($post->image)
                    <div style="max-height:350px; overflow:hidden;">
                        <img src="{{ asset('storage/' .$post->image) }}" 
                        class="img-fluid" alt="{{ $post->category->name }}">
                    </div>
                    @else
                    <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}" 
                    class="img-fluid" alt="{{ $post->category->name }}">
                    @endif

                    

                    <article class="my-3 fs-5">
                        {!! $post -> body !!}
                    </article>
            
                    <p>
                        <a href="/posts" style="text-decoration:none">back to home...</a>
                    </p>
                </article>
            </div>
        </div>
    </div>
@endsection