@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>

    <div class="">SLUG: {{ $post->slug }}</div>

    <p>{{ $post->content }}</p>
@endsection
