@extends('layouts.adminApp')

@section('pageTitle', 'Manage Orders')


@section('dashBoardTitleIcon')
<i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
@endsection

@section('dashboardTitle')
    Manage Orders
@endsection

@section('dashboardTitleButton')
    <div class="page-title-actions">
        <div class="d-inline-block dropdown">
            <button type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info" data-toggle="modal" data-target="#addNewAdmin">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="fa fa-business-time fa-w-20"></i>
                </span>
                Add Order
            </button>
        </div>
    </div> 
@endsection

@section('ordersActive')
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
                <th>Order Nos</th>
                <th>Owner</th>
                <th>Order Date</th>
                <th>Amount</th>
                <th class="text-center">Status</th>
                <th class="text-center">Approved Date</th>
                <th class="text-center">Action</th>
            </tr>
            </thead>
            <tbody>
            @php
            $i=1;
            @endphp
            @foreach($allOrderData as $orderData)

            <tr>
                <td>{{$i}}</td>
                <td>10000{{$orderData->id}}</td>
                <td>{{ucfirst($orderData->owner->name)}}</td>
                <td>{{formatDate($orderData->order_date)}}</td>
                <td>${{formatMoney($orderData->amount)}}</td>
                <td class="text-center">
                    @if($orderData->status == '0')
                        <button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-warning">Pending</button>
                    @elseif($orderData->status == '1')
                        <button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-success">Approved</button>
                    @elseif($orderData->status == '2')
                        <button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-danger">Declined</button>
                    @endif
                </td>
                <td class="text-center"><button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-info">{{$orderData->approved_date ? $orderData->approved_date : 'Pending Approval' }}</button></td>
                <td class="text-center"> 
                <a href="/admin/orders-view/{{$orderData->id}}"><button type="button" class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-warning" >VIEW </button> </a>
                    @if($orderData->status == '0')
                        <form action="/admin/orders-approve/{{$orderData->id}}" method="POST">
                        {{ csrf_field() }}

                           <button type="submit" class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-success" onclick="if (!confirm('Are you sure?')) { return false }">APPROVE </button>
                        
                        </form>

                        <form action="/admin/orders-decline/{{$orderData->id}}" method="POST">
                            {{ csrf_field() }}

                            <button type="submit" class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-danger" onclick="if (!confirm('Are you sure?')) { return false }">DECLINE </button> 
                        
                        </form>
                     @endif
                </td>
            </tr>
            @php
            $i++;
            @endphp
            @endforeach
            
            
            </tbody>
            <tfoot>
            <tr>
                <th>S/No</th>
                <th>Order Nos</th>
                <th>Owner</th>
                <th>Order Date</th>
                <th>Amount</th>
                <th class="text-center">Status</th>
                <th class="text-center">Approved Date</th>
                <th class="text-center">Action</th>
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
    var table = $('#datatablesg').DataTable();
    
  
});
</script>


@endsection

