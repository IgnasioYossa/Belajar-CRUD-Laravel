
@extends('layouts.main')

@section('container')
    <article class="mt-5">
        @foreach ($posts as $blog)
            <h2>
                <a href="/blog/{{ $blog["slug"] }}">{{ $blog["title"] }}</a>
            </h2>
            <h5>By :{{ $blog["author"] }}</h5>
            <p>{{ $blog["body"] }}</p>
        @endforeach
    </article>
@endsection
