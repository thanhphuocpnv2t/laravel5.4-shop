@extends('frontend.layouts.main')
@section('content')
<!-- Slider -->
@include('frontend.elements.slider-section');
<!-- end Slider -->
<!-- offer banner section -->
@include('frontend.elements.offer-banner-section');
<!-- end banner section -->
<!-- service-section ->
@include('frontend.elements.service-section');
<!-- end  service-section -->
<!-- main container -->
<section class="main-container col1-layout home-content-container">
    <div class="container">
        <div class="std">
            <div class="best-seller-pro wow bounceInUp animated">
                <div class="slider-items-products">
                    <div class="new_title center">
                        <h2>Best Seller</h2>
                    </div>
                    <div id="best-seller-slider" class="product-flexslider hidden-buttons">
                        <div class="slider-items slider-width-col4">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="product-block">
                                        <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                <figure class="product-display">
                                                    <div class="sale-label sale-top-left">Sale</div>
                                                    <img src="{{ asset('uploads/products-images/product1.jpg')}}" class="lazyOwl product-mainpic" alt="product-image" style="display: block;"> <img class="product-secondpic" alt="product-image" src="{{ asset('uploads/products-images/product1.jpg')}}"> </figure>
                                            </a> </div>
                                        <div class="product-meta">
                                            <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Retis lapen casen"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="product-block">
                                            <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="{{ asset('uploads/products-images/product2.jpg') }}" class="lazyOwl product-mainpic" alt="product-image" style="display: block;"> <img class="product-secondpic" alt="product-image" src="{{ asset('uploads/products-images/product2.jpg')}} "> </figure>
                                                </a> </div>
                                            <div class="product-meta">
                                                <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Ut tincidunt tortor"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"  > $567.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"  > $456.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:50%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="product-block">
                                            <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="{{ asset('uploads/products-images/product3.jpg') }}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product3.jpg') }}"> </figure>
                                                </a> </div>
                                            <div class="product-meta">
                                                <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Ut tincidunt tortor"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"  > $567.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"  > $456.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="product-block">
                                        <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                <figure class="product-display">
                                                    <div class="new-label new-top-left">New</div>
                                                    <img src="{{ asset('uploads/products-images/product4.jpg')}}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product4.jpg') }}"> </figure>
                                            </a> </div>
                                        <div class="product-meta">
                                            <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Stablished fact reader"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"  > $100.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"  > $90.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="product-block">
                                        <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                <figure class="product-display">
                                                    <div class="sale-label sale-top-left">Sale</div>
                                                    <img src="{{ asset('uploads/products-images/product5.jpg') }}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product5.jpg')}}"> </figure>
                                            </a> </div>
                                        <div class="product-meta">
                                            <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Retis lapen casen"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"  > <span class="price">$125.00</span> </span> </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="product-block">
                                            <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="{{ asset('uploads/products-images/product6.jpg')}}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product6.jpg')}}"> </figure>
                                                </a> </div>
                                            <div class="product-meta">
                                                <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Ut tincidunt tortor"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"  > $567.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"  > $456.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:50%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="product-block">
                                            <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="{{ asset('uploads/products-images/product7.jpg')}}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product7.jpg')}}"> </figure>
                                                </a> </div>
                                            <div class="product-meta">
                                                <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Ut tincidunt tortor"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"  > $567.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"  > $456.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="product-block">
                                        <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                <figure class="product-display">
                                                    <div class="new-label new-top-left">New</div>
                                                    <img src="{{ asset('uploads/products-images/product8.jpg') }}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product8.jpg')}}"> </figure>
                                            </a> </div>
                                        <div class="product-meta">
                                            <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Stablished fact reader"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"  > $100.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"> $90.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Featured Slider -->
            <div class="featured-pro">
                <div class="slider-items-products">
                    <div class="title col-lg-6">
                        <div class="new_title center">
                            <h2><span>Featured Products</span></h2>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec pharetra tristique eros dignissim venenatis. Nam et dolor id arcu efficitur tincidunt quis non nisi. Duis commodo pellentesque quam, id mollis ligula dictum id. Morbi cursus consectetur magna a egestas. Sed eu sagittis leo. Mauris euismod dapibus nisl, at euismod nunc commodo vel. Nulla semper non nisi in placerat. Aenean at nisl eu odio ullamcorper varius non ac ante. Quisque dictum, felis lobortis faucibus ornare, enim mi mollis ex, ac vestibulum neque nibh at nisi. </p>
                        <a title="Subscribe" class="view-all" href="#"><span>View All Products</span></a> </div>
                    <div id="featured-slider" class="product-flexslider hidden-buttons col-lg-6">
                        <div class="slider-items slider-width-col4">
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="product-block">
                                            <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="{{ asset('uploads/products-images/product9.jpg') }}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product9.jpg') }}"> </figure>
                                                </a> </div>
                                            <div class="product-meta">
                                                <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Ut tincidunt tortor"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"  > $567.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"  > $456.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:50%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="product-block">
                                            <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="{{ asset('uploads/products-images/product10.jpg') }}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product10.jpg') }}"> </figure>
                                                </a> </div>
                                            <div class="product-meta">
                                                <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Ut tincidunt tortor"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"  > $567.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"  > $456.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="product-block">
                                        <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                <figure class="product-display">
                                                    <div class="new-label new-top-left">New</div>
                                                    <img src="{{ asset('uploads/products-images/product11.jpg') }}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product11.jpg') }}"> </figure>
                                            </a> </div>
                                        <div class="product-meta">
                                            <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Stablished fact reader"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"  > $100.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"  > $90.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="product-block">
                                        <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                <figure class="product-display">
                                                    <div class="sale-label sale-top-left">Sale</div>
                                                    <img src="{{ asset('uploads/products-images/product12.jpg') }}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product12.jpg') }}"> </figure>
                                            </a> </div>
                                        <div class="product-meta">
                                            <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Retis lapen casen"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box"> <span class="regular-price"> <span class="price">$125.00</span> </span> </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="product-block">
                                            <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="{{ asset('uploads/products-images/product13.jpg') }}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product13.jpg') }}"> </figure>
                                                </a> </div>
                                            <div class="product-meta">
                                                <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Ut tincidunt tortor"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"  > $567.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"  > $456.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:50%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="item-img">
                                        <div class="product-block">
                                            <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                    <figure class="product-display">
                                                        <div class="new-label new-top-left">New</div>
                                                        <img src="{{ asset('uploads/products-images/product14.jpg') }}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product14.jpg') }}"> </figure>
                                                </a> </div>
                                            <div class="product-meta">
                                                <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Ut tincidunt tortor"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"  > $567.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"  > $456.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:80%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="item-inner">
                                    <div class="product-block">
                                        <div class="product-image"> <a href="{{ url('product/detail' , [rand(1,20)]) }}">
                                                <figure class="product-display">
                                                    <div class="new-label new-top-left">New</div>
                                                    <img src="{{ asset('uploads/products-images/product15.jpg') }}" class="lazyOwl product-mainpic" alt="Product image" style="display: block;"> <img class="product-secondpic" alt="Product image" src="{{ asset('uploads/products-images/product15.jpg') }}"> </figure>
                                            </a> </div>
                                        <div class="product-meta">
                                            <div class="product-action"> <a class="addcart" href="shopping_cart.html"> <i class="icon-shopping-cart">&nbsp;</i> Add to cart </a> <a class="wishlist" href="{{ url('/user/wishlist') }}"> <i class="icon-heart">&nbsp;</i> </a> <a href="quick_view.html" class="quickview"> <i class="icon-zoom">&nbsp;</i> </a> </div>
                                        </div>
                                    </div>
                                    <div class="item-info">
                                        <div class="info-inner">
                                            <div class="item-title"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Stablished fact reader"> Sample Product</a> </div>
                                            <div class="item-content">
                                                <div class="item-price">
                                                    <div class="price-box">
                                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price"  > $100.00 </span> </p>
                                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price"  > $90.00 </span> </p>
                                                    </div>
                                                </div>
                                                <div class="rating">
                                                    <div class="ratings">
                                                        <div class="rating-box">
                                                            <div class="rating" style="width:0%"></div>
                                                        </div>
                                                        <p class="rating-links"> <a href="#">1 Review(s)</a> <span class="separator">|</span> <a href="#">Add Review</a> </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Featured Slider -->
        </div>
    </div>
</section>
<!-- End main container -->
<!-- Latest Blog -->
@include('frontend.elements.latest-blog');
<!-- End Latest Blog -->
@stop