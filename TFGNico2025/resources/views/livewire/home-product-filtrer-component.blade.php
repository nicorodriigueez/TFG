<div>
        <!-- product filter -->
      <section id="product">
        <div class="container">
          <div class="row">
            <!-- title -->
            <div class="col-12 text-center mb-4">
              <h5 class="mb-2">Discover Your Dreames Sneaker</h5>
              <h2 class="fw-bold">From Lot of Diferent Vendors and Categories</h2>
            </div>

            <!-- filter buttons -->
            <div class="col-12 mb-5">
              <div class="flex flex-wrap align-items-center justify-content-center mx-auto gap-3">


              <button wire:click="filterByCategory(null)" class="btn btn-md hot ">All Products</button>
                @foreach ( $categories as $category )
                  <button wire:click="filterByCategory({{$category->id}})" class="btn btn-md {{ $selectedCategory ===
                    $category -> id ? 'hot':''}}">{{$category->category_name}}</button>
                @endforeach
              </div>
            </div>

            @forelse ($products as $product)
              
            

            <!-- products -->
            <div class="col-md-6 col-lg-4">
              <div class="card-md">
                <!-- image -->
                <div class="product-img">
                  <img src="{{asset('storage/'.$product->images->first()?->img_path ?? 'placeholder.png')}}" alt="">
                  <img class="glow" src="{{asset('home_asset/img/glow.png')}}" alt="">
                </div>

                <h4 class="fw-semibold mb-2">{{$product->product_name}}</h4>
                <h4 class="fw-light mb-4">${{number_format($product->regular_price,2)}}</h4>

                <!-- add to cart -->
                <div class="add-cart-wrap" x-data="{ quantity: 1 }">
                  <input type="number" min="1" max="{{$product->stock_quantity}}" x-model="quantity" value="1">
                  <a class="btn-md shadow-none" href="javascript:void(0)" @click = "$dispatch('addToCartFromAnywhere',
                    { productId: {{$product->id}}, quantity: quantity })">Add to Cart</a>
                </div>

                <!-- cta -->
                <div class="card-md-cta">
                  <a href="#!">
                    <i class="fas fa-heart active"></i>
                  </a>

                  <a href="#!">
                    <i class="fa-solid fa-code-compare active"></i>
                  </a>
                </div>
              </div>
            </div>

            @empty

            <div class="col-12 text-center">
              <h5> No product found for this category </h5>
            </div>

            @endforelse

            
          </div>
        </div>
      </section>
</div>
