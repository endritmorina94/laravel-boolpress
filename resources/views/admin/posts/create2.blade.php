@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="section-title">
            <h2>Crea un nuovo Post</h2>
        </div>

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

        {{-- Create Form --}}
        <form action="{{ route('admin.posts.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('POST')

            <div class="form-group">
                <label for="title">Titolo</label>
                {{-- La funzione old() autocompilerà l'input nel caso la richiesta non vada subito a buon fine --}}
                <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
            </div>

            <div class="form-group">
                <label for="category">Categoria</label>
                <select class="form-control" name="category_id">
                    <option value="">Nessuna</option>
                    @foreach ($categories as $category)
                        {{-- il ternario fa in modo che la option rimanga selezionata in caso non vada a buon fine la creazione del nuovo post --}}
                        <option value="{{ $category->id }}" {{ (old('category_id') == $category->id) ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="content">Contenuto</label>
                <textarea class="form-control" id="content" name="content" rows="8" cols="80">{{ old('content') }}</textarea>
            </div>

            <div class="form-group">
                @foreach ($tags as $tag)
                    <div class="form-check-inline">
                        <input class="form-check-input" name="tags[]"
                                type="checkbox" value="{{ $tag->id }}" id="tag-{{ $tag->id }}"
                                {{ in_array($tag->id, old('tags', [])) ? 'checked' : '' }}>
                        <label class="form-check-label" for="tag-{{ $tag->id }}">
                            {{ $tag->name }}
                        </label>
                    </div>
                @endforeach
            </div>

            <div class="form-group">
                <label for="img_path">Inserisci un'immagine di copertina</label>
                <input type="file" class="form-control-file" id="img_path" name="img_path">
            </div>

            <div class="form-group">
                <label for="cooking_time">Tempo di preparazione</label>
                <input type="text" class="form-control" id="cooking_time" name="cooking_time" value="{{ old('cooking_time') }}">
            </div>

            <div class="form-group">
                <label for="people">Numero di porzioni</label>
                <input type="number" class="form-control" id="people" name="people" value="{{ old('people') }}">
            </div>

            <button type="submit" class="btn btn-primary my_btn my-4">CREA</button>
        </form>
        {{-- End Create form --}}
    </div>
@endsection
