@extends('layouts.cms-layout')

@section('page_title', $post->title)

@section('guest-view')
    @include('admin.posts.show2')
@endsection
