@extends('layouts.userApp')

@section('pageTitle', 'Dashboard')


@section('dashBoardTitleIcon')
<i class="pe-7s-graph icon-gradient bg-ripe-malin"></i>
@endsection

@section('dashboardTitle')
    Profile
@endsection



@section('profileActive')
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
                                <div class="menu-header-title2">Personal Details</div>
                                <div class="widget-subheading">This is your personal information you provided upon registration</div>
                            </div>
                        </div>
                    </div>                        
         </div>

         <div class="col-8 p-4 d-flex flex-column position-static">

          <div class="col-lg-4">
            <img src="{{asset('/images/avatars/1.jpg')}}"
             class="mx-auto img-fluid img-circle d-block">
          </div>
           <br/>

           <div class="tab-pane active" id="profile">
                    <div class="row">
                        <div class="col-md-6">
                         
                            <h6 class = "text-capitalize"><strong>Name</strong></h6>
                            <p class = "text-capitalize">
                                {{ Auth::user()->name }}
                            </p>
                            <h6><strong>Email</strong></h6>
                            <p>
                                {{ Auth::user()->email }}
                            </p>
                        </div>
                        <div class="col-md-6">
                             <h6><strong>Status</strong></h6>
                            <p class = "text-capitalize">
                                @if(Auth::user()->status == '1')
                        <button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-success">Active</button>
                    @elseif(Auth::user()->status == '0')
                        <button class="mb-2 mr-2 btn-pill btn btn-sm btn-gradient-danger">Inactive</button>
                    @endif
                            </p>
                            <h6><strong>Phone Number</strong></h6>
                            <p>
                                {{ Auth::user()->phone_no }}
                            </p>
                        </div>
                        <div class="col-md-6">
                            <h6><strong>Address</strong></h6>
                            <p>
                                {{ Auth::user()->name }}
                            </p>
                            <h6 class = "text-capitalize"><strong>Nationality</strong></h6>
                            <p>
                                {{ Auth::user()->name }}
                            </p>
                        </div>
                        <div class="col-md-6">
                             <h6><strong>Date of Birth</strong></h6>
                            <p>
                                {{ Auth::user()->name }}
                            </p>
                           
                        </div>
                        
                    </div>
                    <!--/row-->
                </div>
          
        </div>
        
      </div>
    </div>

    <div class="col-md-12">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
          <div class="col-4 d-none bg-primaryTone d-lg-block">
              <div class="mb-3 bg-primaryTone widget-content">
                                    <div class="widget-content-wrapper">
                                        <div class="widget-content-left">
                                            <div class="menu-header-title2">Change Password</div>
                                        </div>
                                    </div>
                                </div>                        
         </div>

         <div class="col-8 p-4 d-flex flex-column position-static">


           <div class="tab-pane active" id="profile">
                    <div class="row">
                         <form action="/changePassword/{{Auth::user()->id}}" method="post">
                                    {{ csrf_field() }}
                                        <div class="form-row">
                                            <div class="col-md-12">
                                                <label><strong>Old Password</strong></label>
                                                <div class="position-relative form-group"><input name="oldPassword" placeholder="Old Password" type="password" class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <label><strong>New Password</strong></label>
                                                <div class="position-relative form-group"><input type="password" name="password" placeholder="Password" id="password" required class="form-control"></div>
                                            </div>
                                            <div class="col-md-6">
                                                <label><strong>Confirm Password</strong></label>
                                                <div class="position-relative form-group"><input type="password" name="c_password" placeholder="Confirm Password" id="confirm_password" required class="form-control"></div>
                                            </div>
                                        </div>
                                    
                                    <div class="divider"></div>
                                </div>
                                    <div class="float-right">
                                        <button type="submit" class="btn btn-primary btn-lg"> Submit</button>
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

@section('extraJS')

<script>
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

function validatePassword(){
  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;

</script>


@endsection
