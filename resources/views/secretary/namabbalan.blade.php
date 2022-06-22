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
        <link href="{{asset('assets/libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('assets/libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <!-- Responsive datatable examples -->
        <link href="{{asset('assets/libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />     

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
                                <a class="dropdown-item text-danger" href="{{route('secretary.logout')}}"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> <span key="t-logout">Logout</span></a>
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
                                <a href="{{route('secretary.dashboard')}}" class="waves-effect">
                                    <i class="bx bx-home-circle"></i>
                                    <span key="t-dashboards">Dashboards</span>
                                </a>
                            </li>
                            @if (Auth::user()->level == "Elementary" && Auth::user()->district == "Tuguegarao North District")
                                <li class="menu-title" key="t-apps">District</li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-store"></i>
                                        <span key="t-ecommerce">North District</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{route('secretary.tncs')}}" key="t-products">TNCS</a></li>
                                        <li><a href="{{route('secretary.pallua')}}" key="t-product-detail">Pallua ES</a></li>
                                        <li><a href="{{route('secretary.caritan')}}" key="t-orders">Caritan Norte ES</a></li>
                                        <li><a href="{{route('secretary.atulayan')}}" key="t-customers">Atulayan ES</a></li>
                                        <li><a href="{{route('secretary.annafunan')}}" key="t-cart">Annafunan ES</a></li>
                                        <li><a href="{{route('secretary.bagay')}}" key="t-checkout">Bagay ES</a></li>
                                    </ul>
                                </li>

                            @elseif (Auth::user()->level == "Elementary" && Auth::user()->district == "Tuguegarao East District")
                                <li class="menu-title" key="t-apps">District</li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-store"></i>
                                        <span key="t-ecommerce">East District</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{route('secretary.tecs')}}" key="t-products">TECS</a></li>
                                        <li><a href="{{route('secretary.taggad')}}" key="t-product-detail">Tagga-Dadda ES</a></li>
                                        <li><a href="{{route('secretary.dadda')}}" key="t-orders">Dadda ES</a></li>
                                        <li><a href="{{route('secretary.capatan')}}" key="t-customers">Capatan IS</a></li>
                                        <li><a href="{{route('secretary.namabbalan')}}" key="t-cart">Namabbalan IS</a></li>
                                        <li><a href="{{route('secretary.libag')}}" key="t-checkout">Libag IS</a></li>
                                        <li><a href="{{route('secretary.gosi')}}" key="t-shops">Gosi ES</a></li>
                                    </ul>
                                </li>

                            @elseif (Auth::user()->level == "Elementary" && Auth::user()->district == "Tuguegarao West District")
                                <li class="menu-title" key="t-apps">District</li>
                                
                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-store"></i>
                                        <span key="t-ecommerce">West District</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{route('secretary.twcs')}}" key="t-products">TWCS</a></li>
                                        <li><a href="{{route('secretary.buntun')}}" key="t-product-detail">Buntun ES</a></li>
                                        <li><a href="{{route('secretary.ugac')}}" key="t-orders">Ugac ES</a></li>
                                        <li><a href="{{route('secretary.sangab')}}" key="t-customers">San Gabriel ES</a></li>
                                        <li><a href="{{route('secretary.catnuevo')}}" key="t-cart">Cataggaman Nuevo ES</a></li>
                                        <li><a href="{{route('secretary.catpardo')}}" key="t-checkout">Cataggaman Pardo ES</a></li>
                                        <li><a href="{{route('secretary.cates')}}" key="t-shops">Cataggaman ES</a></li>
                                    </ul>
                                </li>

                            @elseif (Auth::user()->level == "Elementary" && Auth::user()->district == "Tuguegarao NorthEast District")
                                <li class="menu-title" key="t-apps">District</li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-store"></i>
                                        <span key="t-ecommerce">NorthEast District</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{route('secretary.tnecs')}}" key="t-products">TNECS</a></li>
                                        <li><a href="{{route('secretary.carig')}}" key="t-product-detail">Carig IS</a></li>
                                        <li><a href="{{route('secretary.carigno')}}" key="t-orders">Carig Norte ES</a></li>
                                        <li><a href="{{route('secretary.linao')}}" key="t-customers">Linao ES</a></li>
                                        <li><a href="{{route('secretary.larionba')}}" key="t-cart">Larion Bajo ES</a></li>
                                        <li><a href="{{route('secretary.larional')}}" key="t-checkout">Larion Alto ES</a></li>
                                        <li><a href="{{route('secretary.balzain')}}" key="t-shops">Balzain East ES</a></li>
                                        <li><a href="{{route('secretary.pengue')}}" key="t-add-product">Pengue-Ruyu ES</a></li>
                                    </ul>
                                </li>

                            @elseif (Auth::user()->level == "Secondary - JHS")
                                <li class="menu-title" key="t-pages">Secondary</li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-store"></i>
                                        <span key="t-ecommerce">Junior High School</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{route('secretary.cnhs')}}" key="t-products">CNHS</a></li>
                                        <li><a href="{{route('secretary.catnhs')}}" key="t-product-detail">Catag. NHS</a></li>
                                        <li><a href="{{route('secretary.lnhs')}}" key="t-orders">Linao NHS</a></li>
                                        <li><a href="{{route('secretary.gnhs')}}" key="t-customers">Gosi NHS</a></li>
                                        <li><a href="{{route('secretary.tugwest')}}" key="t-cart">Tug. City West HS</a></li>
                                        <li><a href="{{route('secretary.tugscie')}}" key="t-checkout">Tug. City Science HS</a></li>
                                        <li><a href="{{route('secretary.annafunanis')}}" key="t-shops">Annafunan IS</a></li>
                                        <li><a href="{{route('secretary.carigis')}}" key="t-add-product">Carig IS</a></li>
                                        <li><a href="{{route('secretary.libagis')}}" key="t-add-product">Libag IS</a></li>
                                        <li><a href="{{route('secretary.namabbalanis')}}" key="t-add-product">Namabbalan IS</a></li>
                                        <li><a href="{{route('secretary.capatanis')}}" key="t-add-product">Capatan IS</a></li>
                                    </ul>
                                </li>

                            @elseif (Auth::user()->level == "Secondary - SHS")
                                <li class="menu-title" key="t-pages">Secondary</li>

                                <li>
                                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                                        <i class="bx bx-store"></i>
                                        <span key="t-ecommerce">Senior High School</span>
                                    </a>
                                    <ul class="sub-menu" aria-expanded="false">
                                        <li><a href="{{route('secretary.cnhsshs')}}" key="t-products">CNHS</a></li>
                                        <li><a href="{{route('secretary.catnhsshs')}}" key="t-product-detail">Catag. NHS</a></li>
                                        <li><a href="{{route('secretary.lnhsshs')}}" key="t-orders">Linao NHS</a></li>
                                        <li><a href="{{route('secretary.gnhsshs')}}" key="t-customers">Gosi NHS</a></li>
                                        <li><a href="{{route('secretary.tugwestshs')}}" key="t-cart">Tug. City West HS</a></li>
                                        <li><a href="{{route('secretary.tugscieshs')}}" key="t-checkout">Tug. City Science HS</a></li>
                                        <li><a href="{{route('secretary.carigisshs')}}" key="t-shops">Carig IS</a></li>
                                    </ul>
                                </li>
                            @endif
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
                                    <h4 class="mb-sm-0 font-size-18">Namabbalan IS</h4>

                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item active">Namabbalan IS</li>
                                        </ol>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
        
                                        <h4 class="card-title">Namabbalan Integrated School (Elem)</h4>
                                        
        
                                        <table id="datatable" class="table table-bordered dt-responsive  nowrap w-100">
                                            <thead>
                                            <tr>
                                                <th>Applicant Status</th>
                                                <th>Code</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Contact Number</th>
                                                <th>Address</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
        
        
                                            <tbody>
                                                @foreach ($user as $users)
                                                    <tr>
                                                        <td>{{ $users->newold }}</td>
                                                        <td>{{ $users->unique_code }}</td>
                                                        <td>{{ $users->name }}</td>
                                                        <td>{{ $users->email }}</td>
                                                        <td>{{ $users->con_number }}</td>
                                                        <td>{{ $users->address }}</td>
                                                        <td>
                                                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                <button type="button" class="btn btn-outline-info" data-toggle="modal" data-target=".bd-example-modal-lg-{{$users->id}}">
                                                                    Applicant Info
                                                                </button>
                                                                <div style="margin-right: 10px"></div>
                                                                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target=".gradeApplicant-{{$users->id}}">
                                                                    Enter Grade
                                                                </button>
                                                            </div>
                                                            <div class="modal fade bd-example-modal-lg-{{$users->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Applicant Details</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                        <div class="row">
                                                                            <div class="col-xl-12">
                                                                                <div class="card">
                                                                                    <div class="card-body">
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="formrow-email-input" class="form-label"><b>Name</b></label>
                                                                                                    <h6>{{ $users->name }}</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="formrow-password-input" class="form-label"><b>Unique Code</b></label>
                                                                                                    <h6>{{ $users->unique_code }}</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label for="formrow-firstname-input" class="form-label"><b>Address</b></label>
                                                                                            <h6>{{ $users->address }}</h6>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="formrow-email-input" class="form-label"><b>Email</b></label>
                                                                                                    <h6>{{ $users->email }}</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="formrow-password-input" class="form-label"><b>Contact Number</b></label>
                                                                                                    <h6>{{ $users->con_number }}</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="formrow-email-input" class="form-label"><b>Degree</b></label>
                                                                                                    <h6>{{ $users->degree }}</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="formrow-password-input" class="form-label"><b>Major</b></label>
                                                                                                    <h6>{{ $users->major }}</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="row">
                                                                                            <div class="col-md-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="formrow-email-input" class="form-label"><b>Level Applied</b></label>
                                                                                                    <h6>{{ $users->level }}</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-md-6">
                                                                                                <div class="mb-3">
                                                                                                    <label for="formrow-password-input" class="form-label"><b>District Applied</b></label>
                                                                                                    <h6>{{ $users->district }}</h6>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="mb-3">
                                                                                            <label for="formrow-firstname-input" class="form-label"><b>School Applied</b></label>
                                                                                            <h6>{{ $users->school }}</h6>
                                                                                        </div>
                                                                                    </div>
                                                                                    <!-- end card body -->
                                                                                </div>
                                                                                <!-- end card -->
                                                                            </div>
                                                                            <!-- end col -->
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                    </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="modal fade gradeApplicant-{{$users->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog modal-lg" role="document">
                                                                    <div class="modal-content">
                                                                    <div class="modal-header">
                                                                        <h5 class="modal-title" id="exampleModalLabel">Submit Grades</h5>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                        </button>
                                                                    </div>
                                                                    <form action="{{route('secretary.grade')}}" method="POST">
                                                                        @csrf
                                                                        <div class="modal-body">
                                                                            <div class="row">
                                                                                <div class="col-xl-12">
                                                                                    <div class="card">
                                                                                        <div class="card-body">
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <div class="mb-3">
                                                                                                        <input type="hidden" class="form-control" name="user_id" value="{{$users->id}}">
                                                                                                        <input type="hidden" class="form-control" name="email" value="{{$users->email}}">
                                                                                                        <input type="hidden" class="form-control" name="name" value="{{$users->name}}">
                                                                                                        <input type="hidden" class="form-control" name="con_number" value="{{$users->con_number}}">
                                                                                                        <input type="hidden" class="form-control" name="address" value="{{$users->address}}">
                                                                                                        <label for="formrow-email-input" class="form-label"><b>Name</b></label>
                                                                                                        <h6>{{ $users->name }}</h6>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="formrow-password-input" class="form-label"><b>Unique Code</b></label>
                                                                                                        <h6>{{ $users->unique_code }}</h6>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="inputEducation">Education</label>
                                                                                                        <input type="number" step="any" class="form-control" id="inputEducation" name="education" placeholder="Education Score">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="inputTeaching">Teaching Experience</label>
                                                                                                        <input type="number" step="any" class="form-control" id="inputTeaching" name="teaching_exp" placeholder="Teaching Experience Score">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="inputlet">LET/PBET Rating</label>
                                                                                                        <input type="number" step="any" class="form-control" id="inputlet" name="let_pbet" placeholder="LET/PBET Rating Score">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="inputst">Specialized Training</label>
                                                                                                        <input type="number" step="any" class="form-control" id="inputst" name="st_skills" placeholder="Specialized Training Score">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="inputint">Interview</label>
                                                                                                        <input type="number" step="any" class="form-control" id="inputint" name="interview" placeholder="Interview Score">
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-md-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="inputdem">Demo Teaching</label>
                                                                                                        <input type="number" step="any" class="form-control" id="inputdem" name="demo_teach" placeholder="Demo Teaching Score">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="row">
                                                                                                <div class="col-md-6">
                                                                                                    <div class="mb-3">
                                                                                                        <label for="inputcom">Communication Skills</label>
                                                                                                        <input type="number" step="any" class="form-control" id="inputcom" name="comm_skills" placeholder="Communication Skill Score">
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                            <!-- end card body -->
                                                                                    </div>
                                                                                        <!-- end card -->
                                                                                </div>
                                                                                    <!-- end col -->
                                                                            </div>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
        
                                    </div>
                                </div>
                            </div> <!-- end col -->
                        </div> <!-- end row -->
        
                       
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

        <!-- Required datatable js -->
        <script src="{{asset('assets/libs/datatables.net/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
        <!-- Buttons examples -->
        <script src="{{asset('assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js')}}"></script>
        <script src="{{asset('assets/libs/jszip/jszip.min.js')}}"></script>
        <script src="{{asset('assets/libs/pdfmake/build/pdfmake.min.js')}}"></script>
        <script src="{{asset('assets/libs/pdfmake/build/vfs_fonts.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.html5.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.print.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-buttons/js/buttons.colVis.min.js')}}"></script>
        
        <!-- Responsive examples -->
        <script src="{{asset('assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js')}}"></script>
        <script src="{{asset('assets/libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js')}}"></script>

        <!-- Datatable init js -->
        <script src="{{asset('assets/js/pages/datatables.init.js')}}"></script>    

        <script src="{{asset('assets/js/app.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    </body>

    @include('sweetalert::alert')

</html>