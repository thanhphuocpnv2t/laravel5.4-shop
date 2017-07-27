@extends('backend.layouts.main')
@section('title','Category edit')
@section('content')
    <section id="page-content">
        <div class="header-content">
            <h2><i class="fa fa-list-alt"></i> Edit <span>category</span></h2>
            <div class="breadcrumb-wrapper hidden-xs">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="dashboard.html">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Category</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Edit</li>
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
                                <h3 class="panel-title">Edit category Form <code>category item</code></h3>
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
                                        
                                    </div>
                                </div>
                            </div>
                            {!! Form::open(array('url' => '/dashboard/category', 'class' => 'form-horizontal mt-10','method' => 'POST')) !!}
                                {{ csrf_field() }}
                                <div class="form-body">
                                    <div class="form-group">
                                        <?php  echo Form::label('name', 'Name', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                             <input type="text" class="form-control" value="{{ $Categories->name }}" name="name" id="name" placeholder="Input field">
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <?php  echo Form::label('parent_id', 'Parent ID', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                            <select name="parent_id" class="form-control">
                                                    <option value="" disabled="true">Select category</option>
                                                     <option value="0" >No parent</option>
                                                 @foreach ($Categories_parent as $Category)
                                                     <option value="{{ $Category->id }}">{{ $Category->name }}
                                                     </option>
                                                 @endforeach
                                            </select>
                                        </div>
                                    </div><!-- /.form-group -->

                                    <div class="form-group">
                                        <?php  echo Form::label('alias', 'Alias', ['class' => 'col-sm-3 control-label']); ?>
                                        <div class="col-sm-7">
                                             <input type="text" class="form-control" value="{{ $Categories->alias }}" name="name" id="name" placeholder="Input field">
                                        </div>
                                    </div><!-- /.form-group -->

                                </div><!-- /.form-body -->
                                <div class="form-footer">
                                    <div class="col-sm-offset-3">
                                        <?php echo Form::button('Edit', ['type' => 'submit', 'class' => 'btn btn-success']); ?>
                                    </div>
                                </div><!-- /.form-footer -->
                            {!! Form::close() !!}

                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                    <!--/ End horizontal form -->

                </div>
            </div>
        </div>
@endsection