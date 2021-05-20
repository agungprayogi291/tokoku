@extends('layouts.app')

@section('content-main')
<div class="container p-5"> 
  <div class="row ">
      <div class=" container col-md-8 order-md-1 ml-5 bg-success p-3 shadow">
        <h4 class="mb-3">Billing address</h4>
        <form class="needs-validation" action="/checkout" method="post">
          @csrf
          <div class="row">
            <div class="col-md-12 mb-3">
              <label for="firstName" >name</label>
              <h3 name="nama" class="ml-5 bg-white">{{auth()->user()->name}}</h3>
              
            </div>
        
          </div>
          <div class="mb-3">
            <label for="email">Email</label>
            <h3 class="ml-5 bg-white">{{auth()->user()->email}}</h3>
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="mb-3">
            <label for="address">Address</label>
            <input type="text" class="form-control " id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="mb-3">
            <label for="address2">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
          </div>

          <h4 class="mb-3">Payment</h4>
          <div class="d-block my-3">
            <div class="custom-control custom-radio">
              <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
              <label class="custom-control-label" for="credit">Credit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="debit">Debit card</label>
            </div>
            <div class="custom-control custom-radio">
              <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required>
              <label class="custom-control-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label for="cc-name">Name on card</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required>
              <small class="text-muted">Full name as displayed on card</small>
              <div class="invalid-feedback">
                Name on card is required
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label for="cc-number" >Credit card number</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required>
              <div class="invalid-feedback">
                Credit card number is required
              </div>
            </div>
          </div>
          <hr class="mb-4">
          @foreach($produks as $produk)
          <button class="btn btn-primary btn-lg btn-block" name="id"  type="submit" value="{{$produk->id}}">Continue to checkout</button>
          @endforeach
        </form>
      </div>
    </div>
</div>
@endsection