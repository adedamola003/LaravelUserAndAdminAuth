@extends('layouts.userApp')

@section('pageTitle', 'Dashboard')


@section('dashBoardTitleIcon')
<i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
@endsection

@section('dashboardTitle')
    Dashboard
@endsection

@section('dashboardTitleButton')
@endsection

@section('dashboardActive')
    class="mm-active"
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-night-fade">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Orders</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>{{$totalOrders}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Order value</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>$ {{formatMoney($totalOrdervalue)}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-happy-green">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Last Order Date</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white fsize-3"><span>{{$lastOrderDate ? $lastOrderDate : 'No Order Yet'}}</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-premium-dark">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Products Sold</div>
                    <div class="widget-subheading">Revenue streams</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-warning"><span>$14M</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
                            <div class="col-lg-12 col-xl-12">
                                <div class="row">
                                    <div class="col-md-6 col-lg-6 col-xl-6">
                                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-numbers">
                                                            <div class="widget-chart-flex">
                                                                <div class="fsize-4">
                                                                    <small class="opacity-5"></small>
                                                                    <span>{{$ordersThisMonth}}</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="widget-subheading mb-0 opacity-5">Orders this month</h6></div>
                                                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                                    <div class="col-md-9">
                                                        <div id="dashboard-sparklines-1"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-6">
                                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-numbers">
                                                            <div class="widget-chart-flex">
                                                                <div class="fsize-4">
                                                                    <small class="opacity-5">$</small>
                                                                    <span>{{formatMoney($ordersValueThisMonth)}}</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="widget-subheading mb-0 opacity-5">Orders Value Income</h6></div>
                                                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                                    <div class="col-md-9">
                                                        <div id="dashboard-sparklines-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-6">
                                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-numbers">
                                                            <div class="widget-chart-flex">
                                                                <div class="fsize-4">
                                                                    <small class="opacity-5"></small>
                                                                    <span>{{$ordersLastMonth}}</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="widget-subheading mb-0 opacity-5">last month Orders</h6></div>
                                                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                                    <div class="col-md-9">
                                                        <div id="dashboard-sparklines-3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 col-xl-6">
                                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-numbers">
                                                            <div class="widget-chart-flex">
                                                                <div class="fsize-4">
                                                                    <small class="opacity-5">$</small>
                                                                    <span>{{formatMoney($ordersValueLastMonth)}}</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="widget-subheading mb-0 opacity-5">Order value last month</h6></div>
                                                <div class="no-gutters widget-chart-wrapper mt-3 mb-3 pl-2 he-auto row">
                                                    <div class="col-md-9">
                                                        <div id="dashboard-sparklines-4"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>

@endsection
