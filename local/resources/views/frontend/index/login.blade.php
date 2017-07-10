@extends('frontend.layouts.main')
@section('content')
    <section class="main-container col1-layout">
        <div class="main container">
            <div class="account-login">
                <div class="page-title">
                    <h2>Login or Create an Account</h2>
                </div>
                <fieldset class="col2-set">
                    <legend>Login or Create an Account</legend>
                    <div class="col-1 new-users"><strong>New Customers</strong>
                        <div class="content">
                            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
                            <div class="buttons-set">
                                <button onClick="window.location='{{ url('/register') }}';" class="button create-account" type="button"><span>Create an Account</span></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-2 registered-users"><strong>Registered Customers</strong>
                        <div class="content">
                            <p>If you have an account with us, please log in.</p>
                            {!! Form::open(array('url' => '/login', 'class' => 'form-horizontal mt-10')) !!}
                            <ul class="form-list">
                                <li>
                                    <label >Email Address <span class="required">*</span></label>
                                    <br>
                                    <?php echo Form::text('email', '', ['class' => 'input-text required-entry', 'title' => 'Email Address']); ?>
                                </li>
                                <li>
                                    <label for="pass">Password <span class="required">*</span></label>
                                    <br>
                                    <?php echo Form::password('password', ['class' => 'input-text required-entry', 'title' => 'Password']); ?>
                                </li>
                            </ul>
                            <p class="required">* Required Fields</p>
                            <div class="buttons-set">
                                <?php echo Form::button('Register', ['type' => 'submit', 'class' => 'button login']); ?>
                                <a class="forgot-word" href="{{ url('/forgotpassword') }}">Forgot Your Password?</a>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </fieldset>
            </div>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </section>
@stop