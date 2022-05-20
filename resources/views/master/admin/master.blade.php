<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Sleek - Admin Dashboard Template</title>

    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet"/>
    <link href="https://cdn.materialdesignicons.com/3.0.39/css/materialdesignicons.min.css" rel="stylesheet" />

    <!-- PLUGINS CSS STYLE -->
    <link href="{{asset('/')}}admin/assets/plugins/toaster/toastr.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/plugins/nprogress/nprogress.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/plugins/flag-icons/css/flag-icon.min.css" rel="stylesheet"/>
    <link href="{{asset('/')}}admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/plugins/ladda/ladda.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
    <link href="{{asset('/')}}admin/assets/plugins/summernote-0.8.18-dist/summernote.min.css" rel="stylesheet">

    //toaster
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <!-- SLEEK CSS -->
    <link id="sleek-css" rel="stylesheet" href="{{asset('/')}}admin/assets/css/sleek.css" />



    <!-- FAVICON -->
    <link href="{{asset('/')}}admin/assets/img/favicon.png" rel="shortcut icon" />

    <!--
      HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
    -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="{{asset('/')}}admin/assets/plugins/nprogress/nprogress.js"></script>
</head>


<body class="sidebar-fixed sidebar-dark header-light header-fixed" id="body">
<script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
</script>

<div class="mobile-sticky-body-overlay"></div>

<div class="wrapper">

    <!--
