<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TTTEnd | {{ $title }}</title>
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
    <script src="{{ asset('js/landing.js') }}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
  </head>
  <body>

    <header>
      <a href="/" class="brand">TTTend</a>
      <div class="menu-btn">
        <style>
          @media (max-width: 1040px){
            .menu-btn{
            background: url("{{ asset('img/fries-menu-icon.svg') }}") no-repeat;
            color: #000;
            border-radius: 10%;
            background-size: 30px;
            background-position: center;
            width: 40px;
            height: 40px;
            cursor: pointer;
            transition: 0.3s ease;
          }
          .menu-btn.active{
            z-index: 999;
            background: url("{{ asset('img/close-icon.png') }}")no-repeat;
            background-size: 25px;
            background-position: center;
            transition: 0.3s ease;
          }
          }
        </style>
      </div>
      <div class="navigation">
        <div class="navigation-items">
          <input class="search" type="text" name="search" placeholder="Search...">
          <a href="/posts" >SHOP</a>
          <a href="/help" >HELP</a>
          @auth
            <a href="/profile">{{ auth()->user()->username }}</a>
          @else
            <a href="/login" >LOGIN</a>
          @endauth
          <a class="cart-btn" href="#">
            <i class="fa fa-shopping-bag" ></i>
            <span>(2)</span>
          </a>
          </div>
        </div>
    </header>
    <div class="cart-sidebar">
        <span class="close-icon"><img src="{{ asset('img/close-icon.svg') }}" alt=""></span>
      <div class="cart-title">
        <h4>CART (2)</h4>
      </div>
      <div class="cart-body">

        <div class="cart-item">
          <div class="img">
            <img src="img/jjjjound-1.png" alt="">
          </div>
          <div class="text">
            <span>1x</span>
            <h5>T-Shirt</h5>
            <h5 class="color-primary">$148</h5>
          </div>
        </div>

        <div class="cart-item">
          <div class="img">
            <img src="img/jjjjound-1.png" alt="">
          </div>
          <div class="text">
            <span>1x</span>
            <h5>T-Shirt</h5>
            <h5 class="color-primary">$148</h5>
          </div>
        </div>

        <a class="btn" href="#">CHECKOUT</a>
      </div>
    </div>
    
    @yield('container')


    
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col">
            <h4>TTTend</h4>
            <a>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</a>
          </div>
          <div class="footer-col">
            <h4>Help</h4>
            <ul>
              <li><a href="help">FAQ</a></li>
              <li><a href="help">Return Policy</a></li>
              <li><a href="help">Privacy Policy</a></li>
              <li><a href="help">Accessibility</a></li>
              <li><a href="help">Contact Us</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Account</h4>
            <ul>
              <li><a href="profile">Profile</a></li>
              <li><a href="order">Orders</a></li>
              <li><a href="login">Logout</a></li>
            </ul>
          </div>
          <div class="footer-col">
            <h4>Follow Us</h4>
            <div class="social-links">
              <a href="https://web.facebook.com/"><i class="fab fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
              <a href="https://twitter.com/"><i class="fab fa-twitter"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript">
    //Javacript for responsive navigation menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
      menuBtn.classList.toggle("active");
      navigation.classList.toggle("active");
    });

    //JS for CART SIDEBAR   
    var cart_btn = document.querySelector(".cart-btn");
    var cart_sidebar = document.querySelector(".cart-sidebar");
    var close_icon = document.querySelector(".close-icon");

    cart_btn.onclick = function(){
      cart_sidebar.style.right = "0px";
    }

    close_icon.onclick = function(){
      cart_sidebar.style.right = "-400px";
    }
    </script>
  </body>
</html>