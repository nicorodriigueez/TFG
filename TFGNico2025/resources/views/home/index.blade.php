@extends('layouts.user')
@section('home')
      <!-- hero -->
      <section id="hero" >
        <div class="container" >
          <div class="row align-items-center" >
            <div class="col-lg-7" >
              <div class="card-lg mb-4 mb-lg-0" style="background: linear-gradient(to right, #ef4444 0%, #ef4444 75%, #850707 100%);">
                <h2>{{$homepagesetting->discount_percent}}%</h2>
                <h4>{{$homepagesetting->discount_heading}}</h4>
                <p>{{$homepagesetting->discount_subheading}}</p>
<<div class="float-item mt-3 d-block d-md-inline-block">
  <img
    src="{{ asset('storage/' . $homepagesetting->discountedProduct->images->first()->img_path) }}"
    alt=""
    class="img-fluid"
    style="width: 300px; max-width: 100%; height: auto; display: block; margin: 20px auto 0 auto;">
</div>
                </div>
            </div>

            <div class="col-lg-5">
              <div class="card-sm purple mb-3" style="background: linear-gradient(to right, #ef4444 0%, #ef4444 55%, #000000 100%);">
                <!-- product image -->
                <div class="product">
                  <img src="{{ asset('storage/' . $homepagesetting->featuredProduct1->images->first()->img_path) }}" alt="">
                </div> 

                <div >
                  <h2>{{$homepagesetting->featuredProduct1->product_name}}</h2>
                  <p>${{$homepagesetting->featuredProduct1->regular_price}}</p>
                </div>
              </div>

              <div class="card-sm sky" style="background: linear-gradient(to right, #030101 0%, #630404 50%, #ef4444 100%);">
                <div>
                  <h2>{{$homepagesetting->featuredProduct2->product_name}}</h2>
                  <p>${{$homepagesetting->featuredProduct2->regular_price}}</p>
                </div>

                <!-- product image -->
                <div class="product">
                  <img src="{{ asset('storage/' . $homepagesetting->featuredProduct2->images->first()->img_path) }}" alt="">
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    @livewire('HomeProductFiltrerComponent')
@endsection