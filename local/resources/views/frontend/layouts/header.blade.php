<!-- Header -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-4 col-md-5">
                <!-- Header Logo -->
                <a class="logo" title="Magento Commerce" href="{{ url('/' ) }}"><img alt="Magento Commerce" src="{{ asset('uploads/logo/logo.png') }}"></a>
                <!-- End Header Logo -->
            </div>
            <div class=" col-lg-7 col-sm-8 col-md-7 col-xs-12">
                <div class="header-top">
                    <div class="welcome-msg hidden-xs"> Default welcome msg! </div>
                    <!-- Header Language -->
                    <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="#"> <img src="{{ asset('uploads/language/english.png') }}" alt="language"> English <span class="caret"></span> </a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{ asset('uploads/language/english.png') }}" alt="language"> English </a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{ asset('uploads/language/francais.png') }}" alt="language"> French </a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"><img src="{{ asset('uploads/language/german.png') }}" alt="language"> German </a></li>
                        </ul>
                    </div>
                    <!-- End Header Language -->
                    <!-- Header Top Links -->
                    <div class="toplinks">
                        <div class="links">
                            <div class="myaccount"><a title="My Account" href="{{ url('/login') }}"><span class="hidden-xs">My Account</span></a></div>
                            <div class="wishlist"><a title="My Wishlist" href="{{ url('/user/wishlist') }}"><span class="hidden-xs">Wishlist</span></a></div>
                            <div class="demo"><a href="blog.html" title="Blog"><span class="hidden-xs">Blog</span></a></div>
                            <!-- Header Company -->
                            <div class="dropdown block-company-wrapper hidden-xs"> <a role="button" data-toggle="dropdown" data-target="#" class="dropdown-toggle" href="#"> Company <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="about_us.html"> About Us </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Customer Service </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> Privacy Policy </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="sitemap.html">Site Map </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Search Terms </a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Advanced Search </a></li>
                                </ul>
                            </div>
                            <!-- End Header Company -->
                            <div class="login"><a href="{{ url('/login') }}"><span class="hidden-xs">Log In</span></a></div>
                        </div>
                    </div>
                    <!-- End Header Top Links -->
                </div>
                <div class="cart_cur_block">
                    <!-- Header Currency -->
                    <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="#"> USD <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> $ - Dollar </a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> £ - Pound </a></li>
                            <li role="presentation"><a role="menuitem" tabindex="-1" href="#"> € - Euro </a></li>
                        </ul>
                    </div>
                    <!-- End Header Currency -->
                    <!-- Top Cart -->
                    <div class="top-cart-contain">
                        <div class="mini-cart">
                            <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="#"><span class="hidden-xs">shopping cart (3)</span></a></div>
                            <div>
                                <div style="display: none;" class="top-cart-content arrow_box">
                                    <div class="block-subtitle">Recently added item(s)</div>
                                    <ul id="cart-sidebar" class="mini-products-list">
                                        <li class="item odd"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Skater Dress In Leaf Print" class="product-image"><img src="{{ asset('uploads/products-images/product1.jpg') }}" alt="Product image" width="55"></a>
                                            <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="btn-remove1">Remove This Item</a> <a class="btn-edit" title="Edit item" href="#">Edit item</a>
                                                <p class="product-name"><a href="{{ url('product/detail' , [rand(1,20)]) }}">Sample Product</a> </p>
                                                <strong>1</strong> x <span class="price">$20.00</span> </div>
                                        </li>
                                        <li class="item even"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Product layout: large content" class="product-image"><img src="{{ asset('uploads/products-images/product2.jpg')}}" alt="Product image" width="55"></a>
                                            <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="btn-remove1">Remove This Item</a> <a class="btn-edit" title="Edit item" href="#">Edit item</a>
                                                <p class="product-name"><a href="{{ url('product/detail' , [rand(1,20)]) }}">Sample Product</a> </p>
                                                <strong>1</strong> x <span class="price">$230.00</span> </div>
                                        </li>
                                        <li class="item last odd"> <a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Skater Dress In Leaf Print" class="product-image"><img src="{{ asset('uploads/products-images/product3.jpg')}}" alt="Product image" width="55"></a>
                                            <div class="product-details"> <a href="#" title="Remove This Item" onClick="" class="btn-remove1">Remove This Item</a><a class="btn-edit" title="Edit item" href="#">Edit item</a>
                                                <p class="product-name"><a href="{{ url('product/detail' , [rand(1,20)]) }}">Sample Product</a> </p>
                                                <strong>2</strong> x <span class="price">$420.00</span> </div>
                                        </li>
                                    </ul>
                                    <div class="top-subtotal">Subtotal: <span class="price">$520.00</span></div>
                                    <div class="actions">
                                        <button class="btn-checkout" type="button"><span>Checkout</span></button>
                                        <button class="view-cart" type="button"><span>View Cart</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Top Cart -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->