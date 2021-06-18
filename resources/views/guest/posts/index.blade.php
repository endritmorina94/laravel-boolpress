@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ciao sono l'index pubblica dei post</h1>

        @foreach ($posts as $post)
            <div class="">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->content }}</p>

                <a class="btn btn-primary" href="{{ route('blog-post', [
                    'slug' => $post->slug
                    ]) }}">DETTAGLI</a>
            </div>

        @endforeach
    </div>
@endsection
