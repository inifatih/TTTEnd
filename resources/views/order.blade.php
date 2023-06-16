@extends('layouts.main')
@section('container')
<link href="{{ asset('boots/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="{{ asset('boots/js/bootstrap.bundle.min.js') }}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<style>
.container-table{
  overflow-x: auto;
}
@media only screen and (max-width: 1040px){
.top-button{
    margin-left:0;
}
}
</style>
<section class="container mt-5 bg-transparent">
    <div class="container py-5 bg-transparent">
      <div class="text-center py-5">
        <strong><h3>Order History</h3></strong>
      </div>
      <div class="container-table">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th><strong>Order ID</strong></th>
                    <th class="text-center"><strong>Products</strong></th>
                    <th class="text-center"><strong>Billing Address</strong></th>
                    <th><strong>Order Date</strong></th>
                    <th><strong>Order Status</strong></th>
                </tr>
            </thead>
            <tbody>
            @foreach($orders as $order)
              <tr>
                <td data-th="ID">
                  {{ $order->id }}
                </td>

                <td data-th="product">
                  @foreach($order->orderDetail()->with('post')->get() as $orderDetail)
                  <ul>
                    <li>
                      <img src="{{ asset('storage')}}/{{ $orderDetail->post->image  }}" class="img-thumbnail">
                      <style>
                        .img-thumbnail {
                          max-width: 200px;
                        }
                      </style>
                    </li>
                    <li>
                      <div>{{ $orderDetail->post->title }}</div>
                      <span class="text-muted">Quantity: ({{ $orderDetail->quantity }})</span>
                    </li>
                  </ul>
                  @endforeach
                </td>

                <td data-th="name">
                  <ul>
                    <li>
                      Name: {{ $order->order_name }}
                    </li>
                    <li>
                      Phone: {{ $order->order_phone }}
                    </li>
                    <li>
                      Email: {{ $order->order_email }}
                    </li>
                    <li>
                    Payment: {{ $order->order_payment }}
                    </li>
                    <li>
                      Address: {{ $order->order_address }}
                    </li>
                  </ul>
                </td>
                <td data-th="Order Date">
                {{ $order->order_placed }}
                </td>

                <td data-th="Order Status">
                {{ $order->order_status }}
                </td>
              </tr>
            @endforeach
            </tbody>
        </table>
      </div>
    
    </div>
</section>
@endsection
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
