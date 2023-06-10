@extends('layouts/main')
@section('container')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">
    <section class="product">    
    <div class="top-button"><a class="buttons" href="/sections"><i class="fa fa-arrow-left"></i> Back to Shop</a>
        <div class="container">
            <h3 class="title">Section : {{ $section }}</h3>

            <div class="product-container">

              @foreach ($posts as $post)
              <a href="/posts/{{ $post->slug }}" class="product-card">
                <div class="product" data-name="p-1">
                  <img src="img/jjjjound-1.png" alt="">
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