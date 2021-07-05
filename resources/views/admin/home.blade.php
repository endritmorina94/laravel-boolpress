@extends('layouts.cms-layout')

@section('page_title', "Boolpress Home")

@section('guest-view')
    @include('guest.home')
@endsection

{{-- @section('content')
    <div class="container">
        <h1>Ciao sono la home admin</h1>

        <h2>Scegli i post per categoria</h2>

        <div class="mt-3">
            @foreach ($categories as $category)
                <a href="{{ route('admin.category-page', ['slug' => $category->slug])}}">
                    <h3>{{ $category->name }}</h3>
                </a>
            @endforeach
        </div>
    </div>
@endsection --}}
