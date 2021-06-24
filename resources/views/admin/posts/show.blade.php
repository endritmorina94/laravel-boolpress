@extends('layouts.app')

@section('page_title', $post->title)

@section('content')
    <h1>{{ $post->title }}</h1>

    <div class="">
        <b>SLUG: </b>
        {{ $post->slug }}
    </div>

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
            <a href="{{ route('admin.category-page', ['slug' =>$category->slug])}}">
                {{$category->name}}
            </a>
        </div>
    @endif

    <p>{{ $post->content }}</p>

    <a class="btn btn-success" href="{{ route('admin.posts.edit',[
        'post' => $post->id
        ]) }}">MODIFICA
    </a>
@endsection
