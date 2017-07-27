@extends('backend.layouts.main')
@section('title','Category show')
@section('content')
    <section id="page-content">
        <div class="header-content">
            <h2><i class="fa fa-list-alt"></i>  Show <span>category detail</span></h2>
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
                    <li class="active">{{ $Categories->name }}</li>
                </ol>
            </div><!-- /.breadcrumb-wrapper -->
        </div>

        <div class="body-content animated fadeIn">
            <div class="row">
                <div class="col-md-12">
	            <!-- Start basic color table -->
	                    <div class="panel">
	                        <div class="panel-heading">
	                            <div class="pull-left">
	                                <h3 class="panel-title">Category</h3>
	                            </div>
	                            <div class="pull-right">
	                                <div class="dropdown">
	                                    <button class="btn btn-sm" data-toggle="dropdown">
	                                        <i class="fa fa-navicon"></i>
	                                    </button>
	                                    <ul id="trigger-change-color" class="dropdown-menu pull-right">
	                                        <li class="dropdown-header text-center">Variant classes</li>
	                                        <li>
	                                            <a href="javascript:void(0);" data-class="table-default"><code>.table-default</code></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0);" data-class="table-primary"><code>.table-primary</code></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0);" data-class="table-success"><code>.table-success</code></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0);" data-class="table-info"><code>.table-info</code></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0);" data-class="table-warning"><code>.table-warning</code></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0);" data-class="table-danger"><code>.table-danger</code></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0);" data-class="table-lilac"><code>.table-lilac</code></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0);" data-class="table-teal"><code>.table-teal</code></a>
	                                        </li>
	                                        <li>
	                                            <a href="javascript:void(0);" data-class="table-inverse"><code>.table-inverse</code></a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                            <div class="clearfix"></div>
	                        </div><!-- /.panel-heading -->
	                        <div class="panel-body no-padding">
	                            <div class="table-responsive" style="margin-top: -1px;">
	                                <table class="table table-striped table-primary">
	                                    <thead>
	                                    <tr>
	                                        <th class="text-center border-right" style="width: 1%;">No.</th>
	                                        <th>Name</th>
	                                        <th>Alias name</th>
	                                        <th class="text-center" style="width: 12%;">Action</th>
	                                    </tr>
	                                    </thead>
	                                    <tbody>
	                                    <tr>
	                                        <td class="text-center border-right">{{ $Categories->id }}</td>
	                                        <td>
	                                            <span>{{ $Categories->name }}</span>
	                                        </td>
	                                        <td>{{ $Categories->alias }}</td>

	                                     	<!-- Action edit delete -->
	                                        <td class="text-center">
	                                            <a href="category/show/{{ $Categories->id }}" class="btn btn-success btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-eye"></i></a>
	                                            <a href="category/{{ $Categories->id }}/edit" class="btn btn-primary btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
	                                            <a href="#" class="btn btn-danger btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Delete"><i class="fa fa-times"></i></a>
	                                        </td>
	                                    </tr>
	                                   
	                                    </tbody>
	                                </table>
	                            </div><!-- /.table-responsive -->
	                        </div><!-- /.panel-body -->
	                    </div><!-- /.panel -->
	                <!--/ End basic color table -->
                </div>
            </div>
        </div>
    </section>
@endsection


