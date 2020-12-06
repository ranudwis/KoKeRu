<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome Icons -->
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="{{ asset('dist/js/adminlte.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('manager/dashboard.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('manager/cs.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('manager/ruangan.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('manager/crud_ruangan.css') }}">
    <!-- Theme style -->
    <title>Dashboard Manager</title>
</head>
<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <li class="dropdown user user-menu open">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                        <img src="{{ @asset('dist/img/manager.jpg') }}" class="user-image" alt="User Image">
                        <span class="hidden-xs">{{ auth()->user()->nama }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="{{ @asset('dist/img/manager.jpg') }}" class="img-circle" alt="User Image">
                            <p>{{ auth()->user()->nama }} <small>Member since 2020</small></p>
                        </li>
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="" class="btn btn-primary btn-flat">Edit Profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="/logout" class="btn btn-danger btn-flat">Log out</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->


        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">
                <img src="{{ @asset('dist/img/room.png') }}" class="brand-image elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-bold">KoKeRu</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <li class="nav-item">
                            <a href="{{ url('manager/dashboard') }}" class="nav-link">
                                <i class="far fa-list-alt"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ url('manager/ruangan') }}" class="nav-link">
                                <i class="fas fa-building"></i>
                                <p>
                                    Ruangan
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/manager/cs" class="nav-link">
                                <i class="fas fa-user"></i>
                                <p>
                                    Cleaning Service
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/manager/laporan" class="nav-link">
                                <i class="fas fa-book"></i>
                                <p>
                                    Laporan
                                </p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">    
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <div class="content">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div>
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                @yield('content')
            </div>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
</body>
</html>
