@extends('dashboard.layouts.main')

@section('container')
<main class="container">

<a href="/dashboard/posts" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all my posts</a>
<a href="/dashboard/posts/{{ $post->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
<form action="/dashboard/posts/{{ $post->slug }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
</form>

<div class="left-column mt-3 mb-3" style="max-height: 350px; overflow:hidden">
    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
</div>
<div class="right-column">
    <div class="product-description">
        <h3>{{ $post->section->name }}</h3>
        <h1 class="mb-5">{{ $post->title }}</h1>
        <p><a class="slug-button" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        <body>{{ $post->desc }}</body>
    </div>
    <div class="product-configuration">
        <div class="product-price">
            <span>IDR {{ $post->price }}</span>
        </div>
    </div>
</main>
@endsection