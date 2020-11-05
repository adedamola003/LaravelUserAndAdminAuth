@extends('layouts.adminApp')

@section('pageTitle', 'Admin Dashboard')


@section('dashBoardTitleIcon')
<i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
@endsection

@section('dashboardTitle')
    Admin Dashboard
@endsection

@section('dashboardTitleButton')
    {{--<div class="page-title-actions">
        <div class="d-inline-block dropdown">
            <button type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="fa fa-business-time fa-w-20"></i>
                </span>
                Add Admin
            </button>
        </div>
    </div> --}}
@endsection

@section('dashboardActive')
    class="mm-active"
@endsection

@section('content')
<div class="row">
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Total Orders</div>
                        <div class="widget-subheading">Last year expenses</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">1896</div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-sm progress">
                        <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                    </div>
                    <div class="progress-sub-label">
                        <div class="sub-label-left">YoY Growth</div>
                        <div class="sub-label-right">100%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Products Sold</div>
                        <div class="widget-subheading">Revenue streams</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">$3M</div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                        <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;"></div>
                    </div>
                    <div class="progress-sub-label">
                        <div class="sub-label-left">Sales</div>
                        <div class="sub-label-right">100%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Followers</div>
                        <div class="widget-subheading">People Interested</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-danger">45,9%</div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                        <div class="progress-bar bg-success" role="progressbar" aria-valuenow="46" aria-valuemin="0" aria-valuemax="100" style="width: 46%;"></div>
                    </div>
                    <div class="progress-sub-label">
                        <div class="sub-label-left">Twitter Progress</div>
                        <div class="sub-label-right">100%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content">
            <div class="widget-content-outer">
                <div class="widget-content-wrapper">
                    <div class="widget-content-left">
                        <div class="widget-heading">Income</div>
                        <div class="widget-subheading">Expected totals</div>
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-focus">$147</div>
                    </div>
                </div>
                <div class="widget-progress-wrapper">
                    <div class="progress-bar-sm progress-bar-animated-alt progress">
                        <div class="progress-bar bg-info" role="progressbar" aria-valuenow="54" aria-valuemin="0" aria-valuemax="100" style="width: 54%;"></div>
                    </div>
                    <div class="progress-sub-label">
                        <div class="sub-label-left">Expenses</div>
                        <div class="sub-label-right">100%</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12 col-lg-6 col-xl-5">
        <div class="mb-3 card">
            <div class="card-header-tab card-header-tab-animation card-header">
                <div class="card-header-title">
                    <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                    Sales Report
                </div>
                <ul class="nav">
                    <li class="nav-item"><a data-toggle="tab" href="#tabs-eg-77" class="active nav-link">Last</a></li>
                    <li class="nav-item"><a data-toggle="tab" href="#tabs-eg-88" class="nav-link second-tab-toggle">Current</a></li>
                </ul>
            </div>
            <div class="card-body">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs-eg-77">
                        <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-content pt-3 pr-3 pl-3">
                                    <div class="widget-chart-flex">
                                        <div class="widget-numbers">
                                            <div class="widget-chart-flex">
                                                <div>
                                                    <small class="opacity-5">$</small>
                                                    <span>368</span></div>
                                                <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">Total Leads</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                    <div id="dashboard-sparkline-carousel-3"></div>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Top Authors</h6>
                        <div class="scroll-area-sm">
                            <div class="scrollbar-container">
                                <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                    <div class="widget-subheading">Web Developer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>129</span>
                                                        <small class="text-danger pl-2">
                                                            <i class="fa fa-angle-down"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ruben Tillman</div>
                                                    <div class="widget-subheading">UI Designer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>54</span>
                                                        <small class="text-success pl-2">
                                                            <i class="fa fa-angle-up"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Vinnie Wagstaff</div>
                                                    <div class="widget-subheading">Java Programmer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>429</span>
                                                        <small class="text-warning pl-2">
                                                            <i class="fa fa-dot-circle"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                    <div class="widget-subheading">Web Developer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>129</span>
                                                        <small class="text-danger pl-2">
                                                            <i class="fa fa-angle-down"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ruben Tillman</div>
                                                    <div class="widget-subheading">UI Designer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>54</span>
                                                        <small class="text-success pl-2">
                                                            <i class="fa fa-angle-up"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tabs-eg-88">
                        <div class="card mb-3 widget-chart widget-chart2 text-left w-100">
                            <div class="widget-chat-wrapper-outer">
                                <div class="widget-chart-content p-3">
                                    <div class="widget-chart-flex">
                                        <div class="widget-numbers">
                                            <div class="widget-chart-flex">
                                                <div>
                                                    <small class="opacity-5">$</small>
                                                    <span>851</span></div>
                                                <div class="widget-title ml-2 opacity-5 font-size-lg text-muted">Sales Total</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-chart-wrapper widget-chart-wrapper-lg opacity-10 m-0">
                                    <div id="dashboard-sparklines-333"></div>
                                </div>
                            </div>
                        </div>
                        <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Last Month Highlights</h6>
                        <div class="scroll-area-sm">
                            <div class="scrollbar-container">
                                <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                    <div class="widget-subheading">Web Developer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>129</span>
                                                        <small class="text-danger pl-2">
                                                            <i class="fa fa-angle-down"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/10.jpg" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ruben Tillman</div>
                                                    <div class="widget-subheading">UI Designer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>54</span>
                                                        <small class="text-success pl-2">
                                                            <i class="fa fa-angle-up"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3"><img width="42" class="rounded-circle" src="assets/images/avatars/9.jpg" alt=""></div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Vinnie Wagstaff</div>
                                                    <div class="widget-subheading">Java Programmer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>429</span>
                                                        <small class="text-warning pl-2">
                                                            <i class="fa fa-dot-circle"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                    <div class="widget-subheading">Web Developer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>129</span>
                                                        <small class="text-danger pl-2">
                                                            <i class="fa fa-angle-down"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/8.jpg" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ruben Tillman</div>
                                                    <div class="widget-subheading">UI Designer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>54</span>
                                                        <small class="text-success pl-2">
                                                            <i class="fa fa-angle-up">
                                                            </i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/5.jpg" alt="">
                                                </div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ella-Rose Henry</div>
                                                    <div class="widget-subheading">Web Developer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>129</span>
                                                        <small class="text-danger pl-2">
                                                            <i class="fa fa-angle-down"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item">
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <img width="42" class="rounded-circle" src="assets/images/avatars/4.jpg" alt=""></div>
                                                <div class="widget-content-left">
                                                    <div class="widget-heading">Ruben Tillman</div>
                                                    <div class="widget-subheading">UI Designer</div>
                                                </div>
                                                <div class="widget-content-right">
                                                    <div class="font-size-xlg text-muted">
                                                        <small class="opacity-5 pr-1">$</small>
                                                        <span>54</span>
                                                        <small class="text-success pl-2">
                                                            <i class="fa fa-angle-up"></i>
                                                        </small>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-6 col-xl-7">
        <div class="mb-3 card">
            <div class="card-header-tab card-header">
                <div class="card-header-title">
                    <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                    Bandwidth Reports
                </div>
                <div class="btn-actions-pane-right">
                    <div class="nav">
                        <a href="#tab-eg-55" data-toggle="tab" class="border-0 btn-pill btn-wide btn-transition active btn btn-outline-alternate">Tab 1</a>
                        <a href="#tab-eg-66" data-toggle="tab" class="ml-1 btn-pill btn-wide border-0 btn-transition  btn btn-outline-alternate second-tab-toggle-alt">Tab 2</a>
                    </div>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="tab-eg-55">
                    <div class="widget-chart p-0">
                        <div id="bar-vertical-candle-lg"></div>
                        <div class="widget-chart-content">
                            <div class="widget-description mt-0 text-warning">
                                <i class="fa fa-arrow-left"></i>
                                <span class="pl-1">175.5%</span>
                                <span class="text-muted opacity-8 pl-1">increased server resources</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-numbers fsize-3 text-muted">63%</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="text-muted opacity-6">Generated Leads</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper mt-1">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="63" aria-valuemin="0" aria-valuemax="100" style="width: 63%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-numbers fsize-3 text-muted">32%</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="text-muted opacity-6">Submitted Tickers</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper mt-1">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-success" role="progressbar" aria-valuenow="32" aria-valuemin="0" aria-valuemax="100" style="width: 32%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-numbers fsize-3 text-muted">71%</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="text-muted opacity-6">Server Allocation</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper mt-1">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-primary" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-numbers fsize-3 text-muted">41%</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="text-muted opacity-6">Generated Leads</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper mt-1">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="41" aria-valuemin="0" aria-valuemax="100" style="width: 41%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="tab-eg-66">
                    <div class="widget-chart p-0">
                        <div id="dashboard-sparkline-37"></div>
                        <div class="widget-chart-content">
                            <div class="widget-description mt-0 text-success">
                                <i class="fa fa-arrow-up"></i>
                                <span class="pr-1">37.2%</span>
                                <span class="text-muted opacity-8">performance increase</span>
                            </div>
                        </div>
                    </div>
                    <div class="pt-2 card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-numbers fsize-3 text-muted">23%</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="text-muted opacity-6">Deploys</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper mt-1">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-warning" role="progressbar" aria-valuenow="23" aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-numbers fsize-3 text-muted">76%</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="text-muted opacity-6">Traffic</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper mt-1">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-info" role="progressbar" aria-valuenow="76" aria-valuemin="0" aria-valuemax="100" style="width: 76%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-numbers fsize-3 text-muted">83%</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="text-muted opacity-6">Servers Load</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper mt-1">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="83" aria-valuemin="0" aria-valuemax="100" style="width: 83%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget-content">
                                    <div class="widget-content-outer">
                                        <div class="widget-content-wrapper">
                                            <div class="widget-content-left">
                                                <div class="widget-numbers fsize-3 text-muted">48%</div>
                                            </div>
                                            <div class="widget-content-right">
                                                <div class="text-muted opacity-6">Reportd Bugs</div>
                                            </div>
                                        </div>
                                        <div class="widget-progress-wrapper mt-1">
                                            <div class="progress-bar-sm progress-bar-animated-alt progress">
                                                <div class="progress-bar bg-alternate" role="progressbar" aria-valuenow="48" aria-valuemin="0" aria-valuemax="100" style="width: 48%;"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-6 col-lg-4 col-xl-4">
        <div class="card-hover-shadow-2x mb-3 card">
            <div class="rm-border responsive-center text-left card-header">
                <div><h5 class="menu-header-title text-capitalize text-success">Received Messages</h5></div>
            </div>
            <div class="widget-chart widget-chart2 text-left pt-0">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                    <div class="text-success"><span>348</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                        <div id="dashboard-sparkline-3"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-4 col-xl-4">
        <div class="card-hover-shadow-2x mb-3 card">
            <div class="rm-border responsive-center text-left card-header">
                <div><h5 class="menu-header-title text-capitalize text-danger">Sent Messages</h5></div>
            </div>
            <div class="widget-chart widget-chart2 text-left pt-0">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                    <div class="text-danger"><span>425</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                        <div id="dashboard-sparkline-1"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-lg-4 col-xl-4">
        <div class="card-hover-shadow-2x mb-3 card bg-dark">
            <div class="rm-border bg-dark responsive-center text-left card-header">
                <div><h5 class="menu-header-title text-capitalize text-warning">Inbox Total</h5></div>
            </div>
            <div class="widget-chart widget-chart2 text-left pt-0">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                    <div class="text-warning"><span>274</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-10 m-0">
                        <div id="dashboard-sparkline-4"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="main-card mb-3 card">
            <div class="card-header">Active Users
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                        <button class="active btn btn-focus">Last Week</button>
                        <button class="btn btn-focus">All Month</button>
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th>Name</th>
                        <th class="text-center">City</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Sales</th>
                        <th class="text-center">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="text-center text-muted">#345</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="assets/images/avatars/4.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">John Doe</div>
                                        <div class="widget-subheading opacity-7">Web Developer</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">Madrid</td>
                        <td class="text-center">
                            <div class="badge badge-warning">Pending</div>
                        </td>
                        <td class="text-center" style="width: 150px;">
                            <div class="pie-sparkline">2,4,6,9,4</div>
                        </td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Details</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center text-muted">#347</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="assets/images/avatars/3.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Ruben Tillman</div>
                                        <div class="widget-subheading opacity-7">Etiam sit amet orci eget</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">Berlin</td>
                        <td class="text-center">
                            <div class="badge badge-success">Completed</div>
                        </td>
                        <td class="text-center" style="width: 150px;">
                            <div id="sparkline-chart4"></div>
                        </td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-2" class="btn btn-primary btn-sm">Details</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center text-muted">#321</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="assets/images/avatars/2.jpg" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Elliot Huber</div>
                                        <div class="widget-subheading opacity-7">Lorem ipsum dolor sic</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">London</td>
                        <td class="text-center">
                            <div class="badge badge-danger">In Progress</div>
                        </td>
                        <td class="text-center" style="width: 150px;">
                            <div id="sparkline-chart8"></div>
                        </td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-3" class="btn btn-primary btn-sm">Details</button>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center text-muted">#55</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="assets/images/avatars/1.jpg" alt=""></div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">Vinnie Wagstaff</div>
                                        <div class="widget-subheading opacity-7">UI Designer</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">Amsterdam</td>
                        <td class="text-center">
                            <div class="badge badge-info">On Hold</div>
                        </td>
                        <td class="text-center" style="width: 150px;">
                            <div id="sparkline-chart9"></div>
                        </td>
                        <td class="text-center">
                            <button type="button" id="PopoverCustomT-4" class="btn btn-primary btn-sm">Details</button>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
            <div class="d-block text-center card-footer">
                <button class="mr-2 btn-icon btn-icon-only btn btn-outline-danger"><i class="pe-7s-trash btn-icon-wrapper"> </i></button>
                <button class="btn-wide btn btn-success">Save</button>
            </div>
        </div>
    </div>
</div>

@endsection
