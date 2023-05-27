@extends('layouts/main')
@section('container')
<link rel="stylesheet" href="{{asset('css/posts.css')}}">
    <section class="product">
    <div class="back-button"><a href="/shop">Back to Shop</a>
        </div>
        <div class="container">
            <h3 class="title">Section</h3>

            <div class="product-container">

              @foreach ($sections as $section)
                <ul>
                    <li>
                        <h3><a href="/sections/{{ $section->slug }}">{{ $section->name }}</a></h3>
                    </li>
                </ul>
              @endforeach

            </div>
        </div>
    </section>
@endsection