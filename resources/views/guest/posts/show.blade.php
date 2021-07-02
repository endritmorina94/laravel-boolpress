@extends('layouts.app')

@section('page_title', $post->title)

@section('content')
    <div class="container post-details-guest">
        <h2>{{ $post->title }}</h2>
        <div class="post-container">
            <div class="img-container">
                @if ($post->img_path)
                    <img src="{{ asset('storage/' .$post->img_path) }}" alt="{{$post->title}}">
                @endif
            </div>
            <div class="post-content">
                <h3>Descrizione</h3>
                <p>{{ $post->content }}</p>
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
            </div>
        </div>

        {{-- @if ($tags->isNotEmpty())
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
    </div> --}}
@endsection
