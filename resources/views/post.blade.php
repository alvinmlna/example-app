@extends('layouts.main')

@section('content')
    <article class="container border-bottom mb-4">
        <h1>{{ $post -> title }} </h1>
        <p>By. <a href="/author/{{ $post -> user -> username }}">{{ $post -> user -> name }}</a> on <a href="/categories/{{ $post -> category -> slug }}">{{ $post -> category -> name }}</a></p>

        {{ $post -> body }}

        <p>
            <a href="/posts" style="text-decoration:none">back to home...</a>
        </p>
    </article>
@endsection