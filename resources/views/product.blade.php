@extends('layouts.product-layout')

@section('product-details')
<div class="columns dk-product">
  <div class="column auto">
    <img src="https://dkstatics-public.digikala.com/digikala-products/176799.jpg?x-oss-process=image/resize,m_lfit,h_600,w_600/quality,q_80" >
  </div>
  <div class="column is-half " >
      <div class="">
        {{$product->name}}
      </div>
    <div class="is-size-7">
      {{$product->details}}
    </div>
    <hr>
    <div class="has-text-danger">
      {{$product->presentPrice()}} تومان
    </div>
    <div class="">
      <button type="button" name="button" class="button is-dk-green"><i class="fas fa-shopping-cart fa-fw"></i> افزودن به سبد خرید</button>
    </div>
  </div>
  <div class="column auto">
    <ul>
    <li>رابط: USB 1.1 USB 2.0</li>
    <li>ظرفیت: 8 گیگابایت</li>
    <li>مقاومت در برابر آب: خیر</li>
    <li>مقاومت در برابر ضربه: خیر </li>
    <li>مقاومت در برابر شوک و لرزش: خیر</li>
    <li>ضد خش: خیر </li>
    </ul>
</div>
</div>

@endsection
