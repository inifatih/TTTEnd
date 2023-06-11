@extends('layouts.main')
@section('container')
<link href="{{ asset('boots/css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="{{ asset('boots/js/bootstrap.bundle.min.js') }}" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<style>
.top-button{
    margin-top: 100px;
    margin-left: 70px;
    margin-bottom: 10px;
    font-weight: 700;
}

.buttons{
    text-decoration: none;
    color: #000;
}

@media only screen and (max-width: 1200px){
.top-button{
    margin-left:0;
}
}
</style>
<section>
<form action="/makeOrder" method="post">
    @csrf
    <div class="top-button">
        <a class="buttons" href="/posts" > <i class="fa fa-arrow-left"></i> Back to Shop</a>
    </div>
    <div class="container py-5 mt-5 bg-transparent">
        <h3 class="text-center">Cart</h3>
    </div>
    <div class="container h-100 mt-3 bg-transparent">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%"><h5><strong>Name</strong></h5></th>
                <th style="width:10%"><h5><strong>Price</strong></h5></th>
                <th style="width:8%"><h5><strong>Quantity</strong></h5></th>
                <th style="width:22%" class="text-center"><h5><strong>Name</strong></h5></th>
                <th style="width:10%"></th>
            </tr>
        </thead>
        <tbody>
            @php $total = 0 @endphp
            @if(session('cart'))
                @foreach(session('cart') as $id => $details)
                    @php $total += $details['price'] * $details['quantity'] @endphp
                    <tr data-id="{{ $id }}">
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="{{ asset('storage')}}/{{ $details['image']  }}" class="img-fluid"></div>
                                <div class="col-sm-9">
                                    <h4 class="nomargin">{{ $details['title'] }}</h4>
                                </div>
                            </div>
                        </td>
                        <td data-th="Price">IDR {{ $details['price'] }}</td>
                        <td data-th="Quantity">
                            <input type="number" value="{{ $details['quantity'] }}" class="form-control quantity cart_update" min="1" />
                        </td>
                        <td data-th="Subtotal" class="text-center">IDR {{ $details['price'] * $details['quantity'] }}</td>
                        <td class="actions" data-th="">
                            <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                        </td>
                    </tr>
                @endforeach
            @endif
        </tbody>
        <tfoot>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td class="text-center"><h5><strong>Total IDR {{ $total }}</strong></h5></td>
                <td></td>
            </tr>
        </tfoot>
        </table>
    </div>
    <div class="container py-5 bg-transparent">
    <div class="order-md-1">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" novalidate>
            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="firstName">Full name</label>
                <input type="text" class="form-control" id="name" placeholder="" value="{{ old('name')}}" required name="name">
                <div class="invalid-feedback">
                Valid first name is required.
                </div>
            </div>
            <div class="col-md-6 mb-3">
          <label for="phone">Phone number</label>
          <div class="input-group">
            <input type="text" class="form-control" id="phone" placeholder="08xxxxxxxxxx" value="{{ old('phone')}}" required name="phone">
            <div class="invalid-feedback" style="width: 100%;">
              Valid phone number is required.
            </div>
          </div>
        </div>

        <div class="col-md-6 mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input type="email" class="form-control" id="email" placeholder="you@example.com" value="{{ old('email')}}" name="email">
          <div class="invalid-feedback">
            Please enter a valid email address for shipping updates.
          </div>
        </div>

        <div class="col-md-6 mb-3">
          <label for="address">Address</label>
          <input type="text" class="form-control" id="address" placeholder="Jl. Contoh no.123" value="{{ old('address')}}" required name="address">
          <div class="invalid-feedback">
            Please enter your shipping address.
          </div>
        </div>

        <h4 class="col-md-6 mb-3">Payment</h4>
            <select class="form-select" name="paymentMethod" id="paymentMethod" required>
                    <option value="debit" selected>Debit</option>
                    <option value="virtualccount" selected>Virtual Account</option>
                    <option value="gopay" selected>Gopay</option>
            </select>
        </div>
        
        <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bag-check" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M10.854 8.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L7.5 10.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                    <path d="M8 1a2.5 2.5 0 0 1 2.5 2.5V4h-5v-.5A2.5 2.5 0 0 1 8 1zm3.5 3v-.5a3.5 3.5 0 1 0-7 0V4H1v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V4h-3.5zM2 5h12v9a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V5z"/>
                </svg>
                Order
            </button>
        
    </div>
    </div>
    </div>
  </div>
  </form>
</section>   
<script type="text/javascript">
    $(".cart_update").change(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        $.ajax({
            url: '{{ route("update_cart") }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".quantity").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
   
    $(".cart_remove").click(function (e) {
        e.preventDefault();
   
        var ele = $(this);
   
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route("remove_from_cart") }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
</script>
@endsection