@extends('layouts.app')

@section('page_title', 'Chiamata API')

{{-- Collego Vue ed Axios --}}
@section('header-script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection


@section('content')
    <div class="container">
        <div id="root">
            <h1>@{{ title }}</h1>
        </div>
    </div>
@endsection

{{-- Collego il file js --}}
@section('footer-script')
    <script src="{{ asset('js/vue-posts.js') }}" charset="utf-8"></script>
@endsection
