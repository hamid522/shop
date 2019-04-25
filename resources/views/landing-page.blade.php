
@extends('layouts.landing-layout')

@section('products')
  <div class="columns is-multiline is-mobile ">
    @foreach ($products as $product)
          @include('layouts.product') 
    @endforeach
  </div>



@endsection
