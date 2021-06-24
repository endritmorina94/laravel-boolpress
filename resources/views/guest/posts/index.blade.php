@extends('layouts.app')

@section('page_title', "Blog")

@section('content')
    <h1>Ciao sono l'index pubblica dei post</h1>

    @foreach ($posts as $post)
        <div class="">
            <h2>{{ $post->title }}</h2>


            @if ($post->tags->isNotEmpty())
                <div class="mt-2">
                    <b>TAG: </b>
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('tag-page', ['slug' =>$tag->slug])}}">
                            {{ $tag->name }}{{ $loop->last ? '' : ',' }}
                        </a>
                    @endforeach
                </div>
            @endif

            @if ($post->category)
                <div class="mt-2">
                    <b>Categoria: </b>
                    <a href="{{ route('category-page', ['slug' =>$post->category->slug])}}">
                        {{$post->category->name}}
                    </a>
                </div>
            @endif

            <p>{{ $post->content }}</p>

            <a class="btn btn-primary" href="{{ route('blog-post', [
                'slug' => $post->slug
                ]) }}">DETTAGLI</a>
        </div>
    @endforeach
@endsection
