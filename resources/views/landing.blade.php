@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="{{asset('css/landing.css')}}">
<section class="home">
      <!-- <img class="img-slide active" src="img\pexels-women.jpg" ></img>
      <img class="img-slide" src="img/pexels-summer.jpg" ></img>
      <img class="img-slide" src="img/pexels-outerwear.jpg" ></img>
      <img class="img-slide" src="img/pexels-men.jpg" ></img>
      <img class="img-slide" src="img/pexels-streetwear.jpg" ></img> -->
      @foreach ($contents as $key => $content)
        @if($key === 0)
          <img class="img-slide active" src="{{ asset('storage/' . $content->image) }}" alt="{{ $content->slug }}"></img>
          <div class="content active">
          <h1>{{ $content->title }}<br></h1>
          <p>{{ $content->desc }}</p>
          <a href="/categories/{{ $content->slug }}">View More</a>
        </div>
        @else
        <img class="img-slide" src="{{ asset('storage/' . $content->image) }}" alt="{{ $content->slug }}"></img>
        <div class="content">
          <h1>{{ $content->title }}<br></h1>
          <p>{{ $content->desc }}</p>
          <a href="/categories/{{ $content->slug }}">View More</a>
        </div>
        @endif
      @endforeach
      <div class="media-icons">
        <a href="https://www.facebook.com/"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
      </div>
      <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
      </div>
    </section>
    
    <script type="text/javascript">
    //Javacript for img slider navigation
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".img-slide");
    const contents = document.querySelectorAll(".content");

    var sliderNav = function(manual){
      btns.forEach((btn) => {
        btn.classList.remove("active");
      });

      slides.forEach((slide) => {
        slide.classList.remove("active");
      });

      contents.forEach((content) => {
        content.classList.remove("active");
      });

      btns[manual].classList.add("active");
      slides[manual].classList.add("active");
      contents[manual].classList.add("active");
    }

    btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
      });
    });
    </script>
@endsection
