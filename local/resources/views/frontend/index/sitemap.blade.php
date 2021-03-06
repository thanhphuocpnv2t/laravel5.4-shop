@extends('frontend.layouts.main')
@section('title', 'Sitemap Page')
@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="col-main">
                <div class="cart wow">
                    <div class="page-title new_page_title">
                        <h2>Sitemap</h2>
                    </div>
                    <div class="row content-row">
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-4">
                            <ul class="simple-list arrow-list bold-list">
                                <li> <a href="grid.html">Woman</a>
                                    <ul>
                                        <li><a href="grid.html">Featured products</a></li>
                                        <li><a href="grid.html">New arrivals</a></li>
                                        <li><a href="grid.html">Bestsellers</a></li>
                                        <li><a href="grid.html">Footwear Womens</a></li>
                                        <li><a href="grid.html">Shorts</a></li>
                                    </ul>
                                </li>
                                <li> <a href="grid.html">Man</a>
                                    <ul>
                                        <li><a href="grid.html">Polo Shirts</a></li>
                                        <li><a href="grid.html">Shirts</a></li>
                                        <li><a href="grid.html">Big &amp; Tall</a></li>
                                        <li><a href="grid.html">Jeans</a></li>
                                        <li><a href="grid.html">Sweaters</a></li>
                                    </ul>
                                </li>
                                <li><a href="grid.html">Electronics</a></li>
                                <li><a href="grid.html">Furniture</a></li>
                                <li><a href="grid.html">Sale</a></li>
                            </ul>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-3 col-lg-4">
                            <ul class="simple-list arrow-list bold-list">
                                <li><a href="shopping_cart.html">Shopping Cart</a></li>
                                <li> <a href="{{ url('/login') }}">My Account</a>
                                    <ul>
                                        <li><a href="{{ url('/login') }}">My Account</a></li>
                                        <li><a href="#">Order history</a></li>
                                        <li><a href="#">Advanced search</a></li>
                                        <li><a href="#">Reviews</a></li>
                                    </ul>
                                </li>
                                <li> <a href="#">Customer service</a>
                                    <ul>
                                        <li><a href="#">Online support</a></li>
                                        <li><a href="#">Help & FAQs</a></li>
                                        <li><a href="#">Call Center</a></li>
                                    </ul>
                                </li>
                                <li> <a href="#">Information</a>
                                    <ul>
                                        <li><a href="about_us.html">About Us</a></li>
                                        <li><a href="#">Shipping &amp; Returns</a></li>
                                        <li><a href="#">Privacy Notice</a></li>
                                        <li><a href="#">Conditions of Use</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"> <img class="img-responsive animate scale" src="{{ asset(config('app.frontend_themes').'/images/large-icon-sitemap.png') }}" alt=""> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop