@extends('layouts.adminApp')

@section('pageTitle', 'Manage Compliants')


@section('dashBoardTitleIcon')
<i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
@endsection

@section('dashboardTitle')
    Manage Compliants
@endsection



@section('compliantsActive')
    class="mm-active"
@endsection

   
@section('content')
 <div class="container">
  



@foreach($orderData->compliants as $compliantData)
<div class="card mb-4">
    <div class="card-header">
        <div class="media flex-wrap w-100 align-items-center">
            <img style="width: 40px; height: auto;" src="assets/images/avatars/3.jpg" class="d-block ui-w-40 rounded-circle" alt="">
            <div class="media-body ml-3">
                <a href="javascript:void(0)" class="disabled">{{$compliantData->type}} Compliant</a>
                
            </div>
            <div class="text-muted small ml-3">
                @if($compliantData->status == 0)
                <button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-warning">Pending</button>
                @elseif($compliantData->status == 1)
                <button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-success">Resolved</button>
                @endif
            </div>
        </div>
    </div>
    @foreach($compliantData->messages as $messageData)
    <div class="card-body">
        
        @if($messageData->sender == 0)
        <div class="float-right">
            <div class="chat-box-wrapper chat-box-wrapper-right">
                <div>
                    <div class="chat-box">{{$messageData->compliant_message}}</div>
                    <small class="opacity-6">
                        <i class="fa fa-calendar-alt mr-1"></i>
                        {{formatDate($messageData->created_at)}} | {{Auth::guard('admin')->user()->name}}
                    </small>
                </div>
                
            </div>
        </div>
        @endif
         @if($messageData->sender == 1)
        <div class="chat-box-wrapper">
            <div>
                
            </div>
            <div>
                <div class="chat-box">{{$messageData->compliant_message}}</div>
                <small class="opacity-6">
                    <i class="fa fa-calendar-alt mr-1"></i>
                    {{formatDate($messageData->created_at)}} | 
                </small>
            </div>
        </div>
        @endif
        
        
    </div>
    @endforeach
    <div>
    <form action="/admin/messages-new/{{$compliantData->id}}" method="POST">
            {{ csrf_field() }}
    <div class="app-inner-layout__bottom-pane d-block text-center">
                    <div class="mb-0 position-relative row form-group">
                        <div class="col-sm-12">
                            <input name="message" placeholder="Write here and hit reply button to send..." type="text" class="form-control-lg form-control" required>
                        </div>
                    </div>
                </div>
    </div>
    <div class="card-footer d-flex flex-wrap justify-content-between align-items-center px-0 pt-0 pb-3">
        <div class="px-4 pt-3">
            
        </div>
        <div class="px-4 pt-3">
            <button type="submit" class="btn btn-primary"><i class="ion ion-md-create"></i>&nbsp; Reply</button>
        </div>
    </div>
    </form>
</div>



  <div class="row mb-2">
    

    <div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col-4 d-none bg-primaryTone d-lg-block">
              <div class="mb-3 bg-primaryTone widget-content">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="menu-header-title2">Order 10000{{$orderData->id}}</div>
                                        </div>
                                    </div>
                                </div>                        
         </div>

         <div class="col-8 p-4 d-flex flex-column position-static">


           <div class="tab-pane active" id="profile">
                    <div class="row">
                                        <div class="form-row">
                                            @php
                                            $i=1;
                                            @endphp
                                            @foreach($orderDetails as $orderDetail)
                                            <div class="col-md-4">
                                                <label><strong>Item Name</strong></label>
                                                <div class="position-relative form-group"><input type="text"  value="{{$orderDetail['name']}}" disabled class="form-control"></div>
                                            </div>
                                            <div class="col-md-2">
                                                <label><strong>Quantity</strong></label>
                                                <div class="position-relative form-group"><input type="text" value="{{$orderDetail['quantity']}}" disabled class="form-control"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label><strong>Unit Price</strong></label>
                                                <div class="position-relative form-group"><input type="text" value="${{formatMoney($orderDetail['unitPrice'])}}" disabled class="form-control"></div>
                                            </div>
                                            <div class="col-md-3">
                                                <label><strong>Total Price</strong></label>
                                                <div class="position-relative form-group"><input type="text" value="${{formatMoney($orderDetail['totalAmount'])}}" disabled class="form-control"></div>
                                            </div>
                                            @php
                                            $i++;
                                            @endphp
                                            @endforeach
                                            <div class="col-md-9"></div>
                                            <div class="col-md-3">
                                                <label><strong>Order Total Amount</strong></label>
                                                <div class="position-relative form-group"><input type="text" value="${{formatMoney($orderData->amount)}}" disabled class="form-control"></div>
                                            </div>
                                            
                                        </div>
                                    
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
                                    <div class="divider"></div>
                                </div>

                                
                                
                            </div>
                            </form>  

                    </div>
                </div>
          
        </div>
</div>
</div>
@endforeach



@endsection


