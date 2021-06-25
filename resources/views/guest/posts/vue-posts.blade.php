@extends('layouts.app')

@section('page_title', 'Chiamata API')

{{-- Collego Vue ed Axios --}}
@section('header-script')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection


@section('content')

    <div id="root">
        <h1>@{{ title }}</h1>

        <div v-for="post in posts">
            <h2>@{{ post['title'] }}</h2>

            <div v-if="post.category" class="">
                <b>Category:</b>
                <span>
                    @{{ post.category }}
                </span>
            </div>

            <div v-if="post.tags.length > 0" class="">
                <b>Tags:</b>
                <span v-for="tag in post.tags">
                        @{{ tag['name'] }}
                </span>
            </div>

            <h5>@{{ post['content'] }}</h5>
        </div>
    </div>

@endsection

{{-- Collego il file js --}}
@section('footer-script')
    <script src="{{ asset('js/vue-posts.js') }}" charset="utf-8"></script>
@endsection
