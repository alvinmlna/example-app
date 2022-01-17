@extends('layouts.main')

@section('content')

    <div class="container">
        <h1 class="mb-5">{{ $title }}</h5>
    </div>

    @foreach ($posts as $item)
        <article class="container border-bottom mb-4">
            <h1><a href="/post/{{ $item -> slug }}" style="text-decoration:none">{{ $item -> title }}</a>  </h1>
            <p>By. <a href="/author/{{ $item -> user -> username }}" style="text-decoration:none">{{ $item -> user -> name }}</a> on 
                <a href="/categories/{{ $item -> category -> slug }}" style="text-decoration:none">{{ $item -> category -> name }}
                </a>
            </p>

            {{ $item -> body }}

            <p>
                <a href="/posts" style="text-decoration:none">Read more...</a>
            </p>
        </article>
    @endforeach
@endsection