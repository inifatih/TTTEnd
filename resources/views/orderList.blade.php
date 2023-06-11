@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="{{asset('css/order.css')}}">
@foreach($orders as $order)
<section id="account" class="account-section">
  <div class="wrapper">
    <div class="title">Account</div>
    <nav class="nav-text">
      <div class="profileBar">
        <button><a href="profile">Profile</a></button>
      </div>
      <div class="orderBar">
        <button><a href="order">Orders</a></button>
      </div>
    </nav>
          <div class="orderHistory">
            <span class="id">Order ID:</span>
            <span class="info">{{ $order->id }}</span>
          </div>
          <div class="orderHistory">
            <span class="id">Name:</span>
            <span class="info">{{ $order->order_name }}</span>
          </div>
          <div class="orderHistory">
            <span class="id">Phone Number:</span>
            <span class="info">{{ $order->order_phone }}</span>
          </div>
          <div class="orderHistory">
            <span class="id">Email:</span>
            <span class="info">{{ $order->order_email }}</span>
          </div>
          <div class="orderHistory">
            <span class="id">Address:</span>
            <span class="info">{{ $order->order_address }}</span>
          </div>
          <div class="orderHistory">
            <span class="id">Payment:</span>
            <span class="info">{{ $order->order_payment }}</span>
          </div>
          <div class="orderHistory">
            <span class="date">Order Date</span>
            <span class="info">{{ $order->order_placed }}</span>
          </div>
          <div class="orderHistory">
            <span class="status">Order Status:</span>
            <span class="info">{{ $order->order_status }}</span>
          </div>
          <div>
            
          </div>
        </div>
      </section>
@endforeach
        <!-- <script>
            const addAddressButton = document.getElementById("addAddressButton");
            const addressForm = document.getElementById("addressForm");
            const field = document.querySelector(".field");
            const accountSection = document.querySelector(".account-section");
            const wrapper = document.querySelector(".wrapper");

            addAddressButton.addEventListener("click", () => {
            addressForm.classList.remove("hidden");
            field.classList.add("hidden");
            accountSection.style.height = `${wrapper.offsetHeight}px`;
            });

            addressForm.addEventListener("submit", (e) => {
            e.preventDefault();
            addressForm.classList.add("hidden");
            field.classList.remove("hidden");
            accountSection.style.height = "auto";
            // tambahkan kode lainnya untuk mengirim data form ke server
            });

        </script> -->
@endsection