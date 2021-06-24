@extends('layouts.app')

@section('page_title', $post->title)

@section('content')
    <h1>Ciao sono l'index pubblica dei post</h1>

    <h2>{{ $post->title }}</h2>

    @if ($tags->isNotEmpty())
        <div class="mt-2">
            <b>TAG: </b>
            @foreach ($post->tags as $tag)
                <a href="{{ route('tag-page', ['slug' =>$tag->slug])}}">
                    {{ $tag->name }}{{ $loop->last ? '' : ',' }}
                </a>
            @endforeach
        </div>
    @endif

    @if ($category)
        <div class="">
            <b>Categoria: </b>
            <a href="{{ route('category-page', ['slug' =>$category->slug])}}">
                {{$category->name}}
            </a>
        </div>
    @endif

    <p>{{ $post->content }}</p>
@endsection
