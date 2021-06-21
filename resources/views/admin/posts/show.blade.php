@extends('layouts.app')

@section('page_title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>

    <div class="">SLUG: {{ $post->slug }}</div>

    <p>{{ $post->content }}</p>

    <a class="btn btn-success" href="{{ route('admin.posts.edit',[
        'post' => $post->id
        ]) }}">MODIFICA
    </a>
@endsection
