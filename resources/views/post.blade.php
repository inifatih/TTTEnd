@extends('layouts/main')
@section('container')
<link rel="stylesheet" href="{{asset('css/post.css')}}">
    <section>
    <div class="back-button"><a class="buttons" href="/shop">Back to Shop</a>
        </div>
        <main class="container">

            <div class="left-column">
                <img data-image="black" src="img/jjjjound-1.png" alt="">
                <img data-image="blue" src="img/jjjjound-2.png" alt="">
                <img data-image="red" class="active" src="img/jjjjound-3.jpeg" alt="">
            </div>
            
            <div class="right-column">
                <div class="product-description">
                    <h3>{{ $post->section->name }}</h3>
                    <h1 class="mb-5">{{ $post->title }}</h1>
                    <p><a class="slug-button" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
                    <p>{{ $post->desc }}</p>
                </div>
                <div class="product-configuration">
                    <div class="product-price">
                        <span>Rp {{ $post->price }}</span>
                        <button href="#" class="addtocart-btn">Add to cart</button>
                    </div>
                </div>
        </main>
    </section>
@endsection