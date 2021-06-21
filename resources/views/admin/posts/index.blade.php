@extends('layouts.app')

@section('content')
    <h1>Ciao sono l'index pubblica dei post</h1>

    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>

        <a class="btn btn-primary" href="{{ route('admin.posts.show',[
            'post' => $post->id
            ]) }}">DETTAGLI</a>
    @endforeach
@endsection
