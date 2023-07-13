<!DOCTYPE html>
<html lang="en">

@include('Layout.default.head')

<body class="light-mode hold-transition sidebar-mini layout-fixed layout-navbar-fixed sidebar-collapse">
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-light" id="navbar">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button">
                        <i class="fas fa-bars"></i>
                    </a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="{{ route('dashboard.index') }}" class="nav-link">Home</a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Contact</a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                    aria-label="Search" />
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" role="button">
                        <i class="far fa-sun" id="theme-switcher"></i>
                    </a>
                </li>
                <li class="nav-item dropdown no-arrow">
                    <a class="btn pr-3 dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" role="button"
                        aria-haspopup="true" aria-expanded="false">
                        <img src="{{ asset(auth()->user()->foto) }}" width="30" height="30"
                            style="object-fit: cover; object-position: center" class="img-circle elevation-2"
                            alt="User Image" />
                    </a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <p class="dropdown-item" href="#">Logged in as {{ auth()->user()->nama }}</p>
                        <a class="dropdown-item" href="{{ route('auth.logout') }}">Log Out</a>
                        <!-- <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('dashboard.index') }}" class="brand-link">
                <img src="{{ asset('img/AdminLTELogo.png') }}" alt="logo" class="brand-image img-circle elevation-3"
                    style="opacity: 0.8" />
                <span class="brand-text font-weight-light">Argia</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class with font-awesome or any other icon font library -->
                        <li class="nav-item">
                            <a href="{{ route('dashboard.index') }}"
                                class="nav-link {{ str_starts_with(request()->route()->getName(),'dashboard.index')? 'active': '' }}">
                                <i class="nav-icon fas fa-tachometer-alt"></i>
                                <p>Dashboard</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('user.index') }}"
                                class="nav-link {{ str_starts_with(request()->route()->getName(),'user.index')? 'active': '' }}">
                                <i class="nav-icon fas fa-user-shield"></i>
                                <p>User</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('program.index') }}"
                                class="nav-link {{ str_starts_with(request()->route()->getName(),'program.index')? 'active': '' }}">
                                <i class="nav-icon fas fa-book"></i>
                                <p>Program</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('siswa.index') }}"
                                class="nav-link {{ str_starts_with(request()->route()->getName(),'siswa.index')? 'active': '' }}">
                                <i class="nav-icon fas fa-graduation-cap"></i>
                                <p>Siswa</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{ route('user.profile', auth()->user()->id) }}"
                                class="nav-link {{ str_starts_with(request()->route()->getName(),'user.profile')? 'active': '' }}">
                                <i class="nav-icon fas fa-user"></i>
                                <p>Profile</p>
                            </a>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        @yield('content')
        <!-- /.content-wrapper -->


        <!-- Main Footer -->
        <footer class="main-footer">
            <!-- To the right -->
            <div class="float-right d-none d-sm-inline">Anything you want</div>
            <!-- Default to the left -->
            <strong>
                Copyright &copy; {{ date('Y') }}
                <a href="https://adminlte.io">AdminLTE.io</a>.
            </strong>
            All rights reserved.
        </footer>
    </div>
    <!-- ./wrapper -->

    <!-- REQUIRED SCRIPTS -->

    @include('Layout.default.script')
</body>

</html>
