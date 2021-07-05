@extends('layouts.app')

@section('page_title', "GialloBooleano")

@section('content')

    <div class="container">
        <div class="home-page">
            {{-- Suggested Recipes Start --}}
            <div class="section-title">
                <h2>Ricette Consigliate</h2>
            </div>
            <div class="suggested-posts d-flex justify-content-between">
                @foreach ($suggested_posts as $post)
                    <div class="post">
                        <div class="category">
                            <a href="{{ route('category-page', ['slug' => $post->category->slug]) }}">
                                {{ $post->category->name }}
                            </a>
                        </div>
                        <div class="image-container">
                            <img src="{{ asset('storage/' . $post->img_path) }}" alt="{{ $post->title }}">
                        </div>
                        <div class="recipe-content">
                            <div class="recipe-numbers">
                                <span><i class="far fa-clock"></i> {{ $post->cooking_time }}</span>
                                <span><i class="fas fa-users"></i> {{ $post->people }} Persone</span>
                            </div>
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
            {{-- Suggested Recipes End --}}

            {{-- Recent Recipes Start --}}
            <div class="section-title">
                <h2>Ricette Recenti</h2>
            </div>
            <div class="latest-posts d-flex justify-content-between">
                @foreach ($last_posts as $post)
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
            {{-- Recent Recipes End --}}
        </div>
    </div>




        {{-- <div class="mt-3">
            @foreach ($categories as $category)
                <a href="{{ route('category-page', ['slug' => $category->slug])}}">
                    <h3>{{ $category->name }}</h3>
                </a>
            @endforeach
        </div> --}}

    <section class="parallax container-fluid">
        <div class="container">
            <div class="section-title">
                <h2>Categorie</h2>
            </div>

            <div class="categories">
                @foreach ($categories as $category)
                    <a href="{{ route('category-page', ['slug' => $category->slug])}}">
                        <div class="category">
                            <h3>{{ $category->name }}</h3>
                            <img src="{{ asset('storage/' . $category->img_path) }}" alt="{{ $category->name }}">
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
