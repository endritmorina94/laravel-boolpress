@extends('layouts.app')

@section('content')
    <section class="parallax container-fluid">
        <div class="container">
            <div class="section-title">
                <h2>Categorie</h2>
            </div>

            <div class="categories">
                @foreach ($categories as $category)
                    <a href="{{ route('category-page', ['slug' => $category->slug])}}">
                        <div class="category">
                            <h3>{{ $category->name }}</h3>
                            <img src="{{ asset('storage/' . $category->img_path) }}" alt="{{ $category->name }}">
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>
@endsection
