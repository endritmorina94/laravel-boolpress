@extends('layouts.cms-layout')

@section('page_title', "Crea un nuovo post")

@section('guest-view')
    @include('admin.posts.create2')
@endsection
