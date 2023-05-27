@extends('layouts/main')
@section('container')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">
    <section class="product">
    <div class="top-button"><a class="buttons" href="/shop">Back to Shop</a>
        </div>
        <div class="container">
            <h3 class="title">Categories</h3>

            <div class="product-container">

              @foreach ($categories as $category)
                <ul>
                    <li>
                        <h3><a href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
                    </li>
                </ul>
              @endforeach

            </div>
        </div>
    </section>
@endsection