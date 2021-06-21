@extends('layouts.app')

@section('page_title', "Blog")

@section('content')
    <h1>Ciao sono l'index pubblica dei post</h1>

    @foreach ($posts as $post)
        <h2>{{ $post->title }}</h2>
        <p>{{ $post->content }}</p>

        <a class="btn btn-primary" href="{{ route('admin.posts.show',[
            'post' => $post->id
            ]) }}">DETTAGLI
        </a>

        <a class="btn btn-success" href="{{ route('admin.posts.edit',[
            'post' => $post->id
            ]) }}">MODIFICA
        </a>

        {{-- Delete Element Form --}}
        <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger" value="Elimina">
        </form>
    @endforeach
@endsection
