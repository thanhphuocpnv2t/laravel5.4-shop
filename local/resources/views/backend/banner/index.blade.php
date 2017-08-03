@extends('backend.layouts.main')
@section('title','List Banner')
@section('content')
    <section id="page-content">
        <!-- Start page header -->
        <div class="header-content">
            <h2><i class="fa fa-table"></i> Banner List</h2>
            <div class="breadcrumb-wrapper hidden-xs">
                <span class="label">You are here:</span>
                <ol class="breadcrumb">
                    <li>
                        <i class="fa fa-home"></i>
                        <a href="{{ url('/dashboard') }}">Dashboard</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li>
                        <a href="{{ url('/dashboard/banner') }}">Banner</a>
                        <i class="fa fa-angle-right"></i>
                    </li>
                    <li class="active">List</li>
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
                                <h3 class="panel-title">Banner List</h3>
                            </div>
                            <div class="pull-right">
                                <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Add new" data-original-title="" title=""><a href="{{ url('/dashboard/banner/create') }}"><i class="fa fa-plus"></i></a></button>
                                <button class="btn btn-sm" data-action="refresh" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Refresh" data-original-title="" title=""><i class="fa fa-refresh"></i></button>
                                <button class="btn btn-sm" data-action="collapse" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Collapse" data-original-title="" title=""><i class="fa fa-angle-up"></i></button>
                                <button class="btn btn-sm" data-action="remove" data-container="body" data-toggle="tooltip" data-placement="top" data-title="Remove" data-original-title="" title=""><i class="fa fa-times"></i></button>
                            </div>
                            <div class="clearfix"></div>
                        </div><!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Start datatable -->
                            <div id="datatable-dom_wrapper" class="dataTables_wrapper form-inline">
                                <table id="datatable-dom" class="table table-striped table-lilac dataTable" role="grid" aria-describedby="datatable-dom_info">
                                    <thead>
                                    <tr role="row">
                                        <th data-class="expand" class="text-center sorting_asc" rowspan="1" colspan="1" aria-label="Image">Image</th>
                                        <th data-hide="phone" class="sorting_disabled" rowspan="1" colspan="1" aria-label="Title">Title</th><th data-hide="phone,tablet" class="text-center sorting" tabindex="0" aria-controls="datatable-dom" rowspan="1" colspan="1" aria-label="Comments: activate to sort column ascending">Comments</th><th data-hide="phone,tablet" class="sorting" tabindex="0" aria-controls="datatable-dom" rowspan="1" colspan="1" aria-label="Date: activate to sort column ascending">Date</th><th data-hide="phone,tablet" style="min-width: 200px" class="text-center sorting_disabled" rowspan="1" colspan="1" aria-label="Action">Action</th></tr>
                                    </thead>
                                    <tbody>
                                    @if(0 < count($banners))
                                        @foreach ($banners as $key=>$banner)
                                            <tr role="row" class="{{ ($key%2 == 0)?"odd":"even" }}">
                                                <td class="text-center sorting_1" style="width: 1%"><span class="responsiveExpander"></span>
                                                    <img src="{{ asset('uploads/offer-banner/' . $banner->filename) }}" alt="..." width="160" class="mt-5 mb-5"></td>
                                                <td>{{ $banner->name }}</td>
                                                <td class="text-center"><span class="label label-info">{{ $banner->position }}</span></td>
                                                <td>{{ date('H:i:s d-m-Y', strtotime($banner->created_at)) }}</td>
                                                <td class="text-center">
                                                    <a href="{{ url('/dashboard/banner/show/' . $banner->id) }}" class="btn btn-sm btn-success btn-xs btn-push"><i class="fa fa-eye"></i> Detail</a>
                                                    <a href="{{ url('/dashboard/banner/edit/' . $banner->id) }}" class="btn btn-sm btn-primary btn-xs btn-push"><i class="fa fa-pencil"></i> Edit</a>
                                                    <a data-id="{{ $banner->id }}" data-token="{{csrf_token()}}" href="" class="btnDelete btn btn-sm btn-danger btn-xs btn-push"><i class="fa fa-trash"></i> Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                    </tbody>
                                </table>
                                <div class="row">
                                    <div class="col-xs-6">
                                        <div class="dataTables_info" id="datatable-dom_info" role="status" aria-live="polite">
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="dataTables_paginate paging_simple_numbers" id="datatable-dom_paginate">
                                            {{ $banners->links() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!--/ End datatable -->
                        </div><!-- /.panel-body -->
                    </div><!-- /.panel -->
                    <!--/ End datatable using dom -->

                </div><!-- /.col-md-12 -->
            </div><!-- /.row -->

        </div><!-- /.body-content -->
        <!--/ End body content -->

        <script type="text/javascript">
            $(document).ready(function () {
                $(document).on('click', '.btnDelete', function () {
                    if (confirm('Are you sure ?')) {
                        var dataID = $(this).attr('data-id');
                        var dataToken = $(this).attr('data-token');
                        $.ajax(
                            {
                                url: "/dashboard/banner/delete/" + dataID,
                                type: 'DELETE',
                                dataType: "JSON",
                                data: {
                                    "id": dataID,
                                    "_method": 'DELETE',
                                    "_token": dataToken,
                                },
                                success: function () {
                                    window.location.href = '/dashboard/banner';
                                }
                            });
                    }
                })
            })
        </script>

            @include('backend.layouts.footer-bottom')

    </section>
@stop