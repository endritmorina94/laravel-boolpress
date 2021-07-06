@extends('layouts.app')

@section('page_title', $post->title)

@section('content')
    <div class="container post-details-guest">
        <div class="section-title">
            <h2>{{ $post->title }}</h2>
        </div>
        <div class="post-container">
            <div class="img-container">
                @if ($post->img_path)
                    <img class="rounded" src="{{ asset('storage/' .$post->img_path) }}" alt="{{$post->title}}">
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
                        <b>Tempo di preparazione: </b>
                        {{$post->cooking_time}}
                    </div>
                @endif

                @if ($category)
                    <div class="">
                        <b>Dosi per: </b>
                        {{$post->people}} Persone
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

        {{-- From Same Category Start --}}
        <div class="section-title">
            <h2>Della stessa Categoria</h2>
        </div>
        <div class="latest-posts d-flex justify-content-between">
            @foreach ($same_cat_posts as $post)
                <div class="post">
                    <div class="image-container">
                        <img src="{{ asset('storage/' . $post->img_path) }}" alt="{{ $post->title }}">
                    </div>
                    <div class="recipe-content">
                        <div class="recipe-description">
                            <a href="{{ route('blog-post', [
                                'slug' => $post->slug
                                ]) }}"><h5>{{ $post->title }}</h5>
                            </a>
                            <p>{{substr($post->content, 0, 121)}}..</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{-- From Same Category End --}}

@endsection
