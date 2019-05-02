@extends('layouts.landing-layout')

@section('products')
  <h1 class="has-text-grey has-text-weight-bold is-size-3">محصولات</h1>
  <hr>
  <div class="columns is-multiline is-mobile ">
    @foreach ($products as $product)
          @include('layouts.product')
    @endforeach
  </div>



@endsection
