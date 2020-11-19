<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>{{config('app.name')}} @yield('pageTitle', '')  </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"
    />
    <meta name="description" content="Examples of just how powerful ArchitectUI really is!">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link href="{{ asset('../main.87c0748b313a1dda75f5.css') }}" rel="stylesheet">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<style>
            /*
                these styles will animate bootstrap alerts.
            */
            .alert{
                z-index: 99;
                top: 60px;
                right:18px;
                min-width:30%;
                position: fixed;
                animation: slide 0.5s forwards;
            }

            @keyframes slide {
                100% { top: 30px; }
            }

            @media screen and (max-width: 668px) {
                .alert{ /* center the alert on small screens */
                    left: 10px;
                    right: 10px; 
                }
            }

            button.back{

                color:white;
                background-image: linear-gradient(to top, #1e3c72 0%, #1e3c72 1%, #2a5298 100%)
            }
            button.back:hover{
            color:black;
            background-image: linear-gradient(to top, #fff 0%, #fff 1%, #fff 100%)

            }
        </style>
    @yield('extraCSS')
</head>
<body>
     {{-- Success Alert --}}
    @if(session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{session('status')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    {{-- Error Alert --}}
    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{session('error')}}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <ul>
        @foreach ($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

                            @if (session('danger'))
                                <script>
                                Swal.fire({
                                title: '<strong>Oops...</strong>',
                                icon: 'error',
                                html: "{{session('danger')}}",
                                showCloseButton: false,
                                showCancelButton: false,
                                focusConfirm: false,
                                })
                                </script>
                            @endif

                            @if (session('warning'))
                                <script>
                                Swal.fire({
                                title: '<strong>Oops...</strong>',
                                icon: 'warning',
                                html: "{{session('warning')}}",
                                showCloseButton: false,
                                showCancelButton: false,
                                focusConfirm: false,
                                })
                                </script>
                            @endif

                            @if (session('success'))
                                <script>
                                Swal.fire({
                                title: '<strong>Successful</strong>',
                                icon: 'success',
                                html: "{{session('success')}}",
                                showCloseButton: false,
                                showCancelButton: false,
                                focusConfirm: false,
                                confirmButtonAriaLabel: 'Thumbs up, great!',
                                })
                                </script>
                            @endif
<div class="app-container app-theme-white body-tabs-shadow fixed-header fixed-sidebar">
    <div class="app-header header-shadow">
        <div class="app-header__logo">
            <div class="logo-src"></div>
            <div class="header__pane ml-auto">
                <div>
                    <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
        <div class="app-header__mobile-menu">
            <div>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
        <div class="app-header__menu">
            <span>
                <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                    <span class="btn-icon-wrapper">
                        <i class="fa fa-ellipsis-v fa-w-6"></i>
                    </span>
                </button>
            </span>
        </div>    
        <div class="app-header__content">
            <div class="app-header-left">
                
                       
            </div>
            <div class="app-header-right">
                <div class="header-dots">
                    
                    <div class="dropdown">
                        <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 mr-2 btn btn-link">
                            <span class="icon-wrapper icon-wrapper-alt rounded-circle">
                                <span class="icon-wrapper-bg bg-danger"></span>
                                <i class="icon text-danger icon-anim-pulse ion-android-notifications"></i>
                                <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                            </span>
                        </button>
                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                            <div class="dropdown-menu-header mb-0">
                                <div class="dropdown-menu-header-inner bg-deep-blue">
                                    <div class="menu-header-image opacity-1" style="background-image: url('assets/images/dropdown-header/city3.jpg');"></div>
                                    <div class="menu-header-content text-dark">
                                        <h5 class="menu-header-title">Notifications</h5>
                                        <h6 class="menu-header-subtitle">You have <b>21</b> unread notifications</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                
                                    <div class="scroll-area-sm">
                                        <div class="scrollbar-container">
                                            <div class="p-3">
                                                <div class="vertical-without-time vertical-timeline vertical-timeline--animate vertical-timeline--one-column">
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-success"> </i></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4>
                                                                <p>Lorem ipsum dolor sic amet, today at <a href="javascript:void(0);">12:00 PM</a></p><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-warning"> </i></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><p>Another meeting today, at <b class="text-danger">12:00 PM</b></p>
                                                                <p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-danger"> </i></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">Build the production release</h4>
                                                                <p>Lorem ipsum dolor sit amit,consectetur eiusmdd tempor incididunt ut labore et dolore magna elit enim at minim veniam quis nostrud</p><span
                                                                        class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    <div class="vertical-timeline-item vertical-timeline-element">
                                                        <div><span class="vertical-timeline-element-icon bounce-in"><i class="badge badge-dot badge-dot-xl badge-primary"> </i></span>
                                                            <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title text-success">Something not important</h4>
                                                                <p>Lorem ipsum dolor sit amit,consectetur elit enim at minim veniam quis nostrud</p><span class="vertical-timeline-element-date"></span></div>
                                                        </div>
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                
                            </div>
                            <ul class="nav flex-column">
                                <li class="nav-item-divider nav-item"></li>
                                <li class="nav-item-btn text-center nav-item">
                                    <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">Mark All As Read</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    
                </div>
                
                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                        <img width="42" class="rounded-circle" src="{{asset('/images/avatars/1.jpg')}}" alt="">
                                    </a>
                                   
                                </div>
                            </div>
                            <div class="widget-content-left  ml-3">
                                <div class="widget-heading">
                                    {{ Auth::guard('admin')->user()->name }}
                                </div>
                                <div class="widget-subheading">
                                    <a class="" href="javascript:void(0);" onclick="event.preventDefault();document.querySelector('#logout-form').submit();">
                                        Logout
                                    </a>
                                    <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                        <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                            <span class="btn-icon-wrapper">
                                <i class="fa fa-ellipsis-v fa-w-6"></i>
                            </span>
                        </button>
                    </span>
                </div>    <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">MENU</li>
                            <li class="mm-active">
                                <a href="/admin/dashboard" @yield('dashboardActive')>
                                    <i class="metismenu-icon pe-7s-graph">
                                    </i>Dashboard
                                </a>
                            </li>
                            <li>
                                <a href="/admin/orders-index" @yield('ordersActive')>
                                    <i class="metismenu-icon pe-7s-way">
                                    </i>Orders
                                </a>
                            </li>
                            <li>
                                <a href="#" @yield('compliantsActive')>
                                    <i class="metismenu-icon pe-7s-display2"></i>
                                    Compliants
                                    <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                </a>
                                <ul>
                                    <li>
                                        <a href="/admin/compliants-index" @yield('AllCompliantsActive')>
                                            <i class="metismenu-icon">
                                            </i>All
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="metismenu-icon">
                                            </i>Pending
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                            <i class="metismenu-icon">
                                            </i>Resolved
                                        </a>
                                    </li>
                                    </ul>
                            </li>
                            <li>
                                <a href="/admin/manageAdmin-index"  @yield('manageAdminsActive')>
                                    <i class="metismenu-icon pe-7s-ball">
                                    </i>Manage Administrators
                                </a>
                            </li>
                            <li>
                                <a href="/admin/profile"  @yield('adminsSettingsActive')>
                                    <i class="metismenu-icon pe-7s-id">
                                    </i>Admin Settings
                                </a>
                            </li>
                         
                           
                            
                        </ul>
                    </div>
                </div>
            </div>  
               
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                            

                             <div class="page-title-icon">
                                   @yield('dashBoardTitleIcon') 
                                    
                                </div>
                                
                                <div>@yield('dashboardTitle')
                                    <div class="page-title-subheading">@yield('dashboardTitleSubheading', '')
                                    </div>
                                </div>
                            </div>
                            @yield('dashboardTitleButton')
                               
                        </div>
                    </div>  
                            
                    <div class="tabs-animation">
                      @yield('content')  
                    
                        
                       
                    </div>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <div class="footer-dots">
                                    
                                   
                                    
                
                                </div>
                            </div>
                            <div class="app-footer-right">
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>
@yield('modal')  
<div class="app-drawer-overlay d-none animated fadeIn"></div>
<script type="text/javascript" src="{{ asset('assets/scripts/main.87c0748b313a1dda75f5.js') }}"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
        //close the alert after 3 seconds.
        $(document).ready(function(){
			setTimeout(function() {
	        	$(".alert").alert('close');
	    	}, 5000);
    	});
    </script>
    <script>
        function goBack() {
        window.history.back();
        }
        </script>
@yield('extraJS')
</body>

</html>


