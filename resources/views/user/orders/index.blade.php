@extends('layouts.userApp')

@section('pageTitle', 'Dashboard')


@section('dashBoardTitleIcon')
<i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
@endsection

@section('dashboardTitle')
    Orders
@endsection

@section('dashboardTitleButton')
    <div class="page-title-actions">
        <div class="d-inline-block dropdown">
            <button type="button" aria-haspopup="true" aria-expanded="false" class="btn-shadow btn btn-info" data-toggle="modal" data-target="#addNewOrder">
                <span class="btn-icon-wrapper pr-2 opacity-7">
                    <i class="fa fa-business-time fa-w-20"></i>
                </span>
                New Order
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
                <th>Order Date</th>
                <th>Amount</th>
                <th class="text-center">Status</th>
                <th class="text-center">Approved Date</th>
                <th>Action</th>
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
                <td>{{formatDate($orderData->order_date)}}</td>
                <td>${{formatMoney($orderData->amount)}}</td>
                <td class="text-center">
                    @if($orderData->status == '0')
                        <button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-warning">Pending</button>
                    @elseif($orderData->status == '1')
                        <button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-success">Approved</button>
                    @endif
                </td>
                <td class="text-center"><button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-info">{{$orderData->approved_date ? $orderData->approved_date : 'Pending Approval' }}</button></td>
                <td> <a href="/orders-view/{{$orderData->id}}"><button type="button" href="" class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-warning editBiller" >VIEW </button> </a> </td>
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
                <th>Order Date</th>
                <th>Amount</th>
                <th class="text-center">Status</th>
                <th class="text-center">Approved Date</th>
                <th>Action</th>
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

@section('modal')
    
{{--Add New Order--}}
<div class="modal fade" id="addNewOrder" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add New Order</h5>
                
            </div>
              <form action="/orders-newOrder" method="POST">
            {{ csrf_field() }}
                <div class="modal-body">
                    
                    @foreach($allProductData as $productData)
                
                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="position-relative form-group">
                                <label>Item Name</label>
                                <input type="text" class="form-control" name="{{$productData->name}}" value="{{$productData->name}}"  required readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label>Item Price($)</label>
                                <input type="text" class="form-control" name="{{$productData->name.'Price'}}" value="{{formatMoney($productData->price)}}"  required readonly>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="position-relative form-group">
                                <label>Item Quantity</label>
                                <input type="number"  onkeypress="return (event.charCode == 8 || event.charCode == 0 || event.charCode == 13) ? null : event.charCode >= 48 && event.charCode <= 57" class="form-control" name="{{$productData->name.'Quantity'}}" value="0"  required>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="border-0 mr-2 btn-transition btn btn-primary" onclick="if (!confirm('Are you sure?')) { return false }">Add To Cart</button>
                </div>
            </form>
        </div>
    </div>
</div>
{{--End New Order Modal--}}

@endsection
