@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
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
      
          <div class="profilAkun">
            <span class="nama">Name</span>
            <span class="textDataDiri">{{ auth()->user()->name }}</span>
          </div>
          <div class="profilAkun">
            <span class="email">Email</span>
            <span class="textDataDiri">{{ auth()->user()->email }}</span>
          </div>
      
          <form action="#" id="addressForm" class="hidden">
            <div class="formField">
              <label for="address">Address</label>
              <input type="text" id="address" name="address" required>
            </div>
            <div class="formField">
              <label for="city">Recipient's Name</label>
              <input type="text" id="recipient" name="recipient" required>
            </div>
            <div class="formField">
              <label for="state">Phone Number</label>
              <input type="text" id="noTelp" name="noTelp" required>
            </div>
            <div class="formField">
              <label for="postalCode">Postal Code</label>
              <input type="text" id="postalCode" name="postalCode" required>
            </div>
            <div class="formField">
                <input type="submit" value="Create New Address">
              </div>
            </form>
            <div class="field">
              <input type="submit" value="Add New Address" id="addAddressButton">
            </div>
            <div class="logoutbar">
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit">
                    Logout
                  </button>
                </form>
            </div>
          </div>
        </section>
      
        <script>
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

        </script>
@endsection