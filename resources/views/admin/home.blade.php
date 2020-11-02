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

@endsection
