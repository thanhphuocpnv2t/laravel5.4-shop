<?php
use App\Banner;
?>
@extends('backend.layouts.main')
@section('title','Show Banner #' . $model->id)
@section('content')
    <section id="page-content">
        <div class="header-content">
            <h2><i class="fa fa-list-alt"></i> Banner show <span>#{{ $model->id }}</span></h2>
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
                    <li class="active">Show</li>
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
                                <h3 class="panel-title">Banner <code>Show #{{ $model->id }}</code></h3>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse" data-original-title="" title=""><i class="fa fa-angle-up"></i></button>
                                <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove" data-original-title="" title=""><i class="fa fa-times"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body no-padding">
                            <div class="form-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3"><?php  echo Form::label('name', 'Name', ['class' => 'control-label']); ?></div>
                                        <div class="col-sm-9">
                                            {{ $model->name }}
                                        </div>
                                    </div>
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3"><?php  echo Form::label('is_active', 'Active', ['class' => 'control-label']); ?></div>
                                        <div class="col-sm-9">
                                            @if($model->is_active == Banner::ACTIVE)
                                                {{ 'Active' }}
                                            @else
                                                {{ 'In Active' }}
                                            @endif
                                        </div>
                                    </div>
                                </div><!-- /.form-group -->

                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-sm-3">
                                            <?php  echo Form::label('filename', 'Filename', ['class' => 'control-label']); ?>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                                    <img style="height: 100%; width: 100%; display: block;" src="{{ asset('uploads/offer-banner/' . $model->filename) }}" data-holder-rendered="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div><!-- /.form-group -->


                            </div><!-- /.form-body -->

                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                    <!--/ End horizontal form -->

                </div>
            </div>
        </div>

        @include('backend.layouts.footer-bottom')
    </section>
@stop