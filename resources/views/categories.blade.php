@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">
    <section class="product">
    <div class="top-button"><a class="buttons" href="/posts"><i class="fa fa-arrow-left"></i> Shop</a>
        </div>
        <div class="container">
            <h3 class="title">Categories</h3>
            <div class="product-container">
              @foreach ($categories as $category)
                <ul>
                    <li>
                        <h3><a class="text-decoration-none" href="/categories/{{ $category->slug }}">{{ $category->name }}</a></h3>
                    </li>
                </ul>
              @endforeach

            </div>
        </div>
    </section>
@endsection