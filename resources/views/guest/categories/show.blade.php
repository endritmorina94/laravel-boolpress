@extends('layouts.app')

@section('page_title', $category->name)

@section('content')
    <h1>{{ $category->name }}</h1>

    @foreach ($posts as $post)
        <div class="mt-4">
            <h2>{{ $post->title }}</h2>

            <p>{{ $post->content }}</p>
        </div>
    @endforeach

@endsection