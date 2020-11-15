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
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-success">{{$totalOrders}}</div>
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
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-warning">${{formatMoney($totalOrdervalue)}}</div>
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
                    </div>
                    <div class="widget-content-right">
                        <div class="widget-numbers text-danger">45,9%</div>
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
    <div class="col-md-6 col-lg-4 col-xl-4">
        <div class="card-hover-shadow-2x mb-3 card">
            <div class="rm-border responsive-center text-left card-header">
                <div><h5 class="menu-header-title text-capitalize text-success">Resolved Compliants</h5></div>
            </div>
            <div class="widget-chart widget-chart2 text-left pt-0">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                    <div class="text-success"><span>{{$allCompliantData->where('status', 1)->count()}}</span></div>
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
                <div><h5 class="menu-header-title text-capitalize text-danger">Pending Compliants</h5></div>
            </div>
            <div class="widget-chart widget-chart2 text-left pt-0">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                    <div class="text-danger"><span>{{$allCompliantData->where('status', 0)->count()}}</span></div>
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
                <div><h5 class="menu-header-title text-capitalize text-warning">All Compliants</h5></div>
            </div>
            <div class="widget-chart widget-chart2 text-left pt-0">
                <div class="widget-chat-wrapper-outer">
                    <div class="widget-chart-content">
                        <div class="widget-chart-flex">
                            <div class="widget-numbers">
                                <div class="widget-chart-flex">
                                    <div class="text-warning"><span>{{$allCompliantData->count()}}</span></div>
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
            <div class="card-header">All Users
                <div class="btn-actions-pane-right">
                    <div role="group" class="btn-group-sm btn-group">
                    </div>
                </div>
            </div>
            <div class="table-responsive">
                <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center">#</th>
                        <th class="text-center"> Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Address</th>
                        <th class="text-center">Total Orders</th>
                        <th class="text-center">Phone No</th>
                    </tr>
                    </thead>
                    <tbody>
                   
                    @php
                    $i=1;
                    @endphp
                    @foreach($allUserData as $userData)
                    <tr>
                        <td class="text-center text-muted">#{{$i}}</td>
                        <td>
                            <div class="widget-content p-0">
                                <div class="widget-content-wrapper">
                                    
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading">{{$userData->name}}</div>
                                        {{--<div class="widget-subheading opacity-7">{{$userData->address}}</div>--}}
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">{{$userData->email}}</td>
                        <td class="text-center">
                            {{$userData->address}}
                        </td>
                        <td class="text-center" >
                             {{$userData->orders->count()}}
                        </td>
                        <td class="text-center">
                             {{$userData->phone_no}}
                        </td>
                    </tr>
                    @php
                    $i++;
                    @endphp
                    @endforeach

                    </tbody>
                </table>
            </div>
            <div class="d-block text-center card-footer">
            </div>
        </div>
    </div>
</div>

@endsection
