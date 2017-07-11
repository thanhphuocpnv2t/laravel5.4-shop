@extends('frontend.layouts.main')
@section('content')
<section class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">
            <div class="cart wow">
                <div class="page-title">
                    <h2>Compare Products</h2>
                </div>
                <div class="table-responsive">
                    <table class="table table-striped compare-table">
                        <tbody>
                        <tr class="product-shop-row first odd">
                            <th>&nbsp;</th>
                            <td><a href="#" class="btn btn-cancel icon-remove" title="Remove This Item"></a> <a class="product-image" href="{{ url('product/detail' , [rand(1,20)]) }}" title="Azrouel Dress"><img src="{{ asset('uploads/products-images/product1.jpg') }}" alt="Azrouel Dress" width="200"></a>
                                <h2 class="product-name"><a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Azrouel Dress">Sample Product</a></h2>
                                <div class="price-box">
                                    <p class="special-price"> <span class="price"> $45.00 </span> </p>
                                    <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                                </div>
                                <p>
                                    <button type="button" title="Add to Cart" class="button"><span><span>Add to Cart</span></span></button>
                                </p>
                                <a href="#" class="button wishlist">Add to Wishlist</a></td>
                            <td><a href="#" class="btn btn-cancel icon-remove" title="Remove This Item"></a><a class="product-image" href="{{ url('product/detail' , [rand(1,20)]) }}" title="Blue Lagoon polka-dot chiffon and lace thong"><img src="{{ asset('uploads/products-images/product2.jpg') }}" alt="Azrouel Dress" width="200"></a>
                                <h2 class="product-name"><a href="{{ url('product/detail' , [rand(1,20)]) }}" title="Azrouel Dress">Sample Product</a></h2>
                                <div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                                <p>
                                    <button type="button" title="Add to Cart" class="button"><span><span>Add to Cart</span></span></button>
                                </p>
                                <a href="#" class="button wishlist">Add to Wishlist</a></td>
                        </tr>
                        </tbody>
                        <tbody>
                        <tr class="even">
                            <th>Description</th>
                            <td><div> Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips, pleated ruffle around back, vent at back hem, fully lined. Concealed button fastenings through front. 58% silk, 37% metal, 5% polyester; lining: 92% polyester, 8% elastane. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean. </div></td>
                            <td><div> Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips, pleated ruffle around back, vent at back hem, fully lined. Concealed button fastenings through front. 58% silk, 37% metal, 5% polyester; lining: 92% polyester, 8% elastane. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean. </div></td>
                        </tr>
                        <tr class="odd">
                            <th>Color</th>
                            <td><div> Black </div></td>
                            <td><div> Black </div></td>
                        </tr>
                        <tr class="even">
                            <th>Short Description</th>
                            <td><div> Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips, pleated ruffle around back, vent at back hem, fully lined. Concealed button fastenings through front. 58% silk, 37% metal, 5% polyester; lining: 92% polyester, 8% elastane. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean. </div></td>
                            <td><div> Silver, metallic-blue and metallic-lavender silk-blend jacquard, graphic pattern, pleated ruffle along collar, long sleeves with button-fastening cuffs, buckle-fastening silver skinny belt, large pleated rosettes at hips, pleated ruffle around back, vent at back hem, fully lined. Concealed button fastenings through front. 58% silk, 37% metal, 5% polyester; lining: 92% polyester, 8% elastane. Dry clean. Zip and hook fastening at back. 100% silk. Specialist clean. </div></td>
                        </tr>
                        </tbody>
                        <tbody>
                        <tr class="add-to-row last odd text-center">
                            <th>&nbsp;</th>
                            <td><div class="price-box">
                                    <p class="special-price"> <span class="price"> $45.00 </span> </p>
                                    <p class="old-price"> <span class="price-sep">-</span> <span class="price"> $50.00 </span> </p>
                                </div>
                                <p>
                                    <button type="button" title="Add to Cart" class="button"><span><span>Add to Cart</span></span></button>
                                </p>
                                <a href="#" class="button wishlist">Add to Wishlist</a></td>
                            <td><div class="price-box"> <span class="regular-price"> <span class="price">$50.00</span> </span> </div>
                                <p>
                                    <button type="button" title="Add to Cart" class="button"><span><span>Add to Cart</span></span></button>
                                </p>
                                <a href="#" class="button wishlist">Add to Wishlist</a></td>
                        </tr>
                        </tbody>
                    </table></div>
            </div>
        </div>
    </div>
</section>
@stop