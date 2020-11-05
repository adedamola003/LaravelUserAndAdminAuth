@extends('layouts.userApp')

@section('pageTitle', 'Dashboard')


@section('dashBoardTitleIcon')
<i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
@endsection

@section('dashboardTitle')
    Dashboard
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
        <div class="card mb-3 widget-content bg-night-fade">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Total Orders</div>
                    <div class="widget-subheading">Last year expenses</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>1896</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Clients</div>
                    <div class="widget-subheading">Total Clients Profit</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>$ 568</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-happy-green">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Followers</div>
                    <div class="widget-subheading">People Interested</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>46%</span></div>
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
                            <div class="col-lg-12 col-xl-6">
                                <div class="row">
                                    <div class="col-md-6 col-lg-3 col-xl-6">
                                        <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                                            <div class="widget-chat-wrapper-outer">
                                                <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                    <div class="widget-chart-flex">
                                                        <div class="widget-numbers">
                                                            <div class="widget-chart-flex">
                                                                <div class="fsize-4">
                                                                    <small class="opacity-5">$</small>
                                                                    <span>874</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="widget-subheading mb-0 opacity-5">sales last month</h6></div>
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
                                                                    <span>1283</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="widget-subheading mb-0 opacity-5">sales Income</h6></div>
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
                                                                    <small class="opacity-5">$</small>
                                                                    <span>1286</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="widget-subheading mb-0 opacity-5">last month sales</h6></div>
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
                                                                    <span>564</span></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <h6 class="widget-subheading mb-0 opacity-5">total revenue</h6></div>
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
                            <div class="col-lg-12 col-xl-6">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-rocket icon-gradient bg-tempting-azure"> </i>
                                            Bandwidth Reports
                                        </div>
                                        <div class="btn-actions-pane-right text-capitalize">
                                            <button class="btn-wide btn-outline-2x btn btn-outline-primary btn-sm">View All</button>
                                        </div>
                                    </div>
                                    <div class="pt-2 pb-0 card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="widget-content mt-2">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left pr-2 fsize-1">
                                                                <div class="widget-numbers fsize-3 text-alternate">61%</div>
                                                            </div>
                                                            <div class="widget-content-right w-100">
                                                                <div class="progress-bar-xs progress">
                                                                    <div class="progress-bar bg-alternate" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left fsize-1">
                                                            <div class="text-muted opacity-6">Server Target</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="widget-content mt-2">
                                                    <div class="widget-content-outer">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left pr-2 fsize-1">
                                                                <div class="widget-numbers fsize-3 text-danger">71%</div>
                                                            </div>
                                                            <div class="widget-content-right w-100">
                                                                <div class="progress-bar-xs progress">
                                                                    <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="71" aria-valuemin="0" aria-valuemax="100" style="width: 71%;"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-left fsize-1">
                                                            <div class="text-muted opacity-6">Income Target</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget-chart p-0">
                                        <div id="dashboard-sparklines-primary"></div>
                                    </div>
                                    <div class="divider mb-0"></div>
                                    <div class="grid-menu grid-menu-2col">
                                        <div class="no-gutters row">
                                            <div class="p-2 col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                                    <i class="lnr-lighter text-success opacity-7 btn-icon-wrapper mb-2"> </i>
                                                    Accounts
                                                </button>
                                            </div>
                                            <div class="p-2 col-sm-6">
                                                <button class="btn-icon-vertical btn-transition-text btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-alternate">
                                                    <i class="lnr-gift text-alternate opacity-7 btn-icon-wrapper mb-2"> </i>
                                                    Services
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-5">
                                <div class="row">
                                    <div class="col-md-6 col-lg-12">
                                        <div class="card-hover-shadow-2x mb-3 card-btm-border card-shadow-primary border-primary card">
                                            <div class="rm-border pb-0 mt-sm-3 responsive-center card-header">
                                                <div>
                                                    <h5 class="menu-header-title text-capitalize fsize-2 text-muted text-left opacity-6">Received Messages</h5>
                                                </div>
                                            </div>
                                            <div class="widget-chart widget-chart2 text-left p-0">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content pt-3 pr-3 pl-5">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">
                                                                <div class="widget-chart-flex">
                                                                    <div class="text-primary"><span>348</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-3 m-0 p-1">
                                                        <div id="dashboard-sparkline-3"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-12">
                                        <div class="card-hover-shadow-2x mb-3 card-btm-border card-shadow-danger border-danger card">
                                            <div class="rm-border pb-0 mt-sm-3 responsive-center card-header">
                                                <div>
                                                    <h5 class="menu-header-title text-capitalize fsize-2 text-muted text-left opacity-6">Sent Messages</h5>
                                                </div>
                                            </div>
                                            <div class="widget-chart widget-chart2 text-left p-0">
                                                <div class="widget-chat-wrapper-outer">
                                                    <div class="widget-chart-content pt-3 pr-3 pl-5">
                                                        <div class="widget-chart-flex">
                                                            <div class="widget-numbers">
                                                                <div class="widget-chart-flex">
                                                                    <div class="text-danger"><span>425</span></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="widget-chart-wrapper widget-chart-wrapper-lg he-auto opacity-3 m-0 p-1">
                                                        <div id="dashboard-sparkline-2"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="mb-3 card">
                                    <div class="card-header-tab card-header-tab-animation card-header">
                                        <div class="card-header-title">
                                            <i class="header-icon lnr-apartment icon-gradient bg-love-kiss"> </i>
                                            Sales Report
                                        </div>
                                        <div class="btn-actions-pane-right text-capitalize">
                                            <button class="btn-wide btn-outline-2x btn btn-outline-success btn-sm">View All</button>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active show" id="tab-eg-11">
                                                <div class="card mb-3 widget-chart widget-chart2 text-left p-0">
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
                                                        <div class="widget-chart-wrapper he-auto opacity-10 m-0">
                                                            <div id="dashboard-sparkline-carousel-2"></div>
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
                                                <div class="divider"></div>
                                                <h6 class="text-muted text-uppercase font-size-md opacity-5 font-weight-normal">Last Month Top Seller</h6>
                                                <ul class="rm-list-borders rm-list-borders-scroll list-group list-group-flush">
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
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
@endsection
