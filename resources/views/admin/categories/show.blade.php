@extends('admin.layouts.base')

@section('contents')

    <h1>{{ $category->name }}</h1>
    <p>{{ $category->description }}</p>

    <h2>Posts in this category</h2>
    <ul>
        @foreach ($category->posts as $post)
            <li><a href="{{ route('admin.posts.show', ['post' => $post]) }}">{{ $post->title }}</a></li>
        @endforeach
    </ul>

@endsection