@extends('layouts.userApp')

@section('pageTitle', 'Dashboard')


@section('dashBoardTitleIcon')
<i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
@endsection

@section('dashboardTitle')
   Approve Order
@endsection




@section('ordersActive')
    class="mm-active"
@endsection

@section('content')
 <div class="container">
  



  <div class="row mb-2">
    

    <div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col-4 d-none bg-primaryTone d-lg-block">
              <div class="mb-3 bg-primaryTone widget-content">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="menu-header-title2">Approve Order</div>
                                        </div>
                                    </div>
                                </div>                        
         </div>

         <div class="col-8 p-4 d-flex flex-column position-static">


           <div class="tab-pane active" id="profile">
                    <div class="row">
                         <form action="/orders-newOrder-approve-submit" method="post">
                                    {{ csrf_field() }}
                                        <div class="form-row">
                                            @php
                                            $i=1;
                                            @endphp
                                            @foreach($validatedData[1] as $orderData)
                                            <div class="col-md-4">
                                                <label><strong>Item Name</strong></label>
                                                <div class="position-relative form-group"><input type="text"  value="{{$orderData['name']}}" disabled class="form-control"></div>
                                            </div>
                                            <div class="col-md-2">
                                                <label><strong>Quantity</strong></label>
                                                <div class="position-relative form-group"><input type="text" value="{{$orderData['quantity']}}" disabled class="form-control"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label><strong>Unit Price</strong></label>
                                                <div class="position-relative form-group"><input type="text" value="${{formatMoney($orderData['unitPrice'])}}" disabled class="form-control"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label><strong>Total Price</strong></label>
                                                <div class="position-relative form-group"><input type="text" value="${{formatMoney($orderData['totalAmount'])}}" disabled class="form-control"></div>
                                            </div>
                                            @php
                                            $i++;
                                            @endphp
                                            @endforeach
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                                <label><strong>Order Total Amount</strong></label>
                                                <div class="position-relative form-group"><input type="text" value="${{formatMoney($validatedData['total'])}}" disabled class="form-control"></div>
                                            </div>
                                        </div>
                                    
                                    <div class="divider"></div>
                                </div>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary btn-lg"> Approve</button>
                                    </div>
                                
                            </div>
                            </form>  

                    </div>
                    <!--/row-->
                </div>
          
        </div>
</div>
</div>


@endsection




