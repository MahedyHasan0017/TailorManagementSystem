<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords"
        content="wrappixel, admin dashboard, html css dashboard, web dashboard, bootstrap 5 admin, bootstrap 5, css3 dashboard, bootstrap 5 dashboard, Matrix lite admin bootstrap 5 dashboard, frontend, responsive bootstrap 5 admin template, Matrix admin lite design, Matrix admin lite dashboard bootstrap 5 dashboard template">
    <meta name="description" content="Tailorshop Easy Manager v.1.0.0">
    <meta name="robots" content="noindex,nofollow">
    <title>Tailorshop Easy Manager</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16"
        href="{{ asset('tailerStaticTemplate/assets/images/favicon.png') }}">






    <link rel="stylesheet" type="text/css"
        href="{{ asset('tailerStaticTemplate/assets/libs/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('tailerStaticTemplate/assets/libs/jquery-minicolors/jquery.minicolors.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('tailerStaticTemplate/assets/libs/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ asset('tailerStaticTemplate/assets/libs/quill/dist/quill.snow.css') }}">


    <!-- plugin css  -->

    <link href="https://unpkg.com/gijgo@1.9.14/css/gijgo.min.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.5/css/dataTables.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/3.0.2/css/responsive.dataTables.min.css">

    <!-- plugin css end  -->



    <!-- Custom CSS -->
    <link href="{{ asset('tailerStaticTemplate/assets/libs/flot/css/float-chart.css') }}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{ asset('tailerStaticTemplate/dist/css/style.min.css') }}" rel="stylesheet">
    <link rel='stylesheet' href={{ asset('tailerStaticTemplate/src/custom_styles/c_styles.css') }}>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->



    <style>
        .cotton_detail_unit {
            display: flex;
            align-content: center;
            gap: 10px;
        }

        .cotton_price_unit {
            display: flex;
            align-items: baseline;
            flex-direction: column;
            justify-content: end;
        }

        .cotton_unit_list {
            display: flex;
            justify-content: space-between;
        }

        .cotton_unit_list_unit {
            border: 1px solid black;
            width: 48%;
            text-align: center;
        }
    </style>



</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>

    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <div class="navbar-header" data-logobg="skin5">

                    <a class="navbar-brand" href="{{ route('vendor_dashboard') }}">
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon ps-2"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.jpg" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                        <!-- Logo text -->
                        <span class="logo-text">
                            <!-- dark Logo text -->
                            <img src="{{ asset('tailerStaticTemplate/assets/images/logo-text.jpg') }}" alt="homepage"
                                class="light-logo" />

                        </span>
                        <!-- Logo icon -->
                        <!-- <b class="logo-icon"> -->
                        <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                        <!-- Dark Logo icon -->
                        <!-- <img src="assets/images/logo-text.png" alt="homepage" class="light-logo" /> -->

                        <!-- </b> -->
                        <!--End Logo icon -->
                    </a>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="nav-toggler waves-effect waves-light d-block d-md-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent" data-navbarbg="skin5">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-start me-auto">

                        <!-- ============================================================== -->
                        <!-- create new -->
                        <!-- ============================================================== -->

                        <li class="nav-item d-none d-lg-block"><a
                                class="nav-link sidebartoggler waves-effect waves-light" href="javascript:void(0)"
                                data-sidebartype="mini-sidebar"><i class="mdi mdi-menu font-24"></i></a></li>
                        @if (Auth::guard('vendor')->check() != null)
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <span class="d-none d-md-block">Create New <i class="fa fa-angle-down"></i></span>
                                    <span class="d-block d-md-none"><i class="fa fa-plus"></i></span>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>

                            <!-- ============================================================== -->
                            <!-- Search -->
                            <!-- ============================================================== -->
                            <li class="nav-item search-box"> <a class="nav-link waves-effect waves-dark"
                                    href="javascript:void(0)"><i class="ti-search"></i></a>
                                <form class="app-search position-absolute">
                                    <input type="text" class="form-control" placeholder="Search &amp; enter"> <a
                                        class="srh-btn"><i class="ti-close"></i></a>
                                </form>
                            </li>
                        @endif


                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        @if (Auth::guard('vendor')->check() == null)
                            <li class="nav-item dropdown">
                                <a href="{{ route('auth.vendor.login.view') }}" class="btn btn-success">Login</a>
                                <a href="{{ route('auth.vendor.register.view') }}" class="btn btn-info">Register</a>
                            </li>
                        @elseif (Auth::guard('vendor')->check())
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle waves-effect waves-dark" href="#"
                                    id="2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="font-24 mdi mdi-comment-processing"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end mailbox animated bounceInDown"
                                    aria-labelledby="2">
                                    <ul class="list-style-none">
                                        <li>
                                            <div class="">
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="btn btn-success btn-circle"><i
                                                                class="ti-calendar"></i></span>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0">today's delivary</h5>
                                                            <span class="mail-desc">Just a reminder that event</span>
                                                        </div>
                                                    </div>
                                                </a>
                                                <!-- Message -->
                                                <a href="javascript:void(0)" class="link border-top">
                                                    <div class="d-flex no-block align-items-center p-10">
                                                        <span class="btn btn-info btn-circle"><i
                                                                class="ti-settings"></i></span>
                                                        <div class="ms-2">
                                                            <h5 class="mb-0">tomorrow's delivary</h5>
                                                            <span class="mail-desc">You can customize this
                                                                template</span>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                        </li>
                                    </ul>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                                    role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    <i class="mdi mdi-bell font-24"></i>
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Action</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-muted waves-effect waves-dark pro-pic"
                                    href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    <img src="{{ asset('tailerStaticTemplate/assets/images/users/1.jpg') }}"
                                        alt="user" class="rounded-circle" width="31">
                                    <span><span style="font-size: 12px;">স্বাগতম</span>,<span
                                            style="font-size: 16px;">
                                            @if (Auth::guard('vendor')->check() != null)
                                                {{ Auth::guard('vendor')->user()->name }}
                                            @endif
                                        </span> <span><i class="fas fa-angle-down"></i></span></span>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end user-dd animated"
                                    aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="javascript:void(0)"><i class="fas fa-lock"></i>
                                        লগইন তথ্য</a>
                                    <a class="dropdown-item"
                                        href="{{ route('vendor.profile.view', ['id' => Auth::guard('vendor')->user()->id]) }}"><i
                                            class="fas fa-user"></i>
                                        প্রোফাইল আপডেট</a>
                                    <a class="dropdown-item" href="javascript:void(0)"><i
                                            class="fas fa-cart-plus"></i>
                                        Bill Payment info</a>
                                    <a class="dropdown-item" href="{{ route('auth.vendor.logout') }}"><i
                                            class="fa fa-power-off me-1 ms-1"></i> Logout</a>
                                </ul>
                            </li>
                        @endif

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
