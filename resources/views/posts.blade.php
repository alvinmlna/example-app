@extends('layouts.main')

@section('content')
    @foreach ($posts as $item)
        <article class="container border-bottom mb-4">
            <h1><a href="/post/{{ $item -> slug }}" style="text-decoration:none">{{ $item -> title }}</a>  </h1>
            <p>By {{ $item -> user -> name }} on {{ $item -> category -> name }}</p>

            {{ $item -> body }}

            <p>
                <a href="/posts" style="text-decoration:none">Read more...</a>
            </p>
        </article>
    @endforeach
@endsection