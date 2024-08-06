<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <!-- Font Awesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('plugins/fontawesome-free/css/all.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    {{-- JQuery --}}
    <script src="{{ asset('/plugins/jquery/jquery.js') }}"></script>
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    {{-- SweetAlert 2 --}}
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    {{-- Bootstrap 5.2 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-primary navbar-primary pe-3 ps-3">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link text-white" data-widget="pushmenu" href="#" role="button"><i
                            class="fas fa-bars"></i></a>
                </li>
                {{-- <li class="nav-item d-none d-sm-inline-block">
                    <a href="index3.html" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li> --}}
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        {{-- <i class="fas fa-search"></i> --}}
                    </a>
                    {{-- <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search  text-white"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times  text-white"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div> --}}
                </li>

                
                
                {{-- <li class="nav-item">
                    <a class="nav-link text-white" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link text-white" data-widget="" href="#" role="button">
                        <i class="fa-solid fa-user"></i>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link text-white" data-widget="control-sidebar" data-slide="true" href="#"
                        role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> --}}
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar bg-white elevation-4"> <!-- sidebar-dark-primary -->
            <!-- Brand Logo -->
            <a href="/" class="brand-link border-bottom" style="text-decoration: none;">
                <img src="{{ asset('dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8;">
                <span class="brand-text font-weight-800 text-black" style="font-weight: 800; margin-left: 10px; letter-spacing: 3px;">{{ config('app.name') }}</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block text-dark font-weight">{{ Auth::user()->name }} {{ Auth::user()->lastname }}</a>
                    </div>
                </div> --}}


                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        

                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

                        {{-- <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>
                                    Starter Pages
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="#" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Active Page</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="#" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Inactive Page</p>
                                    </a>
                                </li>
                            </ul>
                        </li> --}}

                        {{-- MODULO ADMIN --}}
                        <li class="nav-header text-black-50 border-bottom pb-0 mb-2 mt-2"><span class="" style="font-size: 12px; font-weight: 800;">ADMIN</span></li>
                        <li class="nav-item">
                            <a href="{{ url('users/') }}" class="nav-link text-dark">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-user-gear"></i>
                                <p>Usuarios</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('roles/') }}" class="nav-link text-dark">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-user-tag"></i>
                                <p>Roles</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-circle-plus"></i>
                                <p>Cajas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-circle-plus"></i>
                                <p>Mesas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-circle-plus"></i>
                                <p>Platos</p>
                            </a>
                        </li>


                        {{-- MODULO SALON --}}
                        <li class="nav-header text-black-50 border-bottom pb-0 mb-2 mt-2"><span class="" style="font-size: 12px; font-weight: 800;">SALÓN</span></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-cash-register"></i>
                                <p>Cajas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-stroopwafel"></i>
                                <p>Mesas</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-file-pen"></i>
                                <p>Ordenes</p>
                            </a>
                        </li>
                        {{-- MODULO REPORTES --}}
                        <li class="nav-header text-black-50 border-bottom pb-0 mb-2 mt-2"><span class="" style="font-size: 12px; font-weight: 800;">REPORTES</span></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-laptop-file"></i>
                                <p>Días</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-scroll"></i>
                                <p>Facturas</p>
                            </a>
                        </li>
                        
                        {{-- MODULO AJUSTES --}}
                        <li class="nav-header text-black-50 border-bottom pb-0 mb-2 mt-2"><span class="" style="font-size: 12px; font-weight: 800;">AJUSTES</span></li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-user"></i>
                                <p>Perfíl</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-sliders"></i>
                                <p>Configuracion</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                {{-- <i class="nav-icon fas fa-file"></i> --}}
                                <i class="nav-icon fa-solid fa-circle-question"></i>
                                <p>Ayuda</p>
                            </a>
                        </li>
                        
                        
                        






                        <li class="nav-item mt-4">
                            <a href="{{ route('logout') }}" class="d-flex nav-link bg-danger justify-content-center align-items-center"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                {{-- <i class="far fa-circle nav-icon"></i> --}}
                                <i class="nav-icon fa-solid fa-arrow-right-from-bracket"></i>
                                <p>Cerrar Sesion</p>
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="post">
                                @csrf
                            </form>
                        </li>
                        {{-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Simple Link
                                    <span class="right badge badge-danger">New</span>
                                </p>
                            </a>
                        </li> --}}
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content ms-4 me-4" style="background-color: ;"> <!-- #f4f6f9 -->
                @yield('content')
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
            <div class="p-3">
                <h5>Title</h5>
                <p>Sidebar content</p>
            </div>
        </aside>
        <!-- /.control-sidebar -->

        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">
                V 1.0
            </div>
            <!-- Default to the left -->
            <strong>Copyright &copy; 2024 <a href="#">AdminCo</a>.</strong> All rights
            reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    <!-- jQuery -->
    <script src="{{ asset('plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    {{-- <script src="{{ asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script> --}}
    <!-- AdminLTE App -->
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    {{-- Bootstrap 5.2 --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
</body>

</html>
