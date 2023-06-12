@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="{{asset('css/post.css')}}">
<link href="{{ asset('boots/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="{{ asset('boots/js/bootstrap.bundle.min.js') }}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <section>
    <div class="back-button"><a class="buttons" href="/posts"><i class="fa fa-arrow-left"></i> Shop</a></div>
        <main class="container">
            <div class="left-column">
                <img class="img-fluid" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}">
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