====================================
——— LEFT SIDEBAR WITH FOOTER
=====================================
-->
    <aside class="left-sidebar bg-sidebar">
        <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
                <a href="{{route('dashboard')}}">
                    <svg
                        class="brand-icon"
                        xmlns="http://www.w3.org/2000/svg"
                        preserveAspectRatio="xMidYMid"
                        width="30"
                        height="33"
                        viewBox="0 0 30 33"
                    >
                        <g fill="none" fill-rule="evenodd">
                            <path
                                class="logo-fill-blue"
                                fill="#7DBCFF"
                                d="M0 4v25l8 4V0zM22 4v25l8 4V0z"
                            />
                            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
                        </g>
                    </svg>
                    <span class="brand-name">Jhotpot Dashboard</span>
                </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">



                    <li  class="has-sub active expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                           aria-expanded="false" aria-controls="dashboard">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span class="nav-text">Category Module</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse show"  id="dashboard"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">



                                <li  class="active" >
                                    <a class="sidenav-item-link" href="{{route('add-category')}}">
                                        <span class="nav-text">Add Category</span>
                                        <span class="badge badge-success">new</span>

                                    </a>
                                </li>






                                <li >
                                    <a class="sidenav-item-link" href="{{route('manage-category')}}">
                                        <span class="nav-text">Manage Category</span>



                                    </a>
                                </li>




                            </div>
                        </ul>
                    </li>


                    <li  class="has-sub expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                           aria-expanded="false" aria-controls="dashboard">
                            <i class="mdi mdi-bullseye"></i>
                            <span class="nav-text">Brand Module</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse show"  id="dashboard"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">



                                <li  class="active" >
                                    <a class="sidenav-item-link" href="{{route('add-brand')}}">
                                        <span class="nav-text">Add Brand</span>
                                        <span class="badge badge-success">new</span>

                                    </a>
                                </li>






                                <li >
                                    <a class="sidenav-item-link" href="{{route('manage-brand')}}">
                                        <span class="nav-text">Manage Brand</span>



                                    </a>
                                </li>




                            </div>
                        </ul>
                    </li>



                    <li  class="has-sub expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                           aria-expanded="false" aria-controls="dashboard">
                            <i class="mdi mdi-gesture-double-tap"></i>
                            <span class="nav-text">Unit Module</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse show"  id="dashboard"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">



                                <li  class="active" >
                                    <a class="sidenav-item-link" href="{{route('add-unit')}}">
                                        <span class="nav-text">Add Unit</span>
                                        <span class="badge badge-success">new</span>

                                    </a>
                                </li>






                                <li >
                                    <a class="sidenav-item-link" href="{{route('manage-unit')}}">
                                        <span class="nav-text">Manage Unit</span>



                                    </a>
                                </li>




                            </div>
                        </ul>
                    </li>

                    <li  class="has-sub expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                           aria-expanded="false" aria-controls="dashboard">
                            <i class="mdi mdi-basket"></i>
                            <span class="nav-text">Product Module</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse show"  id="dashboard"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">



                                <li  class="active" >
                                    <a class="sidenav-item-link" href="{{route('add-product')}}">
                                        <span class="nav-text">Add Product</span>
                                        <span class="badge badge-success">new</span>

                                    </a>
                                </li>






                                <li >
                                    <a class="sidenav-item-link" href="{{route('manage-product')}}">
                                        <span class="nav-text">Manage Product</span>



                                    </a>
                                </li>




                            </div>
                        </ul>
                    </li>

                    <li  class="has-sub expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                           aria-expanded="false" aria-controls="dashboard">
                            <i class="mdi mdi-open-source-initiative"></i>
                            <span class="nav-text">Order Module</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse show"  id="dashboard"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">



                                <li  class="active" >
                                    <a class="sidenav-item-link" href="{{route('admin-manage-order')}}">
                                        <span class="nav-text">Manage Order</span>
                                        <span class="badge badge-success">new</span>

                                    </a>
                                </li>











                            </div>
                        </ul>
                    </li>

                    <li  class="has-sub expand" >
                        <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#dashboard"
                           aria-expanded="false" aria-controls="dashboard">
                            <i class="mdi mdi-account"></i>
                            <span class="nav-text">User Module</span> <b class="caret"></b>
                        </a>
                        <ul  class="collapse show"  id="dashboard"
                             data-parent="#sidebar-menu">
                            <div class="sub-menu">



                                <li  class="active" >
                                    <a class="sidenav-item-link" href="{{route('add-user')}}">
                                        <span class="nav-text">Add User</span>
                                        <span class="badge badge-success">new</span>

                                    </a>
                                </li>






                                <li >
                                    <a class="sidenav-item-link" href="{{route('manage-user')}}">
                                        <span class="nav-text">Manage User</span>



                                    </a>
                                </li>




                            </div>
                        </ul>
                    </li>



                </ul>

            </div>

            <hr class="separator" />


        </div>
    </aside>



    <div class="page-wrapper">
        <!-- Header -->
        <header class="main-header " id="header">
            <nav class="navbar navbar-static-top navbar-expand-lg">
                <!-- Sidebar toggle button -->
                <button id="sidebar-toggler" class="sidebar-toggle">
                    <span class="sr-only">Toggle navigation</span>
                </button>
                <!-- search form -->
                <div class="search-form d-none d-lg-inline-block">
                    <div class="input-group">
                        <button type="button" name="search" id="search-btn" class="btn btn-flat">
                            <i class="mdi mdi-magnify"></i>
                        </button>
                        <input type="text" name="query" id="search-input" class="form-control" placeholder="'button', 'chart' etc."
                               autofocus autocomplete="off" />
                    </div>
                    <div id="search-results-container">
                        <ul id="search-results"></ul>
                    </div>
                </div>

                <div class="navbar-right ">
                    <ul class="nav navbar-nav">
                        <!-- Github Link Button -->
                        <li class="github-link mr-3">
                            <a class="btn btn-outline-secondary btn-sm" href="https://github.com/tafcoder/sleek-dashboard" target="_blank">
                                <span class="d-none d-md-inline-block mr-2">Source Code</span>
                                <i class="mdi mdi-github-circle"></i>
                            </a>

                        </li>
                        <li class="dropdown notifications-menu">
                            <button class="dropdown-toggle" data-toggle="dropdown">
                                <i class="mdi mdi-bell-outline"></i>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <li class="dropdown-header">You have 5 notifications</li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-account-plus"></i> New user registered
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-account-remove"></i> User deleted
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-account-supervisor"></i> New client
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="mdi mdi-server-network-off"></i> Server overloaded
                                        <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                                    </a>
                                </li>
                                <li class="dropdown-footer">
                                    <a class="text-center" href="#"> View All </a>
                                </li>
                            </ul>
                        </li>
                        <!-- User Account -->
                        <li class="dropdown user-menu">
                            <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                <img src="{{ Auth::user()->profile_photo_url }}" class="user-image" alt="User Image" />
                                <span class="d-none d-lg-inline-block">{{Auth::user()->name}}</span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-right">
                                <!-- User image -->
                                <li class="dropdown-header">
                                    <img src="{{ Auth::user()->profile_photo_url }}" class="img-circle" alt="User Image" />
                                    <div class="d-inline-block">
                                        {{Auth::user()->name}}<small class="pt-1">{{Auth::user()->email}}</small>
                                    </div>
                                </li>

                                <li>
                                    <a href="profile.html">
                                        <i class="mdi mdi-account"></i> My Profile
                                    </a>
                                </li>
                                <li>
                                    <a href="{{route('change-admin-password')}}">
                                        <i class="mdi mdi-account-key"></i> Change Password
                                    </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                                </li>
                                <li>
                                    <a href="#"> <i class="mdi mdi-settings"></i> Account Setting </a>
                                </li>

                                <li class="dropdown-footer">
                                    <a href="{{route('user-logout')}}"> <i class="mdi mdi-logout"></i> Log Out </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>


        </header>


       @yield('body')

        <footer class="footer mt-auto">
            <div class="copyright bg-white">
                <p>
                    &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                    <a
                        class="text-primary"
                        href="http://www.iamabdus.com/"
                        target="_blank"
                    >Abdus</a
                    >.
                </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
        </footer>

    </div>
