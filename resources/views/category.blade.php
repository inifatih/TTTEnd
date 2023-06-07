@extends('layouts/main')
@section('container')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">
    <section class="product">    
    <div class="top-button"><a class="buttons" href="/posts">Back to Shop</a>  
        <div class="container">
            <h3 class="title">Product : {{ $category }}</h3>

            <div class="product-container">

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

            </div>
        </div>
    </section>
@endsection