@extends('layouts/main')
@section('container')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">
    <section class="product">    
    <div class="top-button"><a class="buttons" href="/categories"><i class="fa fa-arrow-left"></i> Categories</a>  
        <div class="container">
            <h3 class="title">Product : {{ $category }}</h3>

            <div class="product-container">

              @foreach ($posts as $post)
              <a href="/posts/{{ $post->slug }}" class="product-card">
                <div class="product" data-name="p-1">
                  <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
                  <h3>{{ $post->title }}</h3>
                  <div class="price">
                    IDR {{ $post->price }}
                  </div>
                </div>
              </a>
              @endforeach

            </div>
        </div>
    </section>
@endsection