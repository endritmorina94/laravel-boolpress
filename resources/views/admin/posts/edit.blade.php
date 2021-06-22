@extends('layouts.app')

@section('page_title', "Modifica un post")

@section('content')
    <h1>Modifica un post</h1>

    {{-- Nel caso ci siano errori --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Edit Form --}}
    <form action="{{ route('admin.posts.update', ['post' => $post->id]) }}" method="post">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $post->title) }}">
        </div>

        <div class="form-group">
            <label for="category">Categoria</label>
            <select class="form-control" name="category_id">
                <option value="">Nessuna</option>
                @foreach ($categories as $category)
                    {{-- il ternario fa in modo che la option rimanga selezionata in caso non vada a buon fine la creazione del nuovo post
                    alla prima apertura però verrà visualizzata la categoria attuale del post --}}
                    <option value="{{ $category->id }}" {{ (old('category_id', $post->category_id) == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" id="content" name="content" rows="8" cols="80">{{ old('content', $post->content) }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
    {{-- End Edit form --}}
@endsection
