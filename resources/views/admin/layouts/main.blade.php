<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CRM</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('css/backend/vendors/iconfonts/mdi/css/materialdesignicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/vendors/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('css/backend/vendors/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('css/backend/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('images/backend/images/favicon.png')}}" />
    {{--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
</head>

<body>
<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->

   @extends('admin.includes.navebar')

    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        {{--<!-- partial:partials/_sidebar.html -->--}}
     {{--@extends('admin.includes.sidebar')--}}

        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-profile">
                    <div class="nav-link">
                        <div class="user-wrapper">
                            <div class="profile-image">
                                <img src="{{asset('images/backend/images/faces/face1.jpg')}}" alt="profile image">
                            </div>
                            <div class="text-wrapper">
                                <p class="profile-name">{{ Auth::user()->name }}</p>
                                <div>
                                    <small class="designation text-muted">SuperAdmin</small>
                                    <span class="status-indicator online"></span>
                                </div>
                            </div>
                        </div>
                        <button class="btn btn-success btn-block">New Project
                            <i class="mdi mdi-plus"></i>
                        </button>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="menu-icon mdi mdi-television"></i>
                        <span class="menu-title">Dashboard</span>
                    </a>
                </li>
                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">--}}
                        {{--<i class="menu-icon mdi mdi-truck"></i>--}}
                        {{--<span class="menu-title">Vehicle Management</span>--}}
                        {{--<i class="menu-arrow"></i>--}}
                    {{--</a>--}}
                    {{--<div class="collapse" id="ui-basic">--}}
                        {{--<ul class="nav flex-column sub-menu">--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{route('vechicles.index')}}">All Vehicles/Trucks</a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="">Typography</a>--}}
                            {{--</li>--}}
                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</li>--}}
                <li class="nav-item">
                    <a class="nav-link" href="pages/forms/basic_elements.html">
                        <i class="menu-icon mdi mdi-backup-restore"></i>
                        <span class="menu-title">Booking Info</span>
                    </a>
                </li>


                {{--<li class="nav-item">--}}
                    {{--<a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">--}}
                        {{--<i class="menu-icon mdi mdi-human"></i>--}}
                        {{--<span class="menu-title">Teams</span>--}}
                        {{--<i class="menu-arrow"></i>--}}
                    {{--</a>--}}
                    {{--<div class="collapse" id="auth">--}}
                        {{--<ul class="nav flex-column sub-menu">--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href=""> Employees Team </a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href="{{url('admin/drivers')}}"> Drivers Team </a>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item">--}}
                                {{--<a class="nav-link" href=""> Other </a>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                    {{--</div>--}}
                {{--</li>--}}

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic2">
                        <i class="menu-icon mdi mdi-truck"></i>
                        <span class="menu-title">Leads</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="ui-basic2">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('leads.index')}}">Leads</a>
                            </li>
                            
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('products.index')}}">
                        <i class="menu-icon mdi mdi-shopping"></i>
                        <span class="menu-title">Products</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{route('brands.index')}}">
                        <i class="menu-icon mdi mdi-shopping"></i>
                        <span class="menu-title">Brands</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('clients.index')}}">
                        <i class="menu-icon mdi mdi-nature-people"></i>
                        <span class="menu-title">Clients</span>
                    </a>
                </li>

            </ul>
        </nav>


        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">


            @yield('content')

         </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
           @extends('admin.includes.footer')
            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>

    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

<!-- plugins:js -->
<script src="{{asset('js/backend/vendors/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('js/backend/vendors/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('js/backend/js/off-canvas.js')}}"></script>
<script src="{{asset('js/backend/js/misc.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('js/backend/js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
</body>

</html>