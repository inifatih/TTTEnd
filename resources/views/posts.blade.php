@extends('layouts/main')
@section('container')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">
    <section class="product">
    <div class="top-button">
      <ul>
        <li><a class="buttons" href="/">Back to Home</a></li>
        <li><a class="buttons" href="/categories">Categories</a></li>
        <li><a class="buttons" href="/sections">Section</a></li>
      </ul>
    </div>

      <div class="container">
            <h3 class="title">Product</h3>


            <div class="product-container">
              @if ($posts->count())
                @foreach ($posts as $post)
                <a href="/posts/{{ $post->slug }}" class="product-card">
                  <div class="product" data-name="p-1">
                    <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                    <h3>{{ $post->title }}</h3>
                    <div class="price">
                      Rp {{ $post->price }}
                    </div>
                  </div>
                </a>
                @endforeach
              @else
                <p>No post found</p>
              @endif

            </div>
      </div>
    </section>
@endsection