@extends('layouts.app')

@section('page_title', $category->name)

@section('content')
    <h1>{{ $category->name }}</h1>

    @foreach ($posts as $post)
        <div class="mt-4">
            <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}">
                <h2>{{ $post->title }}</h2>
            </a>

            <p>{{ $post->content }}</p>

            <a class="btn btn-success" href="{{ route('admin.posts.show', ['post' => $post->id])}}">Modifica</a>
        </div>
    @endforeach

@endsection
