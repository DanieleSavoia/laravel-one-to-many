@extends('admin.layouts.base')

@section('contents')

    <h1>{{ $post->title }}</h1>
    <h2>Category: {{ $post->category->name }}</h2>
    <img src="{{ $post->url_image }}" alt="{{ $post->title }}">
    <p>{{ $post->content }}</p>

@endsection