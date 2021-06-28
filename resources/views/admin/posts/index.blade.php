@extends('layouts.app')

@section('page_title', "Blog")

@section('content')
    <div class="container">
        <h1>Ciao sono l'index pubblica dei post</h1>

        @foreach ($posts as $post)
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
                    <a href="{{ route('admin.category-page', ['slug' =>$post->category->slug])}}">
                        {{$post->category->name}}
                    </a>
                </div>
            @endif

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
    </div>
@endsection
