@extends('frontend.layouts.main')
@section('content')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <ul>
                    <li class="home"> <a title="Go to Home Page" href="http://www.magikcommerce.com/">Home</a><span>&mdash;›</span></li>
                    <li class="category13"><strong>About Us</strong></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- main-container -->
    <div class="main-container col2-right-layout">
        <div class="main container">
            <div class="row">
                <section class="col-main col-sm-9 wow">

                    <div class="static-contain">
                        <div class="page-title new_page_title">
                            <h2>Contact Us</h2>
                        </div>
                        <fieldset class="group-select">
                            <ul>
                                <li id="billing-new-address-form">
                                    <fieldset>
                                        <legend>New Address</legend>
                                        <input type="hidden" name="billing[address_id]" value="" id="billing:address_id">
                                        <ul>
                                            <li>
                                                <div class="customer-name">
                                                    <div class="input-box name-firstname">
                                                        <label for="billing:firstname"> First Name<span class="required">*</span></label>
                                                        <br>
                                                        <input type="text" id="billing:firstname" name="billing[firstname]" value="" title="First Name" class="input-text ">
                                                    </div>
                                                    <div class="input-box name-lastname">
                                                        <label for="billing:lastname"> Email Address <span class="required">*</span> </label>
                                                        <br>
                                                        <input type="text" id="billing:lastname" name="billing[lastname]" value="" title="Last Name" class="input-text">
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="input-box">
                                                    <label for="billing:company">Company</label>
                                                    <br>
                                                    <input type="text" id="billing:company" name="billing[company]" value="" title="Company" class="input-text">
                                                </div>
                                                <div class="input-box">
                                                    <label for="billing:email">Telephone <span class="required">*</span></label>
                                                    <br>
                                                    <input type="text" name="billing[email]" id="billing:email" value="" title="Email Address" class="input-text validate-email">
                                                </div>
                                            </li>
                                            <li>
                                                <label for="billing:street1">Address <span class="required">*</span></label>
                                                <br>
                                                <input type="text" title="Street Address" name="billing[street][]" id="billing:street1" value="" class="input-text required-entry">
                                            </li>
                                            <li>
                                                <input type="text" title="Street Address 2" name="billing[street][]" id="billing:street2" value="" class="input-text required-entry">
                                            </li>
                                            <li class="">
                                                <label>Comment<em class="required">*</em></label>
                                                <br>
                                                <div style="float:none" class="">
                                                    <textarea name="comment" title="Comment" class="required-entry input-text" cols="5" rows="3"></textarea>
                                                </div>
                                            </li>
                                        </ul>
                                    </fieldset>
                                </li>
                                <li>
                                    <p class="require"><em class="required">* </em>Required Fields</p>
                                    <input type="text" name="hideit" value="" style="display:none !important;">
                                    <div class="buttons-set">
                                        <button type="submit" title="Submit" class="button submit"> <span> Submit </span> </button>
                                    </div>
                                </li>
                            </ul>
                        </fieldset>
                    </div>
                </section>
                <aside class="col-right sidebar col-sm-3 wow">
                    <div class="block block-company">
                        <div class="block-title">Company </div>
                        <div class="block-content">
                            <ol id="recently-viewed-items">
                                <li class="item odd"><a href="about_us.html">About Us</a></li>
                                <li class="item even"><a href="sitemap.html">Sitemap</a></li>
                                <li class="item  odd"><a href="#">Terms of Service</a></li>
                                <li class="item even"><a href="#">Search Terms</a></li>
                                <li class="item last"><strong>Contact Us</strong></li>
                            </ol>
                        </div>
                    </div>
                </aside>
            </div>
        </div>
    </div>
    <!--End main-container -->
@stop