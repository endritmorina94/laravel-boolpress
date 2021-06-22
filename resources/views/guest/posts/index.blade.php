@extends('layouts.app')

@section('page_title', "Blog")

@section('content')
    <h1>Ciao sono l'index pubblica dei post</h1>

    @foreach ($posts as $post)
        <div class="">
            <h2>{{ $post->title }}</h2>ì
            
            <p>{{ $post->content }}</p>

            <a class="btn btn-primary" href="{{ route('blog-post', [
                'slug' => $post->slug
                ]) }}">DETTAGLI</a>
        </div>
    @endforeach
@endsection
