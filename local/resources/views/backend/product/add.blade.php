@extends('backend.layouts.main')
@section('title','Add Product')
@section('content')
        <!-- START @PAGE CONTENT -->
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-warning"></i> Form Validations <span>form validation samples</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-home"></i>
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li>
                    <a href="#">Forms</a>
                    <i class="fa fa-angle-right"></i>
                </li>
                <li class="active">Form Validations</li>
            </ol>
        </div><!-- /.breadcrumb-wrapper -->
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-12">

                <!-- Start sample validation 1-->
                <div class="panel rounded shadow">
                    <div class="panel-heading">
                        <div class="pull-left">
                            <h3 class="panel-title">Sample Validation 1</h3>
                        </div>
                        <div class="pull-right">
                            <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse"><i class="fa fa-angle-up"></i></button>
                            <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove"><i class="fa fa-times"></i></button>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="panel-body no-padding">
                        <form class="form-horizontal form-bordered" role="form" id="sample-validation-1">
                            <div class="form-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">First Name <span class="asterisk">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm" name="sv1_firstname">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Last Name <span class="asterisk">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm" name="sv1_lastname">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Username <span class="asterisk">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="text" class="form-control input-sm" name="sv1_username">
                                        <span class="help-block">Just sample username already use : john, peter, bill, jokowi</span>
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Password <span class="asterisk">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control input-sm" name="sv1_password">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Confirm Password <span class="asterisk">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="password" class="form-control input-sm" name="sv1_password_confirm">
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Email Address <span class="asterisk">*</span></label>
                                    <div class="col-sm-7">
                                        <input type="email" class="form-control input-sm" name="sv1_email">
                                        <span class="help-block">Just sample email already use : jokowi@jk.co.id, george@bush.gov, bill@gates.com</span>
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Gender <span class="asterisk">*</span></label>
                                    <div class="col-sm-7">
                                        <div class="rdio rdio-theme">
                                            <input id="sv1_gender1" type="radio" name="sv1_gender">
                                            <label for="sv1_gender1">Male</label>
                                        </div>
                                        <div class="rdio rdio-theme">
                                            <input id="sv1_gender2" type="radio" name="sv1_gender">
                                            <label for="sv1_gender2">Female</label>
                                        </div>
                                        <label for="sv1_gender" class="error"></label>
                                        <input type="text" class="hide" id="sv1_gender"/>
                                    </div>
                                </div><!-- /.form-group -->
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Privacy Police <span class="asterisk">*</span></label>
                                    <div class="col-sm-7">
                                        <div class="ckbox ckbox-theme">
                                            <input id="terms-of-use-1" type="checkbox" name="sv1_terms">
                                            <label for="terms-of-use-1">I have read and accept <a href="#">Terms of Use</a>.</label>
                                        </div>
                                        <label for="sv1_terms" class="error"></label>
                                        <input type="text" class="hide" id="sv1_terms"/>
                                    </div>
                                </div><!-- /.form-group -->
                            </div><!-- /.form-body -->
                            <div class="form-footer">
                                <div class="col-sm-offset-3">
                                    <button type="submit" class="btn btn-theme">Sign up</button>
                                </div>
                            </div><!-- /.form-footer -->
                        </form>

                    </div>
                </div><!-- /.panel -->
                <!--/ End sample validation 1 -->

            </div>
        </div><!-- /.row -->

    </div><!-- /.body-content -->
    <!--/ End body content -->

</section><!-- /#page-content -->
<!--/ END PAGE CONTENT -->
@stop