</div>


<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDCn8TFXGg17HAUcNpkwtxxyT9Io9B_NcM" defer></script>
<script src="{{asset('/')}}admin/assets/plugins/jquery/jquery.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/toaster/toastr.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/charts/Chart.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/ladda/spin.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/ladda/ladda.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/jquery-mask-input/jquery.mask.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/select2/js/select2.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/jvectormap/jquery-jvectormap-world-mill.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/daterangepicker/moment.min.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/daterangepicker/daterangepicker.js"></script>
<script src="{{asset('/')}}admin/assets/plugins/jekyll-search.min.js"></script>
<script src="{{asset('/')}}admin/assets/js/sleek.js"></script>
<script src="{{asset('/')}}admin/assets/js/chart.js"></script>
<script src="{{asset('/')}}admin/assets/js/date-range.js"></script>
<script src="{{asset('/')}}admin/assets/js/map.js"></script>
<script src="{{asset('/')}}admin/assets/js/custom.js"></script>

//toaster
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


<script>
    @if(Session::has('message'))
        var type="{{Session::get('alert-type','info')}}"
    switch(type){
        case'info':
            toastr.info("{{Session::get('message')}}");
            break;

        case'success':
            toastr.success("{{Session::get('message')}}");
            break;
        case'warning':
            toastr.success("{{Session::get('message')}}");
            break;
        case'error':
            toastr.success("{{Session::get('message')}}");
            break;

    }
    @endif
</script>

//summernote

<script src="{{asset('/')}}admin/assets/plugins/summernote-0.8.18-dist/summernote.min.js"></script>


<script>
    $(document).ready(function() {
        $('#summernote').summernote();
    });
</script>
<script>
    function getBrand(id) {
        $.ajax({

            method:'GET',
            url:'{{url("/get-brand-by-category")}}',
            data:{id: id},
            dataType:'JSON',
            success:function (response) {
                console.log(response);
                var brandSelect=$('#brandId');
                brandSelect.empty();

                var option = '';
                option += '<option value="">---select Brand name---</option>';
                $.each(response,function (key,value) {
                    option +='<option value="'+value.id+'">'+value.name+' </option>'
                });
                brandSelect.append(option);
            }
        });
    }
</script>


</body>
</html>


