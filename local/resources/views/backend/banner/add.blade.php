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
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                            {!! Form::open(array('url' => '/dashboard/banner/store', 'class' => 'form-horizontal mt-10')) !!}
                                <div class="form-body">
                                    <div class="form-group">
                                        <?php  echo Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                            <?php echo Form::text('name', '', ['class' => 'form-control', 'placeholder' => 'Name']); ?>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <?php  echo Form::label('position', 'Position', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                            <?php echo Form::text('position', '', ['class' => 'form-control', 'placeholder' => 'Position']); ?>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <?php  echo Form::label('type', 'Type', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                            <?php echo Form::text('type', '', ['class' => 'form-control', 'placeholder' => 'Type']); ?>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <?php  echo Form::label('active', 'Active', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                            <?php echo Form::text('active', '', ['class' => 'form-control', 'placeholder' => 'Active']); ?>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <?php  echo Form::label('filename', 'Filename', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                            <?php echo Form::text('filename', '', ['class' => 'form-control', 'placeholder' => 'Filename']); ?>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <?php  echo Form::label('content', 'Content', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                            <?php echo Form::text('content', '', ['class' => 'form-control', 'placeholder' => 'Content']); ?>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <?php  echo Form::label('link', 'Link', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                            <?php echo Form::text('link', '', ['class' => 'form-control', 'placeholder' => 'Link']); ?>
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