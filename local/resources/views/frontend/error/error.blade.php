@extends('frontend.layouts.main')
@section('content')
    <section class="content-wrapper">
        <div class="container">
            <div class="col-main">
                <div class="error_404">
                    <div class="std">
                        <div class="page-not-found wow bounceInRight animated">
                            <h2>404</h2>
                            <h3><img src="{{ asset(config('app.frontend_themes').'/images/signal.png') }}" alt="error image">Oops! The Page you requested was not found!</h3>
                            <div><a href="index.html" class="btn-home"><span>Back To Home</span></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop