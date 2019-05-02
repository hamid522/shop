<div class="column is-one-quarter">
  <a href='{{url("/products/$product->slug")}}'>
    <div class="card dk-product-card">
    <div class="card-image">
      <figure class="image is-4by3">
        <img src="https://ssl-product-images.www8-hp.com/digmedialib/prodimg/lowres/c06017872.png" alt="Placeholder image">
      </figure>
    </div>
    <div class="card-content dk-card-content">
      <div class="media">
        <div class="media-content">
          <p class="title is-4 dk-card-product-title has-text-grey">{{$product->name}}</p>
          <p class="subtitle is-6 dk-card-product-title has-text-danger ">{{$product->presentPrice()}} تومان</p>
        </div>
      </div>
    </div>
  </div>
</a>
</div>
