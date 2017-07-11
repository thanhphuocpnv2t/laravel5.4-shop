@extends('backend.layouts.main')
@section('title','Admin Index')
@section('content')
<!-- START @PAGE CONTENT -->
<section id="page-content">

    <!-- Start page header -->
    <div class="header-content">
        <h2><i class="fa fa-home"></i>E-Commerce Dashboard <span>dashboard &amp; statistics</span></h2>
        <div class="breadcrumb-wrapper hidden-xs">
            <span class="label">You are here:</span>
            <ol class="breadcrumb">
                <li class="active">E-Commerce Dashboard</li>
            </ol>
        </div>
    </div><!-- /.header-content -->
    <!--/ End page header -->

    <!-- Start body content -->
    <div class="body-content animated fadeIn">

        <div class="row">
            <div class="col-md-9">

                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="mini-stat-type-2 shadow border-danger">
                            <h3 class="text-center text-thin">Daily</h3>
                            <p class="text-center">
                                <span class="overview-icon bg-danger"><i class="icon-arrow-down"></i></span>
                            </p>
                            <p>
                                <b>$2,452</b> <span class="fg-danger">-35%</span>
                            </p>
                            <p class="text-muted">
                                Last Month: 124,342/422,421
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
                        <div class="mini-stat-type-2 shadow border-success">
                            <h3 class="text-center text-thin">Weekly</h3>
                            <p class="text-center">
                                <span class="overview-icon bg-success"><i class="icon-arrow-up"></i></span>
                            </p>
                            <p>
                                <b>$7,321</b> <span class="fg-success">+15%</span>
                            </p>
                            <p class="text-muted">
                                Last Month: 452,342/784,421
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">

                        <!-- Start list bank table -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Bank - <b>Capital One</b></h3>
                            </div><!-- /.panel-heading -->
                            <div class="panel-body no-padding">
                                <div class="table-responsive">
                                    <table class="table">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <span class="pull-left text-capitalize">Estimated next deposit</span>
                                                <span class="pull-right text-strong fg-teals">$230.45</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="pull-left text-capitalize">Pending transactions:</span>
                                                <span class="pull-right text-strong fg-teals">$34.11</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="pull-left text-capitalize">Reserves &amp; holds:</span>
                                                <span class="pull-right text-strong">$0.00</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.panel-body -->
                        </div>
                        <!--/ End list bank table -->

                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <!-- Start market status chart -->
                        <div class="panel stat-stack widget-market rounded shadow">
                            <div class="panel-body no-padding">
                                <div class="row row-merge">
                                    <div class="col-sm-8">
                                        <div class="panel stat-left no-margin no-box-shadow">
                                            <div class="panel-body bg-teal">

                                                <div id="market-chart" class="resize-chart" style="position: relative; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);"><svg height="310" version="1.1" width="484" xmlns="http://www.w3.org/2000/svg" style="overflow: hidden; position: relative;"><desc style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">Created with Raphaël 2.1.0</desc><defs style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></defs><text x="25.84375" y="271" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">0</tspan></text><text x="25.84375" y="209.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">20</tspan></text><text x="25.84375" y="148" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">40</tspan></text><text x="25.84375" y="86.5" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">60</tspan></text><text x="25.84375" y="25" text-anchor="end" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: end; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">80</tspan></text><text x="459" y="283.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2014</tspan></text><text x="388.95459340784674" y="283.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2013</tspan></text><text x="318.7172815921533" y="283.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2012</tspan></text><text x="248.671875" y="283.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2011</tspan></text><text x="178.62646840784672" y="283.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2010</tspan></text><text x="108.58106181569343" y="283.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2009</tspan></text><text x="38.34375" y="283.5" text-anchor="middle" font="10px &quot;Arial&quot;" stroke="none" fill="#ffffff" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-anchor: middle; font-style: normal; font-variant: normal; font-weight: normal; font-stretch: normal; font-size: 12px; line-height: normal; font-family: sans-serif;" font-size="12px" font-family="sans-serif" font-weight="normal" transform="matrix(1,0,0,1,0,7)"><tspan dy="4.25" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);">2008</tspan></text><path fill="none" stroke="#906094" d="M38.34375,240.25C55.90307795392336,196.43125,91.02173386177007,73.44281805745554,108.58106181569343,64.975C126.09241346373176,56.53031805745553,161.1151167598084,176.828125,178.62646840784672,172.6C196.13782005588504,168.371875,231.16052335196167,23.462499999999977,248.671875,31.149999999999977C266.1832266480383,38.83749999999998,301.205929944115,234.1,318.7172815921533,234.1C336.27660954607666,234.1,371.3952654539234,46.54603283173733,388.95459340784674,31.149999999999977C406.4659450558851,15.796032831737326,441.4886483519617,91.11249999999998,459,111.1" stroke-width="5px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#f6bb42" d="M38.34375,209.5C55.90307795392336,186.4375,91.02173386177007,124.94801641586868,108.58106181569343,117.25C126.09241346373176,109.57301641586868,161.1151167598084,151.84375,178.62646840784672,148C196.13782005588504,144.15625,231.16052335196167,90.34375,248.671875,86.5C266.1832266480383,82.65625,301.205929944115,121.08849179206567,318.7172815921533,117.25C336.27660954607666,113.40099179206567,371.3952654539234,59.59900820793434,388.95459340784674,55.75C406.4659450558851,51.91150820793434,441.4886483519617,78.8125,459,86.5" stroke-width="5px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><path fill="none" stroke="#8cc152" d="M38.34375,178.75C55.90307795392336,186.4375,91.02173386177007,207.57549589603283,108.58106181569343,209.5C126.09241346373176,211.41924589603283,161.1151167598084,196.815625,178.62646840784672,194.125C196.13782005588504,191.434375,231.16052335196167,191.434375,248.671875,187.975C266.1832266480383,184.515625,301.205929944115,171.44003932968536,318.7172815921533,166.45C336.27660954607666,161.44628932968536,371.3952654539234,150.69430574555403,388.95459340784674,148C406.4659450558851,145.31305574555404,441.4886483519617,145.69375000000002,459,144.925" stroke-width="5px" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></path><circle cx="38.34375" cy="240.25" r="7" fill="#906094" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="108.58106181569343" cy="64.975" r="4" fill="#906094" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="178.62646840784672" cy="172.6" r="4" fill="#906094" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="248.671875" cy="31.149999999999977" r="4" fill="#906094" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="318.7172815921533" cy="234.1" r="4" fill="#906094" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="388.95459340784674" cy="31.149999999999977" r="4" fill="#906094" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="459" cy="111.1" r="4" fill="#906094" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="38.34375" cy="209.5" r="7" fill="#f6bb42" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="108.58106181569343" cy="117.25" r="4" fill="#f6bb42" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="178.62646840784672" cy="148" r="4" fill="#f6bb42" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="248.671875" cy="86.5" r="4" fill="#f6bb42" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="318.7172815921533" cy="117.25" r="4" fill="#f6bb42" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="388.95459340784674" cy="55.75" r="4" fill="#f6bb42" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="459" cy="86.5" r="4" fill="#f6bb42" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="38.34375" cy="178.75" r="7" fill="#8cc152" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="108.58106181569343" cy="209.5" r="4" fill="#8cc152" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="178.62646840784672" cy="194.125" r="4" fill="#8cc152" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="248.671875" cy="187.975" r="4" fill="#8cc152" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="318.7172815921533" cy="166.45" r="4" fill="#8cc152" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="388.95459340784674" cy="148" r="4" fill="#8cc152" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle><circle cx="459" cy="144.925" r="4" fill="#8cc152" stroke="#ffffff" stroke-width="1" style="-webkit-tap-highlight-color: rgba(0, 0, 0, 0);"></circle></svg><div class="morris-hover morris-default-style" style="left: 0px; top: 54px; display: block;"><div class="morris-hover-row-label">2008</div><div class="morris-hover-point" style="color: #8CC152">
                                                            Apple:
                                                            30
                                                        </div><div class="morris-hover-point" style="color: #F6BB42">
                                                            Android:
                                                            20
                                                        </div><div class="morris-hover-point" style="color: #906094">
                                                            Windows Phone:
                                                            10
                                                        </div></div></div>

                                            </div><!-- /.panel-body -->
                                            <div class="panel-footer no-border-top">
                                                <div class="row text-center mb-5 mt-5">
                                                    <div class="col-xs-4 col-xs-override border-right dotted">
                                                        <div class="mini-stat no-padding no-margin">
                                                                            <span class="mini-stat-chart text-center">
                                                                                <span id="market-today-chart"><canvas width="47" height="50" style="display: inline-block; width: 47px; height: 50px; vertical-align: top;"></canvas></span>
                                                                            </span><!-- /.mini-stat-chart -->
                                                            <div class="mini-stat-info text-right">
                                                                <span>$1,201</span>
                                                                <p class="text-muted no-margin">Today Sales</p>
                                                            </div><!-- /.mini-stat-info -->
                                                        </div><!-- /.mini-stat -->
                                                    </div>
                                                    <div class="col-xs-4 col-xs-override border-right dotted">
                                                        <div class="mini-stat no-padding no-margin">
                                                                            <span class="mini-stat-chart">
                                                                                <span id="market-average-chart"><canvas width="47" height="50" style="display: inline-block; width: 47px; height: 50px; vertical-align: top;"></canvas></span>
                                                                            </span><!-- /.mini-stat-chart -->
                                                            <div class="mini-stat-info text-right">
                                                                <span>$2,671</span>
                                                                <p class="text-muted no-margin">Average Sales</p>
                                                            </div><!-- /.mini-stat-info -->
                                                        </div><!-- /.mini-stat -->
                                                    </div>
                                                    <div class="col-xs-4 col-xs-override">
                                                        <div class="mini-stat no-padding no-margin">
                                                                            <span class="mini-stat-chart">
                                                                                <span id="market-total-chart"><canvas width="47" height="50" style="display: inline-block; width: 47px; height: 50px; vertical-align: top;"></canvas></span>
                                                                            </span><!-- /.mini-stat-chart -->
                                                            <div class="mini-stat-info text-right">
                                                                <span>$23,671</span>
                                                                <p class="text-muted no-margin">Total Sales</p>
                                                            </div><!-- /.mini-stat-info -->
                                                        </div><!-- /.mini-stat -->
                                                    </div>
                                                </div>
                                            </div><!-- /.panel-footer -->
                                        </div><!-- /.panel -->
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="panel no-margin no-box-shadow stat-right">
                                            <div class="panel-body">
                                                <h4 class="no-margin">Market Status</h4>
                                                <p class="text-muted">Summary of the market status.</p>
                                                <div id="market-status-chart" class="resize-chart" style="padding: 0px; position: relative;"><canvas class="flot-base" width="424" height="540" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 212px; height: 270px;"></canvas><canvas class="flot-overlay" width="424" height="540" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 212px; height: 270px;"></canvas><span class="pieLabel" id="pieLabel0" style="position: absolute; top: 86px; left: 147.5px;"><div style="font-size:8pt; text-align:center; padding:2px; color:white;">Apple<br>36%</div></span><span class="pieLabel" id="pieLabel1" style="position: absolute; top: 173px; left: 102px;"><div style="font-size:8pt; text-align:center; padding:2px; color:white;">Android<br>18%</div></span><span class="pieLabel" id="pieLabel2" style="position: absolute; top: 103px; left: 1px;"><div style="font-size:8pt; text-align:center; padding:2px; color:white;">Windows Phone<br>45%</div></span></div>
                                            </div><!-- /.panel-body -->
                                            <div class="panel-footer">
                                                <span>Target Income ($23,671)</span><span class="pull-right hidden-sm hidden-xs">$1.000.000</span>
                                                <div class="progress progress-xs">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100" style="width: 45%"></div>
                                                </div><!-- /.progress -->
                                            </div>
                                        </div><!-- /.panel -->
                                    </div>
                                </div><!-- /.row -->
                            </div><!-- /.panel-body -->
                        </div><!-- /.panel -->
                        <!--/ End market status chart -->

                        <!-- Start seller dashboard -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Seller Dashboard</h3>
                            </div><!-- /.panel-heading -->
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-no-border table-middle table-lilac">
                                        <tbody>
                                        <tr>
                                            <td>
                                                <img src="http://img.djavaui.com/?create=50x50,6880B0?f=ffffff" alt="...">
                                            </td>
                                            <td>
                                                <b class="text-block">American team soccer</b>
                                            </td>
                                            <td>
                                                <b class="text-block">230 of 300</b>
                                                <span class="text-block text-muted">reserved</span>
                                                <div class="progress progress-xxs no-margin">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <b class="text-block">2d</b>
                                                <span class="text-block text-muted">remaining</span>
                                            </td>
                                            <td>
                                                <b class="text-block">$1,500</b>
                                                <span class="text-block text-muted">profit</span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Message buyers"><i class="fa fa-envelope"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Refresh data"><i class="fa fa-refresh"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-file"></i></a>
                                            </td>
                                            <td>
                                                <span class="label label-warning label-circle">&nbsp;</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="http://img.djavaui.com/?create=50x50,6880B0?f=ffffff" alt="...">
                                            </td>
                                            <td>
                                                <b class="text-block">USA Olympic Soccer</b>
                                                <span class="text-block text-muted">Large emblem</span>
                                            </td>
                                            <td>
                                                <b class="text-block">450 of 500</b>
                                                <span class="text-block text-muted">sold</span>
                                                <div class="progress progress-xxs no-margin">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <b class="text-block">5d</b>
                                                <span class="text-block text-muted">remaining</span>
                                            </td>
                                            <td>
                                                <b class="text-block">$5,530</b>
                                                <span class="text-block text-muted">profit</span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Message buyers"><i class="fa fa-envelope"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Refresh data"><i class="fa fa-refresh"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-file"></i></a>
                                            </td>
                                            <td>
                                                <span class="label label-success label-circle">&nbsp;</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="http://img.djavaui.com/?create=50x50,6880B0?f=ffffff" alt="...">
                                            </td>
                                            <td>
                                                <b class="text-block">USA Olympic Soccer</b>
                                                <span class="text-block text-muted">Pocket emblem</span>
                                            </td>
                                            <td>
                                                <b class="text-block">1,000 of 2,000</b>
                                                <span class="text-block text-muted">sold</span>
                                                <div class="progress progress-xxs no-margin">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <b class="text-block">5d</b>
                                                <span class="text-block text-muted">5d ago</span>
                                            </td>
                                            <td>
                                                <b class="text-block">$130,530</b>
                                                <span class="text-block text-muted">profit</span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Message buyers"><i class="fa fa-envelope"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Refresh data"><i class="fa fa-refresh"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-file"></i></a>
                                            </td>
                                            <td>
                                                <span class="label label-primary label-circle label-stroke">&nbsp;</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="http://img.djavaui.com/?create=50x50,6880B0?f=ffffff" alt="...">
                                            </td>
                                            <td>
                                                <b class="text-block">Team USA Soccer</b>
                                            </td>
                                            <td>
                                                <b class="text-block">75 of 100</b>
                                                <span class="text-block text-muted">want this</span>
                                                <div class="progress progress-xxs no-margin">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <b class="text-block">Ended</b>
                                                <span class="text-block text-muted">10d ago</span>
                                            </td>
                                            <td>
                                                <b class="text-block text-muted">N/A</b>
                                                <span class="text-block text-muted">not funded</span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Message buyers"><i class="fa fa-envelope"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Refresh data"><i class="fa fa-refresh"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-file"></i></a>
                                            </td>
                                            <td>
                                                <span class="label label-primary label-circle label-stroke">&nbsp;</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="http://img.djavaui.com/?create=50x50,6880B0?f=ffffff" alt="...">
                                            </td>
                                            <td>
                                                <b class="text-block">Team USA Eagle</b>
                                            </td>
                                            <td>
                                                <b class="text-block">25 of 30</b>
                                                <span class="text-block text-muted">want this</span>
                                                <div class="progress progress-xxs no-margin">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <b class="text-block">Ended</b>
                                                <span class="text-block text-muted">12d ago</span>
                                            </td>
                                            <td>
                                                <b class="text-block text-muted">N/A</b>
                                                <span class="text-block text-muted">not funded</span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Message buyers"><i class="fa fa-envelope"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Refresh data"><i class="fa fa-refresh"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-file"></i></a>
                                            </td>
                                            <td>
                                                <span class="label label-primary label-circle label-stroke">&nbsp;</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="http://img.djavaui.com/?create=50x50,6880B0?f=ffffff" alt="...">
                                            </td>
                                            <td>
                                                <b class="text-block">Worn USA Flag</b>
                                            </td>
                                            <td>
                                                <b class="text-block">13 of 15</b>
                                                <span class="text-block text-muted">want this</span>
                                                <div class="progress progress-xxs no-margin">
                                                    <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                                                </div>
                                            </td>
                                            <td>
                                                <b class="text-block">Ended</b>
                                                <span class="text-block text-muted">15d ago</span>
                                            </td>
                                            <td>
                                                <b class="text-block text-muted">N/A</b>
                                                <span class="text-block text-muted">not funded</span>
                                            </td>
                                            <td>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View edit"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Settings"><i class="fa fa-cog"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Message buyers"><i class="fa fa-envelope"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="Refresh data"><i class="fa fa-refresh"></i></a>
                                                <a href="#" class="btn btn-default btn-xs" data-toggle="tooltip" data-placement="top" data-original-title="View detail"><i class="fa fa-file"></i></a>
                                            </td>
                                            <td>
                                                <span class="label label-primary label-circle label-stroke">&nbsp;</span>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div><!-- /.panel-body -->
                        </div>
                        <!--/ End seller dashboard -->

                        <!-- Start order locations -->
                        <div class="panel">
                            <div class="panel-heading">
                                <h3 class="panel-title text-center">Order Locations</h3>
                            </div><!-- /.panel-heading -->
                            <div class="panel-body no-padding">
                                <div id="map-order-locations" class="map" style="height: 450px; position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default;"><div style="z-index: 1; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; position: absolute; left: 61px; top: 118px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 317px; top: 118px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 317px; top: -138px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 61px; top: -138px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 61px; top: 374px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 317px; top: 374px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -195px; top: 118px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 573px; top: 118px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -195px; top: 374px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 573px; top: -138px;"></div><div style="width: 256px; height: 256px; position: absolute; left: -195px; top: -138px;"></div><div style="width: 256px; height: 256px; position: absolute; left: 573px; top: 374px;"></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: -1;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 61px; top: 118px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 317px; top: 118px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 317px; top: -138px;"><canvas draggable="false" height="512" width="512" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 61px; top: -138px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 61px; top: 374px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 317px; top: 374px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -195px; top: 118px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 573px; top: 118px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -195px; top: 374px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 573px; top: -138px;"><canvas draggable="false" height="512" width="512" style="user-select: none; position: absolute; left: 0px; top: 0px; height: 256px; width: 256px;"></canvas></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -195px; top: -138px;"></div><div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 573px; top: 374px;"></div></div></div></div><div style="position: absolute; z-index: 0; left: 0px; top: 0px;"><div style="overflow: hidden; width: 756px; height: 450px;"><img src="http://maps.googleapis.com/maps/api/js/StaticMapService.GetMapImage?1m2&amp;1i451&amp;2i650&amp;2e1&amp;3u3&amp;4m2&amp;1u756&amp;2u450&amp;5m5&amp;1e0&amp;5svi&amp;6sus&amp;10b1&amp;12b1&amp;token=60838" style="width: 756px; height: 450px;"></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div aria-hidden="true" style="position: absolute; left: 0px; top: 0px; z-index: 1; visibility: inherit;"><div style="position: absolute; left: 317px; top: 118px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i3!3i3!4i256!2m3!1e0!2sm!3i384077796!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=104001" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 61px; top: -138px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i2!3i2!4i256!2m3!1e0!2sm!3i384077796!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=43219" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 61px; top: 118px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i2!3i3!4i256!2m3!1e0!2sm!3i384077796!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=100406" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 317px; top: -138px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i3!3i2!4i256!2m3!1e0!2sm!3i384077796!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=46814" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 317px; top: 374px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i3!3i4!4i256!2m3!1e0!2sm!3i384077796!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=30117" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 61px; top: 374px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i2!3i4!4i256!2m3!1e0!2sm!3i384077796!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=26522" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -195px; top: 118px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i1!3i3!4i256!2m3!1e0!2sm!3i384077796!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=96811" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -195px; top: 374px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i1!3i4!4i256!2m3!1e0!2sm!3i384077796!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=22927" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 573px; top: 374px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i4!3i4!4i256!2m3!1e0!2sm!3i384077796!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=33712" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -195px; top: -138px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i1!3i2!4i256!2m3!1e0!2sm!3i384077796!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=39624" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 573px; top: -138px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i4!3i2!4i256!2m3!1e0!2sm!3i384077796!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=50409" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 573px; top: 118px; transition: opacity 200ms ease-out;"><img src="http://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i3!2i4!3i3!4i256!2m3!1e0!2sm!3i384077796!3m9!2svi!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!4e0!5m1!5f2&amp;token=107596" draggable="false" alt="" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"><div style="z-index: 1; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px;"></div></div><div style="z-index: 4; position: absolute; top: 0px; left: 0px; width: 100%; transform-origin: 0px 0px 0px; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" href="https://maps.google.com/maps?ll=25.389691,-34.324952&amp;z=3&amp;t=m&amp;hl=vi&amp;gl=US&amp;mapclient=apiv3" title="Nhấp để xem khu vực này trên Google Maps" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/google4_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 228px; top: 135px;"><div style="padding: 0px 0px 10px; font-size: 16px;">Dữ liệu Bản đồ</div><div style="font-size: 13px;">Dữ liệu bản đồ ©2017 Google, INEGI</div><div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" draggable="false" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 101px; bottom: 0px; width: 172px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="color: rgb(68, 68, 68); text-decoration: none; cursor: pointer; display: none;">Dữ liệu Bản đồ</a><span style="">Dữ liệu bản đồ ©2017 Google, INEGI</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dữ liệu bản đồ ©2017 Google, INEGI</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/vi_US/help/terms_maps.html" target="_blank" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Điều khoản sử dụng</a></div></div><div style="cursor: pointer; width: 25px; height: 25px; overflow: hidden; display: none; margin: 10px 14px; position: absolute; top: 0px; right: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/sv9.png" draggable="false" class="gm-fullscreen-control" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_new" title="Báo cáo lỗi trong bản đồ đường hoặc hình ảnh đến Google" href="https://www.google.com/maps/@25.3896906,-34.3249516,3z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Báo cáo một lỗi bản đồ</a></div></div><div class="gmnoprint gm-bundled-control gm-bundled-control-on-bottom" draggable="false" controlwidth="28" controlheight="93" style="margin: 10px; user-select: none; position: absolute; bottom: 107px; right: 28px;"><div class="gmnoprint" controlwidth="28" controlheight="55" style="position: absolute; left: 0px; top: 38px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 28px; height: 55px;"><div title="Phóng to" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div><div style="position: relative; overflow: hidden; width: 67%; height: 1px; left: 16%; background-color: rgb(230, 230, 230); top: 0px;"></div><div title="Thu nhỏ" style="position: relative; width: 28px; height: 27px; left: 0px; top: 0px;"><div style="overflow: hidden; position: absolute; width: 15px; height: 15px; left: 7px; top: 6px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: -15px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 120px; height: 54px;"></div></div></div></div><div class="gm-svpc" controlwidth="28" controlheight="28" style="background-color: rgb(255, 255, 255); box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; width: 28px; height: 28px; cursor: url(&quot;http://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;) 8 8, default; position: absolute; left: 0px; top: 0px;"><div style="position: absolute; left: 1px; top: 1px;"></div><div style="position: absolute; left: 1px; top: 1px;"><div aria-label="Kiểm soát người hình mắc áo trong chế độ xem phố" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5_hdpi.png" draggable="false" style="position: absolute; left: -147px; top: -26px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Người hình mắc áo ở đầu Bản đồ" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5_hdpi.png" draggable="false" style="position: absolute; left: -147px; top: -52px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div aria-label="Kiểm soát người hình mắc áo trong chế độ xem phố" style="width: 26px; height: 26px; overflow: hidden; position: absolute; left: 0px; top: 0px; visibility: hidden;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/cb_scout5_hdpi.png" draggable="false" style="position: absolute; left: -147px; top: -78px; width: 215px; height: 835px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" controlwidth="28" controlheight="0" style="display: none; position: absolute;"><div title="Xoay bản đồ 90 độ" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; cursor: pointer; background-color: rgb(255, 255, 255); display: none;"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4_hdpi.png" draggable="false" style="position: absolute; left: -141px; top: 6px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div class="gm-tilt" style="width: 28px; height: 28px; overflow: hidden; position: absolute; border-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; top: 0px; cursor: pointer; background-color: rgb(255, 255, 255);"><img src="http://maps.gstatic.com/mapfiles/api-3/images/tmapctrl4_hdpi.png" draggable="false" style="position: absolute; left: -141px; top: -13px; width: 170px; height: 54px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; left: 0px; top: 0px;"><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Hiển thị bản đồ phố" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 35px; font-weight: 500;">Bản đồ</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; left: 0px; top: 29px; text-align: left; display: none;"><div draggable="false" title="Hiển thị bản đồ phố với địa hình" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden; display: none;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Địa hình</label></div></div></div><div class="gm-style-mtc" style="float: left;"><div draggable="false" title="Hiển thị hình ảnh qua vệ tinh" style="direction: ltr; overflow: hidden; text-align: center; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 8px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; -webkit-background-clip: padding-box; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-left: 0px; min-width: 34px;">Vệ tinh</div><div style="background-color: white; z-index: -1; padding: 2px; border-bottom-left-radius: 2px; border-bottom-right-radius: 2px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; position: absolute; right: 0px; top: 29px; text-align: left; display: none;"><div draggable="false" title="Hiển thị hình ảnh có tên phố" style="color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 11px; background-color: rgb(255, 255, 255); padding: 6px 8px 6px 6px; direction: ltr; text-align: left; white-space: nowrap;"><span role="checkbox" style="box-sizing: border-box; position: relative; line-height: 0; font-size: 0px; margin: 0px 5px 0px 0px; display: inline-block; background-color: rgb(255, 255, 255); border: 1px solid rgb(198, 198, 198); border-radius: 1px; width: 13px; height: 13px; vertical-align: middle;"><div style="position: absolute; left: 1px; top: -2px; width: 13px; height: 11px; overflow: hidden;"><img src="http://maps.gstatic.com/mapfiles/mv/imgs8.png" draggable="false" style="position: absolute; left: -52px; top: -44px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none; width: 68px; height: 67px;"></div></span><label style="vertical-align: middle; cursor: pointer;">Nhãn</label></div></div></div></div></div></div></div>
                            </div><!-- /.panel-body -->
                        </div>
                        <!--/ End order locations -->
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="recent-activity">
                    <h3>Recent Activity</h3>
                    <!-- Start recent activity item -->
                    <div class="recent-activity-item recent-activity-warning">
                        <div class="recent-activity-badge">
                            <span class="recent-activity-badge-userpic"></span>
                        </div>
                        <div class="recent-activity-body">
                            <div class="recent-activity-body-head">
                                <div class="recent-activity-body-head-caption">
                                    <h3 class="recent-activity-body-title">New Order</h3>
                                </div>
                            </div>
                            <div class="recent-activity-body-content">
                                <p>
                                    <a href="#">Grace Hudson</a> ordered 2 items ($34.45)
                                    <span class="text-block text-muted">on 02/12/15</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End recent activity item -->

                    <!-- Start recent activity item -->
                    <div class="recent-activity-item recent-activity-primary">
                        <div class="recent-activity-badge">
                            <span class="recent-activity-badge-userpic"></span>
                        </div>
                        <div class="recent-activity-body">
                            <div class="recent-activity-body-head">
                                <div class="recent-activity-body-head-caption">
                                    <h3 class="recent-activity-body-title">New Product</h3>
                                </div>
                            </div>
                            <div class="recent-activity-body-content">
                                <p>
                                    <a href="#">Project Blankon AngularJS</a> <span class="text-muted">was added on 02/12/15 by</span> Aaron Dias
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End recent activity item -->

                    <!-- Start recent activity item -->
                    <div class="recent-activity-item recent-activity-success">
                        <div class="recent-activity-badge">
                            <span class="recent-activity-badge-userpic"></span>
                        </div>
                        <div class="recent-activity-body">
                            <div class="recent-activity-body-head">
                                <div class="recent-activity-body-head-caption">
                                    <h3 class="recent-activity-body-title">New Content Page</h3>
                                </div>
                            </div>
                            <div class="recent-activity-body-content">
                                <p>
                                    <a href="#">About Us</a> <span class="text-muted">was edited on 02/12/15 by</span> Michelle Watkins
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End recent activity item -->

                    <!-- Start recent activity item -->
                    <div class="recent-activity-item recent-activity-success">
                        <div class="recent-activity-badge">
                            <span class="recent-activity-badge-userpic"></span>
                        </div>
                        <div class="recent-activity-body">
                            <div class="recent-activity-body-head">
                                <div class="recent-activity-body-head-caption">
                                    <h3 class="recent-activity-body-title">Theme Edit</h3>
                                </div>
                            </div>
                            <div class="recent-activity-body-content">
                                <p>
                                    <a href="#">Dashboard Blankon</a> <span class="text-muted">was edited on 02/12/15 by</span> Ngadiono CR
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End recent activity item -->

                    <!-- Start recent activity item -->
                    <div class="recent-activity-item recent-activity-danger">
                        <div class="recent-activity-badge">
                            <span class="recent-activity-badge-userpic"></span>
                        </div>
                        <div class="recent-activity-body">
                            <div class="recent-activity-body-head">
                                <div class="recent-activity-body-head-caption">
                                    <h3 class="recent-activity-body-title">New Product</h3>
                                </div>
                            </div>
                            <div class="recent-activity-body-content">
                                <p>
                                    <a href="#">Project Blankon AngularJS</a> <span class="text-muted">was added on 02/12/15 by</span> Aaron Dias
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End recent activity item -->

                    <!-- Start recent activity item -->
                    <div class="recent-activity-item recent-activity-lilac">
                        <div class="recent-activity-badge">
                            <span class="recent-activity-badge-userpic"></span>
                        </div>
                        <div class="recent-activity-body">
                            <div class="recent-activity-body-head">
                                <div class="recent-activity-body-head-caption">
                                    <h3 class="recent-activity-body-title">New Order</h3>
                                </div>
                            </div>
                            <div class="recent-activity-body-content">
                                <p>
                                    <a href="#">Grace Hudson</a> ordered 2 items ($34.45)
                                    <span class="text-block text-muted">on 02/12/15</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End recent activity item -->

                    <!-- Start recent activity item -->
                    <div class="recent-activity-item recent-activity-danger recent-activity-last">
                        <div class="recent-activity-badge">
                            <span class="recent-activity-badge-userpic"></span>
                        </div>
                        <div class="recent-activity-body">
                            <div class="recent-activity-body-head">
                                <div class="recent-activity-body-head-caption">
                                    <h3 class="recent-activity-body-title">New Order</h3>
                                </div>
                            </div>
                            <div class="recent-activity-body-content">
                                <p>
                                    <a href="#">Kelly Newman</a> ordered 4 items ($234.45)
                                    <span class="text-block text-muted">on 02/17/15</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- End recent activity item -->
                </div>
            </div>
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
<!--/ END PAGE CONTENT -->
@stop