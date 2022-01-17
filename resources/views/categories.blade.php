@extends('layouts.main')

@section('content')
    <div class="container">
        <ul>
            @foreach ($allcategory as $item)
                <li><a href="/categories/{{ $item -> slug }}">{{ $item -> name }}</a></li>
            @endforeach
        </ul>
    </div>
@endsection