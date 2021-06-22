@extends('layouts.app')

@section('page_title', "Home")

@section('content')
    <h1>Ciao sono la home admin</h1>

    <h2>Scegli i post per categoria</h2>

    <div class="mt-5">
        @foreach ($categories as $category)
            <a href="{{ route('admin.category-page', ['slug' => $category->slug])}}">
                <h3>{{ $category->name }}</h3>
            </a>
        @endforeach
    </div>


@endsection
