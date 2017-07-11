@extends('frontend.layouts.main')
@section('title', 'Delivery Page')
@section('content')
<section class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">
            <div class="cart wow">
                <div class="page-title">
                    <h2>Delivery</h2>
                </div>
                <div class="delivery">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6"> <img src="{{ asset(config('app.frontend_themes').'/images/image-delivery.jpg') }}" class="img-responsive animate scale" alt=""></div>

                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <h3>Order Confirmation</h3>
                            <p>Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer volutpat. Nulla porttitor tortor at nisl. Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis.</p>
                            <ul class="styled-list arrow">
                                <li><strong>Donec et mi eu massa ultrices scelerisque. </strong></li>
                                <li><strong> Nullam ac nisi non eros gravida venenatis sollicitudin lobortis </strong></li>
                                <li><strong>Curabitur convallis facilisis lorem. Vivamus euismod nulla vel nunc </strong></li>
                                <li><strong>Fusce tincidunt, justo congue egestas</strong></li>
                            </ul>
                            <p>Nulla libero. Donec et mi eu massa ultrices scelerisque. Nullam ac nisi non eros gravida venenatis. Ut euismod, turpis sollicitudin lobortis pellentesque, libero massa dapibus dui, eu dictum justo urna et mi. Integer dictum est vitae sem. </p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
<section class="content-row grey-container wow">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-6 col-lg-6">
                <h3>Order Confirmation</h3>
                <p><strong>Free Delivery.</strong> Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. </p>
                <p><strong>Standard Mainland Delivery.</strong> Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer semper, velit ut interdum malesuada, diam dolor pellentesque lacus, vitae.</p>
                <p><strong>Express Delivery.</strong> Mauris lacinia lectus sit amet felis. Aliquam erat volutpat. Nulla porttitor tortor at nisl. Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor.</p>
                <a href="#" class="button more-info">More Info</a> </div>
            <div class="col-sm-6 col-md-6 col-lg-6">
                <h3>Returns &amp; Exchanges</h3>
                <p>Vestibulum justo. Nulla mauris ipsum, convallis ut, vestibulum eu, tincidunt vel, nisi. Curabitur molestie euismod erat. Proin eros odio, mattis rutrum, pulvinar et, egestas vitae, magna. Integer volutpat. Nulla porttitor tortor at nisl. Nam lectus nulla, bibendum pretium, dictum a, mattis nec, dolor. Nullam id justo sed diam aliquam tincidunt. Duis sollicitudin, dui ac commodo iaculis.</p>
                <ul class="styled-list arrow">
                    <li><strong>Donec et mi eu massa ultrices scelerisque. </strong></li>
                    <li><strong> Nullam ac nisi non eros gravida venenatis sollicitudin lobortis </strong></li>
                    <li><strong>Curabitur convallis facilisis lorem. Vivamus euismod nulla vel nunc </strong></li>
                    <li><strong>Fusce tincidunt, justo congue egestas</strong></li>
                </ul>
            </div>
        </div>
    </div>
</section>
@stop