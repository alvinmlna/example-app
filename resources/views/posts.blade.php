@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="mb-5">{{ $title }}</h5>

        @if ($posts-> count())
            <div class="card mb-3">
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                <div class="card-body text-center">
                    <h5 class="card-title">
                        <h1><a href="/post/{{ $posts[0] -> slug }}" class="text-dark" style="text-decoration:none;">{{ $posts[0] -> title }}</a>  </h1>
                    </h5>
                    <p>
                        <small class="text-muted">
                        By. <a href="/author/{{ $posts[0] -> user -> username }}" style="text-decoration:none">{{ $posts[0]-> user -> name }}</a> on 
                        <a href="/categories/{{ $posts[0] -> category -> slug }}" style="text-decoration:none">{{ $posts[0] -> category -> name }}
                        </a> {{  $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[0] -> excerpt }}</p>

                    <a href="/post/{{ $posts[0] -> slug }}" class="btn btn-primary"  style="text-decoration:none">Read more</a>
                </div>
            </div>
        @else
          <p class="text-center fs-4">No post found.</p>      
        @endif
    </div>

    <div class="container">
        <div class="row">
            @foreach ($posts->skip(1) as $item)
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <div class="position-absolute  px-3 py-2 " style="background-color: rgba(0,0,0,0.7)">
                        <a href="/categories/{{ $item->category->slug }}" class="text-white text-decoration-none">{{ $item->category->name }}</a>
                    </div>

                    <img src="https://source.unsplash.com/500x400?{{ $item->category->name }}" class="card-img-top" alt="{{ $item->category->name }}">
                    <div class="card-body">
                      <h5 class="card-title">{{ $item -> title }}</h5>
                      <p>
                        <small class="text-muted">
                        By. <a href="/author/{{ $item -> user -> username }}" style="text-decoration:none">{{ $item-> user -> name }}</a>
                        </a> {{  $item->created_at->diffForHumans() }}
                        </small>
                    </p>
                      <p class="card-text">{{ $item -> excerpt }}</p>
                      <a href="/posts/{{ $item->slug }}" class="btn btn-primary" style="text-decoration:none">Read more</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
    </div>


@endsection