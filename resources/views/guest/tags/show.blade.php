@extends('layouts.app')

@section('page_title', $tag->name)

@section('content')
    <h1>TAG: {{ $tag->name }}</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('blog-post', ['slug' => $post->slug])}}">
                    {{ $post->title }}
                </a>
            </li>
        @endforeach
    </ul>
@endsection
