@extends('layouts.adminApp')

@section('pageTitle', 'Manage Administrators')


@section('dashBoardTitleIcon')
<i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
@endsection

@section('dashboardTitle')
    Manage Administrators
@endsection

@section('dashboardTitleButton')
    <div class="page-title-actions">
        <div class="d-inline-block dropdown">
            <button type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="fa fa-business-time fa-w-20"></i>
                </span>
                Add Admin
            </button>
        </div>
    </div> 
@endsection

@section('manageAdminsActive')
    class="mm-active"
@endsection

@section('content')
<div class="main-card mb-3 card">
    <div class="card-body">
        <div class="table-responsive"> 
        <table style="width: 100%;" id="datatablesg" class="table table-hover table-striped table-bordered">
            <thead>
            <tr>
                <th>S/No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Status</th>
                <th>Role</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @php
            $i=1;
            @endphp
            @foreach($allAdminData as $adminData)
            <tr>
                <td>{{$i}}</td>
                <td>{{$adminData->name}}</td>
                <td>{{$adminData->email}}</td>
                <td>
                    @if($adminData->status == '1')
                        <label class="tag tag-pill tag-success"> Active </label>
                    @elseif($adminData->status == '0')
                        <label class="tag tag-pill tag-danger"> Inactive </label>
                    @endif
                </td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            @php
            $i++;
            @endphp
            @endforeach
            
            
            </tbody>
            <tfoot>
            <tr>
                <th>S/No</th>
                <th>Name</th>
                <th>Email</th>
                <th>Statue</th>
                <th>Role</th>
                <th>Edit</th>
            </tr>
            </tfoot>
        </table>
        </div>
    </div>
</div>
@endsection

@section('extraJS')

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
    $('#datatablesg').DataTable();
} )
</script>

@endsection
