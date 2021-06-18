@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Ciao sono l'index pubblica dei post</h1>

        @foreach ($posts as $post)
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        @endforeach
    </div>
@endsection
