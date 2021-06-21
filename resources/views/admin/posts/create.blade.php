@extends('layouts.app')

@section('content')
    <h1>Crea un nuovo post</h1>

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
    <form action="{{ route('admin.posts.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="form-group">
            <label for="title">Titolo</label>
            {{-- La funzione old() autocompilerà l'input nel caso la richiesta non vada subito a buon fine --}}
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="form-group">
            <label for="content">Contenuto</label>
            <textarea class="form-control" id="content" name="content" rows="8" cols="80">{{ old('content') }}</textarea>
        </div>

        <button type="submit" class="btn btn-primary">Crea</button>
    </form>
    {{-- End Create form --}}
@endsection
