<?php
use App\Banner;
?>
@extends('backend.layouts.main')
@section('title','Add Banner')
@section('content')
    <section id="page-content">
        <div class="header-content">
            <h2><i class="fa fa-list-alt"></i> Form Layouts <span>variant form layouts</span></h2>
            <div class="breadcrumb-wrapper hidden-xs">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Banner</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Add</li>
                </ol>
            </div><!-- /.breadcrumb-wrapper -->
        </div>

        <div class="body-content animated fadeIn">
            <div class="row">
                <div class="col-md-12">

                    <!-- Start horizontal form -->
                    <div class="panel rounded shadow">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h3 class="panel-title">Banner <code>add</code></h3>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse" data-original-title="" title=""><i class="fa fa-angle-up"></i></button>
                                <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove" data-original-title="" title=""><i class="fa fa-times"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body no-padding">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-md-12">
                                    @foreach($errors->all() as $error)
                                        <div class="alert alert-danger">{{ $error }}</div>
                                    @endforeach
                                    </div>
                                </div>
                            </div>
                            {!! Form::open(array('url' => '/dashboard/banner', 'method' => 'POST', 'enctype' => 'multipart/form-data', 'class' => 'form-horizontal mt-10')) !!}
                                {{ csrf_field() }}
                                <div class="form-body">
                                    <div class="form-group">
                                        <?php  echo Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                            <?php echo Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name']); ?>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <?php  echo Form::label('is_active', 'Active', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                            <?php echo Form::select('is_active',  [ Banner::ACTIVE => 'Active', Banner::INACTIVE => 'In Active'], null ,['class' => 'form-control', 'placeholder' => 'Please chose one']); ?>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <?php  echo Form::label('filename', 'Filename', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                            <?php echo Form::file('filename', ['class' => 'form-control']); ?>
                                        </div>
                                    </div><!-- /.form-group -->


                                </div><!-- /.form-body -->
                                <div class="form-footer">
                                    <div class="col-sm-offset-3">
                                        <?php echo Form::button('Create', ['type' => 'submit', 'class' => 'btn btn-success']); ?>
                                    </div>
                                </div><!-- /.form-footer -->
                            {!! Form::close() !!}

                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                    <!--/ End horizontal form -->

                </div>
            </div>
        </div>
    </section>
@stop