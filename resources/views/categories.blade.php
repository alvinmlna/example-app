@extends('layouts.main')

@section('content')

<div class="container">
    <h1 class="mb-5">Post Categories</h1>
    <div class="row">
        @foreach ($allcategory as $item)
        <div class="col-md-4">
            <a href="/posts?category={{ $item->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?{{ $item->name }}" class="card-img" alt="{{ $item->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                        <h5 class="card-title text-center flex-fill p-4 fs-3" 
                        style="background-color: rgba(0,0,0,0.7)">{{ $item -> name }}</h5>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
    </div>
</div>

@endsection