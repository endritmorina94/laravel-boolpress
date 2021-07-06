@extends('layouts.cms-layout')

@section('page_title', "Blog")

@section('guest-view')
    @include('guest.posts.index')
@endsection
