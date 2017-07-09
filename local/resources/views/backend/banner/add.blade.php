@extends('backend.layouts.main')
@section('content')
    <section id="page-content">
        <div class="header-content">
            <h2><i class="fa fa-list-alt"></i> Form Layouts <span>variant form layouts</span></h2>
            <div class="breadcrumb-wrapper hidden-xs">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="dashboard.html">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Forms</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Form Layouts</li>
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
                                <h3 class="panel-title">Horizontal Form <code>.form-horizontal</code></h3>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse" data-original-title="" title=""><i class="fa fa-angle-up"></i></button>
                                <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove" data-original-title="" title=""><i class="fa fa-times"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body no-padding">
                            <?php
                            foreach ($errors->all() as $message) {
                                print_r($message);
                            }
                            ?>
                            <form class="form-horizontal mt-10" action="/dashboard/banner/add">
                                <div class="form-body">
                                    <div class="form-group">
                                        <label for="name" class="col-sm-3 control-label">Name</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="name" placeholder="Name">
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="position" class="col-sm-3 control-label">Position</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="position" placeholder="Position">
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="type" class="col-sm-3 control-label">Type</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="type" placeholder="Type">
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="is_active" class="col-sm-3 control-label">Active</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="is_active" placeholder="Active">
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="filename" class="col-sm-3 control-label">Filename</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="filename" placeholder="Filename">
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="content" class="col-sm-3 control-label">Content</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="content" placeholder="Content">
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <label for="link" class="col-sm-3 control-label">Link</label>
                                        <div class="col-sm-7">
                                            <input type="text" class="form-control" id="link" placeholder="Link">
                                        </div>
                                    </div><!-- /.form-group -->


                                </div><!-- /.form-body -->
                                <div class="form-footer">
                                    <div class="col-sm-offset-3">
                                        <button type="submit" class="btn btn-success">Sign in</button>
                                    </div>
                                </div><!-- /.form-footer -->
                            </form>

                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                    <!--/ End horizontal form -->

                </div>
            </div>
        </div>
    </section>
@stop