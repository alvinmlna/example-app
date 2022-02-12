@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="mb-3 text-center">{{ $title }}</h5>

        <div class="row justify-content-center mb-3">
            <div class="col-md-6">
                <form action="/posts">
                    @if(request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" value="{{ request('search') }}" placeholder="Search.." name="search">
                        <button class="btn btn-danger" type="submit">Search</button>
                      </div>
                </form>
            </div>
        </div>



        @if ($posts-> count())
            <div class="card mb-3">

                    
                @if ($posts[0]->image)
                <div style="max-height:350px; overflow:hidden;">
                    <img src="{{ asset('storage/' .$posts[0]->image) }}" 
                    class="card-img-top" alt="{{ $posts[0]->category->name }}">
                </div>
                @else
                <img src="https://source.unsplash.com/1200x400?{{ $posts[0]->category->name }}" class="card-img-top" alt="{{ $posts[0]->category->name }}">
                @endif

                <div class="card-body text-center">
                    <h5 class="card-title">
                        <h1><a href="/post/{{ $posts[0] -> slug }}" class="text-dark" style="text-decoration:none;">{{ $posts[0] -> title }}</a>  </h1>
                    </h5>
                    <p>
                        <small class="text-muted">
                        By. <a href="/posts?user={{ $posts[0] -> user -> username }}" style="text-decoration:none">{{ $posts[0]-> user -> name }}</a> on 
                        <a href="/posts?category={{ $posts[0] -> category -> slug }}" style="text-decoration:none">{{ $posts[0] -> category -> name }}
                        </a> {{  $posts[0]->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $posts[0] -> excerpt }}</p>

                    <a href="/post/{{ $posts[0] -> slug }}" class="btn btn-primary"  style="text-decoration:none">Read more</a>
                </div>
            </div>

    </div>

    <div class="container mb-4">
        <div class="row">
            @foreach ($posts->skip(1) as $item)
            <div class="col-md-4 mb-3">
                <div class="card" >
                    <div class="position-absolute  px-3 py-2 " style="background-color: rgba(0,0,0,0.7)">
                        <a href="/posts?category={{ $item->category->slug }}" class="text-white text-decoration-none">{{ $item->category->name }}</a>
                    </div>
                    

                    @if ($item->image)
                    <div style="max-height:350px; overflow:hidden;">
                        <img src="{{ asset('storage/' .$item->image) }}" 
                        class="card-img-top" alt="{{ $item->category->name }}">
                    </div>
                    @else
                        <img src="https://source.unsplash.com/500x400?{{ $item->category->name }}" class="card-img-top" alt="{{ $item->category->name }}">
                    @endif

                    <div class="card-body">
                      <h5 class="card-title">{{ $item -> title }}</h5>
                      <p>
                        <small class="text-muted">
                        By. <a href="/posts?user={{ $item -> user -> username }}" style="text-decoration:none">{{ $item-> user -> name }}</a>
                        </a> {{  $item->created_at->diffForHumans() }}
                        </small>
                    </p>
                      <p class="card-text">{{ $item -> excerpt }}</p>
                      <a href="/post/{{ $item->slug }}" class="btn btn-primary" style="text-decoration:none">Read more</a>
                    </div>
                  </div>
            </div>
            @endforeach
        </div>
        
    <div class="d-flex justify-content-end">
        {{ $posts->links() }}
    </div>
    </div>

    @else
    <p class="text-center fs-4">No post found.</p>      
  @endif

@endsection