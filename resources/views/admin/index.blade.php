<!doctype html>
<html lang="en">

    
<!-- Mirrored from themesbrand.com/skote-django/layouts/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 07 Feb 2022 12:17:19 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>SDO RQA SYSTEM</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesbrand" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon.ico">

        <!-- Bootstrap Css -->
        <link href="{{asset('assets/css/bootstrap.min.css')}}" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="{{asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="{{asset('assets/css/app.min.css')}}" id="app-style" rel="stylesheet" type="text/css" />

    </head>

    <body data-sidebar="dark">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

        <!-- Begin page -->
        <div id="layout-wrapper">

            
            <header id="page-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.html" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/logo.svg')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/logo-dark.png')}}" alt="" height="17">
                                </span>
                            </a>

                            <a href="index.html" class="logo logo-light">
                                <span class="logo-sm">
                                    <img src="{{asset('assets/images/logo-light.svg')}}" alt="" height="22">
                                </span>
                                <span class="logo-lg">
                                    <img src="{{asset('assets/images/logo-light.png')}}" alt="" height="19">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-16 header-item waves-effect" id="vertical-menu-btn">
                            <i class="fa fa-fw fa-bars"></i>
                        </button>
                    </div>

                    <div class="d-flex">

                        <div class="dropdown d-inline-block d-lg-none ms-2">
                            <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                                aria-labelledby="page-header-search-dropdown">
        
                                <form class="p-3">
                                    <div class="form-group m-0">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="submit"><i class="mdi mdi-magnify"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="rounded-circle header-profile-user" src="{{asset('assets/images/users/user.jpg')}}"
                                    alt="Header Avatar">
                                <span class="d-none d-xl-inline-block ms-1" key="t-henry">{{Auth::user()->name}}</span>
                                <i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end">
                                <!-- item-->
                                <a class="dropdown-item text-danger" href="{{route('admin.logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <!-- ========== Left Sidebar Start ========== -->
            <div class="vertical-menu">

                <div data-simplebar class="h-100">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <li class="menu-title" key="t-menu">Menu</li>

                            <li>
                                <a href="{{route('admin.dashboard')}}" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>
                            </li>

                            <li class="menu-title" key="t-menu">List of Applicants</li>

                            <li>
                                <a href="{{route('admin.list')}}" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">List of Applicants</span>
                                </a>
                            </li>

                            <li class="menu-title" key="t-apps">District</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">North District</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.tncs')}}" key="t-products">TNCS</a></li>
                                    <li><a href="{{route('admin.pallua')}}" key="t-product-detail">Pallua ES</a></li>
                                    <li><a href="{{route('admin.caritan')}}" key="t-orders">Caritan Norte ES</a></li>
                                    <li><a href="{{route('admin.atulayan')}}" key="t-customers">Atulayan ES</a></li>
                                    <li><a href="{{route('admin.annafunan')}}" key="t-cart">Annafunan ES</a></li>
                                    <li><a href="{{route('admin.bagay')}}" key="t-checkout">Bagay ES</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">East District</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.tecs')}}" key="t-products">TECS</a></li>
                                    <li><a href="{{route('admin.taggad')}}" key="t-product-detail">Tagga-Dadda ES</a></li>
                                    <li><a href="{{route('admin.dadda')}}" key="t-orders">Dadda ES</a></li>
                                    <li><a href="{{route('admin.capatan')}}" key="t-customers">Capatan IS</a></li>
                                    <li><a href="{{route('admin.namabbalan')}}" key="t-cart">Namabbalan IS</a></li>
                                    <li><a href="{{route('admin.libag')}}" key="t-checkout">Libag IS</a></li>
                                    <li><a href="{{route('admin.gosi')}}" key="t-shops">Gosi ES</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">West District</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.twcs')}}" key="t-products">TWCS</a></li>
                                    <li><a href="{{route('admin.buntun')}}" key="t-product-detail">Buntun ES</a></li>
                                    <li><a href="{{route('admin.ugac')}}" key="t-orders">Ugac ES</a></li>
                                    <li><a href="{{route('admin.sangab')}}" key="t-customers">San Gabriel ES</a></li>
                                    <li><a href="{{route('admin.catnuevo')}}" key="t-cart">Cataggaman Nuevo ES</a></li>
                                    <li><a href="{{route('admin.catpardo')}}" key="t-checkout">Cataggaman Pardo ES</a></li>
                                    <li><a href="{{route('admin.cates')}}" key="t-shops">Cataggaman ES</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">NorthEast District</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.tnecs')}}" key="t-products">TNECS</a></li>
                                    <li><a href="{{route('admin.carig')}}" key="t-product-detail">Carig IS</a></li>
                                    <li><a href="{{route('admin.carigno')}}" key="t-orders">Carig Norte ES</a></li>
                                    <li><a href="{{route('admin.linao')}}" key="t-customers">Linao ES</a></li>
                                    <li><a href="{{route('admin.larionba')}}" key="t-cart">Larion Bajo ES</a></li>
                                    <li><a href="{{route('admin.larional')}}" key="t-checkout">Larion Alto ES</a></li>
                                    <li><a href="{{route('admin.balzain')}}" key="t-shops">Balzain East ES</a></li>
                                    <li><a href="{{route('admin.pengue')}}" key="t-add-product">Pengue-Ruyu ES</a></li>
                                </ul>
                            </li>

                            <li class="menu-title" key="t-pages">Secondary</li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">Junior High School</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.cnhs')}}" key="t-products">CNHS</a></li>
                                    <li><a href="{{route('admin.catnhs')}}" key="t-product-detail">Catag. NHS</a></li>
                                    <li><a href="{{route('admin.lnhs')}}" key="t-orders">Linao NHS</a></li>
                                    <li><a href="{{route('admin.gnhs')}}" key="t-customers">Gosi NHS</a></li>
                                    <li><a href="{{route('admin.tugwest')}}" key="t-cart">Tug. City West HS</a></li>
                                    <li><a href="{{route('admin.tugscie')}}" key="t-checkout">Tug. City Science HS</a></li>
                                    <li><a href="{{route('admin.annafunanis')}}" key="t-shops">Annafunan IS</a></li>
                                    <li><a href="{{route('admin.carigis')}}" key="t-add-product">Carig IS</a></li>
                                    <li><a href="{{route('admin.libagis')}}" key="t-add-product">Libag IS</a></li>
                                    <li><a href="{{route('admin.namabbalanis')}}" key="t-add-product">Namabbalan IS</a></li>
                                    <li><a href="{{route('admin.capatanis')}}" key="t-add-product">Capatan IS</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow waves-effect">
                                    <i class="bx bx-store"></i>
                                    <span key="t-ecommerce">Senior High School</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="{{route('admin.cnhsshs')}}" key="t-products">CNHS</a></li>
                                    <li><a href="{{route('admin.catnhsshs')}}" key="t-product-detail">Catag. NHS</a></li>
                                    <li><a href="{{route('admin.lnhsshs')}}" key="t-orders">Linao NHS</a></li>
                                    <li><a href="{{route('admin.gnhsshs')}}" key="t-customers">Gosi NHS</a></li>
                                    <li><a href="{{route('admin.tugwestshs')}}" key="t-cart">Tug. City West HS</a></li>
                                    <li><a href="{{route('admin.tugscieshs')}}" key="t-checkout">Tug. City Science HS</a></li>
                                    <li><a href="{{route('admin.carigisshs')}}" key="t-shops">Carig IS</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Dashboard</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-4">
                                <div class="card overflow-hidden">
                                    <div class="bg-primary bg-soft">
                                        <div class="row">
                                            <div class="col-7">
                                                <div class="text-primary p-3">
                                                    <h5 class="text-primary">Welcome Back Admin!</h5>
                                                    <p>RQA Dashboard</p>
                                                </div>
                                            </div>
                                            <div class="col-5 align-self-end">
                                                <img src="{{asset('assets/images/profile-img.png')}}" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body pt-0">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="avatar-md profile-user-wid mb-4">
                                                    <img src="{{asset('assets/images/users/user.jpg')}}" alt="" class="img-thumbnail rounded-circle">
                                                </div>
                                                <h5 class="font-size-15 text-truncate">{{Auth::user()->name}}</h5>
                                                <p class="text-muted mb-0 text-truncate"></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-8">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Total Applicants</p>
                                                        <h4 class="mb-0">{{ $count }}</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="mini-stat-icon avatar-sm rounded-circle bg-primary">
                                                            <span class="avatar-title">
                                                                <i class="bx bx-copy-alt font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">New Applicants</p>
                                                        <h4 class="mb-0">{{ $new }}</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center ">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-archive-in font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Old Applicants</p>
                                                        <h4 class="mb-0">{{ $old }}</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card mini-stats-wid">
                                            <div class="card-body">
                                                <div class="d-flex">
                                                    <div class="flex-grow-1">
                                                        <p class="text-muted fw-medium">Total Submitted Grades</p>
                                                        <h4 class="mb-0">{{ $grades }}</h4>
                                                    </div>

                                                    <div class="flex-shrink-0 align-self-center">
                                                        <div class="avatar-sm rounded-circle bg-primary mini-stat-icon">
                                                            <span class="avatar-title rounded-circle bg-primary">
                                                                <i class="bx bx-purchase-tag-alt font-size-24"></i>
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end row -->
                            </div>
                        </div>
                        <!-- end row -->
                    </div>
                    <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-sm-6">
                                <script>document.write(new Date().getFullYear())</script> © Department of Education - Schools Division of Tuguegarao City
                            </div>
                            <div class="col-sm-6">
                                <div class="text-sm-end d-none d-sm-block">
                                    Develop by John Rico C. Toribio
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->


        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- JAVASCRIPT -->
        <script src="{{asset('assets/libs/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('assets/libs/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('assets/libs/metismenu/metisMenu.min.js')}}"></script>
        <script src="{{asset('assets/libs/simplebar/simplebar.min.js')}}"></script>
        <script src="{{asset('assets/libs/node-waves/waves.min.js')}}"></script>

        <!-- dashboard init -->
        <script src="{{asset('assets/js/pages/dashboard.init.js')}}"></script>

        <!-- App js -->
        <script src="{{asset('assets/js/app.js')}}"></script>
    </body>



</html>