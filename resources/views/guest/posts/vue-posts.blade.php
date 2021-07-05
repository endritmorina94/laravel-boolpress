@extends('layouts.app')

@section('page_title', 'API Posts')

{{-- Collego Vue ed Axios --}}
@section('header-script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue"></script>
@endsection


@section('content')

    <div id="root">
        <div class="container">
            <div class="section-title">
                <h2>@{{ title }}</h2>
            </div>
            <div class="latest-posts index-blade d-flex justify-content-between">
                <div v-for="post in posts" class="post">

                    <div v-if="" class="image-container">
                        <img :src="'storage/' + post['img_path']" alt="">
                    </div>
                    <div class="recipe-content">
                        <div class="recipe-description">
                            <a :href="'/blog/' + post['slug']"><h5>@{{ post['title'] }}</h5></a>
                            <p>@{{ post['content'] }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- Collego il file js --}}
@section('footer-script')
    <script src="{{ asset('js/vue-posts.js') }}" charset="utf-8"></script>
@endsection
