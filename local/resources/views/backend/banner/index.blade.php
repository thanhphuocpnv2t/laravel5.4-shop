@extends('backend.layouts.main')
@section('title','List Banner')
@section('content')
    <section id="page-content">

        <!-- Start page header -->
        <div class="header-content">
            <h2><i class="fa fa-table"></i> Datatable <span>responsive datatable samples</span></h2>
            <div class="breadcrumb-wrapper hidden-xs">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="dashboard.html">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="#">Tables</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">Datatable</li>
                </ol>
            </div><!-- /.breadcrumb-wrapper -->
        </div><!-- /.header-content -->
        <!--/ End page header -->

        <!-- Start body content -->
        <div class="body-content animated fadeIn">

            <div class="row">
                <div class="col-md-12">
                    <!-- Start datatable using dom -->
                    <div class="panel rounded shadow">
                        <div class="panel-heading">
                            <div class="pull-left">
                                <h3 class="panel-title">Post List <span class="label label-danger">DOM Support</span></h3>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse" data-original-title="" title=""><i class="fa fa-angle-up"></i></button>
                                <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove" data-original-title="" title=""><i class="fa fa-times"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Start datatable -->
                            <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline"><div class="row"><div class="col-xs-6"><div class="dataTables_length" id="datatable-dom_length"><label><select name="datatable-dom_length" aria-controls="datatable-dom" class="form-control input-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> records per page</label></div></div><div class="col-xs-6"><div id="datatable-dom_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control input-sm" aria-controls="datatable-dom"></label></div></div></div><table id="datatable-dom" class="table table-striped table-lilac dataTable" role="grid" aria-describedby="datatable-dom_info">
                                    <thead>
                                    <tr role="row">
                                        <th data-class="expand" class="text-center sorting_asc" rowspan="1" colspan="1" aria-label="Image">Image</th>
                                        <th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Title">Title</th><th data-hide="phone,tablet" class="text-center sorting" tabindex="0" aria-controls="datatable-dom" rowspan="1" colspan="1" aria-label="Comments: activate to sort column ascending">Comments</th><th data-hide="phone,tablet" class="sorting" tabindex="0" aria-controls="datatable-dom" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending">Date</th><th data-hide="phone,tablet" style="min-width: 200px" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Action</th></tr>
                                    </thead>
                                    <tbody>
                                    <?php if(0 < count($banners)){
                                        foreach ($banners as $key=>$value){ ?>
                                        <tr role="row" class="{{ ($key%2 == 0)?"odd":"even" }}">
                                            <td class="text-center sorting_1" style="width: 1%"><span class="responsiveExpander"></span>
                                                <img src="{{ asset('uploads/offer-banner/' . $value->filename) }}" alt="..." width="160" class="mt-5 mb-5"></td>
                                            <td>{{ $value->name }}</td>
                                            <td class="text-center"><span class="label label-info">{{ $value->position }}</span></td>
                                            <td>{{ date('H:i:s d-m-Y', strtotime($value->created_at)) }}</td>
                                            <td class="text-center">
                                                <a href="{{ url('/dashboard/banner/show/' . $value->id) }}" class="btn btn-sm btn-success btn-xs btn-push"><i class="fa fa-eye"></i> Detail</a>
                                                <a href="{{ url('/dashboard/banner/update/' . $value->id) }}" class="btn btn-sm btn-primary btn-xs btn-push"><i class="fa fa-pencil"></i> Edit</a>
                                                <a href="{{ url('/dashboard/banner/destroy/' . $value->id) }}" class="btn btn-sm btn-danger btn-xs btn-push"><i class="fa fa-trash"></i> Delete</a>
                                            </td>
                                        </tr>
                                    <?php }
                                    }
                                    ?>
                                    </tbody>
                                    {{--<tfoot>
                                    <tr><th data-class="expand" class="text-center" rowspan="1" colspan="1">Image</th><th data-hide="phone" rowspan="1" colspan="1">Title</th><th data-hide="phone" rowspan="1" colspan="1">Description</th><th data-hide="phone,tablet" class="text-center" rowspan="1" colspan="1">Comments</th><th data-hide="phone,tablet" rowspan="1" colspan="1">Date</th><th data-hide="phone,tablet" class="text-center" rowspan="1" colspan="1">Action</th></tr>
                                    </tfoot>--}}
                                </table><div class="row"><div class="col-xs-6"><div class="dataTables_info" id="datatable-dom_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div></div><div class="col-xs-6"><div class="dataTables_paginate paging_simple_numbers" id="datatable-dom_paginate"><ul class="pagination"><li class="paginate_button previous disabled" aria-controls="datatable-dom" tabindex="0" id="datatable-dom_previous"><a href="#">Previous</a></li><li class="paginate_button active" aria-controls="datatable-dom" tabindex="0"><a href="#">1</a></li><li class="paginate_button next disabled" aria-controls="datatable-dom" tabindex="0" id="datatable-dom_next"><a href="#">Next</a></li></ul></div></div></div></div>
                            <!--/ End datatable -->
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                    <!--/ End datatable using dom -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

        </div><!-- /.body-content -->
        <!--/ End body content -->

        <!-- Start footer content -->
        <footer class="footer-content">
            2014 - <span id="copyright-year">2017</span> © Blankon Admin. Created by <a href="http://djavaui.com/" target="_blank">Djava UI</a>, Yogyakarta ID
            <span class="pull-right">0.01 GB(0%) of 15 GB used</span>
        </footer><!-- /.footer-content -->
        <!--/ End footer content -->

    </section>
@stop