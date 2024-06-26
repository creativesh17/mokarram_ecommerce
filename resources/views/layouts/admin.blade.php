<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="template">
    <meta name="keywords" content="template">
    <meta name="author" content="">
    
    <title>@yield('title', 'Admin')</title>
    <!-- Fevicon -->
    <link rel="shortcut icon" href="{{asset('contents/admin')}}/assets/images/favicon.ico">
    <!-- Start css -->
    <link href="{{asset('contents/admin')}}/assets/plugins/switchery/switchery.min.css" rel="stylesheet">
    
    @stack('css')
    <link href="{{asset('contents/admin')}}/assets/plugins/slick/slick.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/assets/plugins/slick/slick-theme.css" rel="stylesheet">
    <link href="{{asset('contents/admin')}}/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('contents/admin')}}/assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="{{asset('contents/admin')}}/assets/css/flag-icon.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('contents/admin')}}/assets/css/style.css" rel="stylesheet" type="text/css">
    <!-- End css -->
    
</head>
<body class="vertical-layout">    
    <!-- Start Infobar Setting Sidebar -->
    <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
        <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
            <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="{{asset('contents/admin')}}/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close"></a>
        </div>
        <div class="infobar-settings-sidebar-body">
            <div class="custom-mode-setting">
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Payment Reminders</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Stock Updates</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Open for New Products</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Enable SMS</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Newsletter Subscription</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">Show Map</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" /></div>
                </div>
                <div class="row align-items-center pb-3">
                    <div class="col-8"><h6 class="mb-0">e-Statement</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked /></div>
                </div>
                <div class="row align-items-center">
                    <div class="col-8"><h6 class="mb-0">Monthly Report</h6></div>
                    <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked /></div>
                </div>
            </div>
        </div>
    </div>
    <div class="infobar-settings-sidebar-overlay"></div>
    <!-- End Infobar Setting Sidebar -->
    <!-- Start Containerbar -->
    <div id="containerbar">
        <!-- Start Leftbar -->
        @include('layouts.partials.sidebar')
        <!-- End Leftbar -->
        <!-- Start Rightbar -->
        <div class="rightbar">
            <!-- Start Topbar Mobile -->
            <div class="topbar-mobile">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="mobile-logobar">
                            <a href="index.html" class="mobile-logo"><img src="{{asset('contents/admin')}}/assets/images/logo.svg" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="mobile-togglebar">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <div class="topbar-toggle-icon">
                                        <a class="topbar-toggle-hamburger" href="javascript:void();">
                                            <img src="{{asset('contents/admin')}}/assets/images/svg-icon/horizontal.svg" class="img-fluid menu-hamburger-horizontal" alt="horizontal">
                                            <img src="{{asset('contents/admin')}}/assets/images/svg-icon/verticle.svg" class="img-fluid menu-hamburger-vertical" alt="verticle">
                                         </a>
                                     </div>
                                </li>
                                <li class="list-inline-item">
                                    <div class="menubar">
                                        <a class="menu-hamburger" href="javascript:void();">
                                            <img src="{{asset('contents/admin')}}/assets/images/svg-icon/collapse.svg" class="img-fluid menu-hamburger-collapse" alt="collapse">
                                            <img src="{{asset('contents/admin')}}/assets/images/svg-icon/close.svg" class="img-fluid menu-hamburger-close" alt="close">
                                         </a>
                                     </div>
                                </li>                                
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Start Topbar -->
            @include('layouts.partials.topbar')
            <!-- End Topbar -->
            <!-- Start Breadcrumbbar -->                    
            
            <!-- End Breadcrumbbar -->
            <!-- Start Contentbar -->    
            @yield('content')
            <!-- End Contentbar -->
            <!-- Start Footerbar -->
            <div class="footerbar">
                <footer class="footer">
                    <p class="mb-0">© 2019 Orbiter - All Rights Reserved.</p>
                </footer>
            </div>
            <!-- End Footerbar -->
        </div>
        <!-- End Rightbar -->
    </div>
    <!-- End Containerbar -->
   
    <!-- Start js -->        
    <script src="{{asset('contents/admin')}}/assets/js/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <script src="{{asset('contents/admin')}}/assets/js/popper.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/bootstrap.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/modernizr.min.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/detect.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/jquery.slimscroll.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/vertical-menu.js"></script>
    <!-- Switchery js -->
    <script src="{{asset('contents/admin')}}/assets/plugins/switchery/switchery.min.js"></script>
    {{-- <script src="{{asset('contents/admin')}}/assets/js/custom/custom-sweet-alert.js"></script> --}}
    @if(Session::has('success'))
        <script>
            Swal.fire({
                title: 'Successful',
                text: "{{ session('success') }}",
                icon: 'success',
                timer: 5000
            })
        </script>
    @endif
    @if(Session::has('error'))
        <script>     
            Swal.fire({
                title: 'Oops...',
                text: "{{ session('error') }}",
                icon: 'error',
                timer: 5000,
            })      
        </script>
    @endif
    <!-- Apex js -->
    @stack('js');   
    <!-- Slick js -->
    <script src="{{asset('contents/admin')}}/assets/plugins/slick/slick.min.js"></script>
    
    <!-- Custom Dashboard js -->   
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script src="{{asset('contents/admin')}}/assets/js/core.js"></script>
    <script src="{{asset('contents/admin')}}/assets/js/ajax.js"></script>

</body>
</html>