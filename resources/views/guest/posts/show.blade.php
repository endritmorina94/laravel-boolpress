@extends('layouts.app')

@section('page_title', $post->title)

@section('content')
    <h1>Ciao sono l'index pubblica dei post</h1>

    <h2>{{ $post->title }}</h2>
    @if ($category)
        <div class="">
            Categoria: {{$category->name}}
        </div>
    @endif

    <p>{{ $post->content }}</p>
@endsection
