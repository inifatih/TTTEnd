@extends('dashboard.layouts.main')

@section('container')
<main class="container">

<a href="/dashboard/contents" class="btn btn-success"><span data-feather="arrow-left"></span>Back to all my content</a>
<a href="/dashboard/contents/{{ $content->id }}/edit" class="btn btn-warning"><span data-feather="edit"></span>Edit</a>
<form action="/dashboard/contents/{{ $content->id }}" method="post" class="d-inline">
    @method('delete')
    @csrf
    <button class="btn btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span>Delete</button>
</form>

<div class="left-column mt-3 mb-3" style="max-height: 350px; overflow:hidden">
    <img src="{{ asset('storage/' . $content->image) }}" alt="{{ $content->slug }}">
</div>
<div class="right-column">
    <div class="product-description">
        <h1 class="mb-5">{{ $content->title }}</h1>
        <p><a class="slug-button" href="/categories/{{ $content->slug }}">{{ $content->slug }}</a></p>
        <p>{{ $content->desc }}</p>
    </div>
</main>
@endsection