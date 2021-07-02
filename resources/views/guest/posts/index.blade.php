@extends('layouts.app')

@section('page_title', "Blog")

@section('content')
    <div class="container">
        <div class="section-title">
            <h2>Recipes</h2>
        </div>
        <div class="latest-posts index-blade d-flex justify-content-between">
            @foreach ($posts as $post)
                <div class="post">

                    <div class="cms-overlay">
                        <div class="modify">
                            <a class="" href="{{ route('admin.posts.edit',[
                                'post' => $post->id
                                ]) }}">
                                <i class="fas fa-pencil-ruler"></i>
                                MODIFICA
                            </a>
                        </div>

                        {{-- Delete Element Form --}}
                        <div class="">
                            <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <i class="far fa-trash-alt"></i>
                                <input type="submit" class="" value="RIMUOVI">
                            </form>
                        </div>
                    </div>

                    <div class="image-container">
                        @if ($post->img_path)
                            <img src="{{ asset('storage/' .$post->img_path) }}" alt="{{$post->title}}">
                        @endif
                    </div>
                    <div class="recipe-content">
                        <div class="recipe-description">
                            <a href="{{ route('blog-post', [
                                'slug' => $post->slug
                                ]) }}"><h5>{{ $post->title }}</h5></a>
                            <p>{{ $post->content }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    {{-- <h1>Ciao sono l'index pubblica dei post</h1> --}}

    {{-- @foreach ($posts as $post)
        <div class="">
            <h2>{{ $post->title }}</h2> --}}

            {{-- @if ($post->tags->isNotEmpty())
                <div class="mt-2">
                    <b>TAG: </b>
                    @foreach ($post->tags as $tag)
                        <a href="{{ route('tag-page', ['slug' =>$tag->slug])}}">
                            {{ $tag->name }}{{ $loop->last ? '' : ',' }}
                        </a>
                    @endforeach
                </div>
            @endif --}}

            {{-- @if ($post->category)
                <div class="mt-2">
                    <b>Categoria: </b>
                    <a href="{{ route('category-page', ['slug' =>$post->category->slug])}}">
                        {{$post->category->name}}
                    </a>
                </div>
            @endif --}}

            {{-- <p>{{ $post->content }}</p> --}}

            {{-- <a class="btn btn-primary" href="{{ route('blog-post', [
                'slug' => $post->slug
                ]) }}">DETTAGLI</a> --}}
        {{-- </div>
    @endforeach --}}
@endsection
