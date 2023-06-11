@extends('layouts.main')
@section('container')
<link rel="stylesheet" href="{{asset('css/profile.css')}}">
<link href="{{ asset('boots/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="{{ asset('boots/js/bootstrap.bundle.min.js') }}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<section id="account" class="account-section">
        <div class="wrapper">
          <div class="title mt-3 mb-3">Profile Card</div>
          <div class="profilAkun">
            <span class="nama">Name</span>
            <span class="textDataDiri">{{ auth()->user()->name }}</span>
          </div>
          <div class="profilAkun">
            <span class="email">Email</span>
            <span class="textDataDiri">{{ auth()->user()->email }}</span>
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