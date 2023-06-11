@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="{{asset('css/post.css')}}">
    <section>
    <div class="back-button"><a class="buttons" href="/posts"><i class="fa fa-arrow-left"></i> Back to Shop</a></div>
        <main class="container">
            <div class="left-column">
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
            </div>
            
            <div class="right-column">
                <div class="product-description">
                    <h3>{{ $post->section->name }}</h3>
                    <h1 class="mb-5">{{ $post->title }}</h1>
                    <h4><a class="slug-button" href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h4>
                    {{ $post->desc }}
                </div>
                <div class="product-configuration">
                    <div class="product-price">
                        <span>IDR {{ $post->price }}</span>
                        <form action="{{ route('add_to_cart', $post->id) }}" method="get">
                            @csrf
                            <button class="addtocart-btn" class="text-decoration-none" type="submit">
                                Add to cart
                            </button>
                        </form>
                    </div>
                </div>
        </main>
    </section>
@endsection