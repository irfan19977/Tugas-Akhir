<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard &mdash; SMK WIMA</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/gear.svg') }}" type="image/x-icon">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('assets/modules/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/modules/fontawesome/css/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('assets/modules/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/select2-bootstrap4.css') }}" />

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">

    <script src="{{ asset('assets/modules/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>

    @livewireStyles
</head>

<body style="background: #e2e8f0">
    <div id="app">
        <div class="main-wrapper main-wrapper-1">
            <div class="navbar-bg"></div>
            <nav class="navbar navbar-expand-lg main-navbar">
                <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                        <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i
                                    class="fas fa-bars"></i></a></li>
                    </ul>
                </form>
                <ul class="navbar-nav navbar-right">

                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                            class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                            <img alt="image" src="{{ asset('assets/img/avatar/avatar-1.png') }}"
                                class="rounded-circle mr-1">
                            <div class="d-sm-none d-lg-inline-block">Hi, {{ auth()->user()->name }}</div>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a href="{{ route('logout') }}" style="cursor: pointer" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                                class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
            </nav>
            <div class="main-sidebar sidebar-style-2">
                <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                        <a href="/">SMK WIYATA MANDALA</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                        <a href="/">SMK</a>
                    </div>
                    <ul class="sidebar-menu">
                        <li class="menu-header">MAIN MENU</li>
                        <li class="{{ Request::is('dashboard') ? 'active' : ''}}"><a class="nav-link"
                                href="{{ route('dashboard.index') }}"><i class="fas fa-tachometer-alt"></i>
                                <span>Dashboard</span></a></li>
                        @can('pengumuman.index')
                        <li class="{{ Request::is('pengumuman') ? 'active' : ''}}"><a class="nav-link"
                                href="{{  route('pengumuman.index') }}"><i class="fa fa-bullhorn"></i>
                                <span>Pengumuman</span></a></li>
                        @endcan

                        @can('ppdb.index')
                        <li class="{{ Request::is('ppdb') ? 'active' : ''}}"><a class="nav-link"
                                href="{{  route('ppdb.index') }}"><i class="fa fa-pencil"></i>
                                <span>Pendaftaran</span></a></li>
                        @endcan

                        @can('exams.index')
                        <li class="{{ Request::is('exams') ? 'active' : ''}}"><a class="nav-link"
                                href="{{  route('exams.index') }}"><i class="fas fa-book-open"></i>
                                <span>Exams</span></a></li>
                        @endcan

                        @can('questions.index')
                        <li class="{{ Request::is('questions') ? 'active' : ''}}"><a class="nav-link"
                                href="{{ route('questions.index') }}"><i class="fas fa-question"></i> <span>Questions</span></a>
                        </li>
                        @endcan

                        @can('subjects.index')
                        <li class="{{ Request::is('subjects') ? 'active' : ''}}"><a class="nav-link"
                                href="{{ route('subjects.index') }}"><i class="fas fa-atlas"></i>
                                <span>Subject</span></a></li>
                        @endcan

                        @can('beritaadmin.index')
                        <li class="{{ Request::is('beritaadmin') ? 'active' : ''}}"><a class="nav-link"
                                href="{{ route('beritaadmin.index') }}"><i class="fa fa-newspaper-o"></i>
                                <span>Berita</span></a></li>
                        @endcan

                        @if(auth()->user()->can('images.index') || auth()->user()->can('videos.index') || auth()->user()->can('audios.index') || auth()->user()->can('documents.index'))
                        <li class="menu-header">GALERI</li>
                        @endif
                        
                        @can('images.index')
                        <li class="{{ Request::is('images') ? 'active' : ''}}"><a class="nav-link"
                                href="{{ route('images.index') }}"><i class="fas fa-image"></i>
                                <span>Image</span></a></li>
                        @endcan

                        @can('videos.index')
                        <li class="{{ Request::is('videos') ? 'active' : ''}}"><a class="nav-link"
                                href="{{ route('videos.index') }}"><i class="fas fa-video"></i>
                                <span>Video</span></a></li>
                        @endcan

                        @can('audios.index')
                        <li class="{{ Request::is('audios') ? 'active' : ''}}"><a class="nav-link"
                                href="{{ route('audios.index') }}"><i class="fas fa-volume-up"></i>
                                <span>Audio</span></a></li>
                        @endcan

                        @can('documents.index')
                        <li class="{{ Request::is('documents') ? 'active' : ''}}"><a class="nav-link"
                                href="{{ route('documents.index') }}"><i class="fas fa-file-word"></i>
                                <span>Document</span></a></li>
                        @endcan

                        @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') || auth()->user()->can('users.index'))
                        <li class="menu-header">PENGATURAN</li>
                        @endif
                        
                        @can('sliders.index')
                        <li class="{{ setActive('admin/slider') }}"><a class="nav-link"
                                href="#"><i class="fas fa-laptop"></i>
                                <span>Sliders</span></a></li>
                        @endcan

                        <li
                            class="dropdown {{ Request::is('roles', 'permissions', 'users') ? 'active' : ''}}">
                            @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') || auth()->user()->can('users.index'))
                                <a href="#" class="nav-link has-dropdown "><i class="fas fa-users"></i><span>Users
                                Management</span></a>
                            @endif
                            
                            <ul class="dropdown-menu">
                                @can('roles.index')
                                    <li class="{{ Request::is('roles') ? 'active' : ''}}"><a class="nav-link"
                                        href="{{ route('roles.index') }}"><i class="fas fa-unlock"></i> Roles</a>
                                </li>
                                @endcan

                                @can('permissions.index')
                                    <li class="{{ Request::is('permissions') ? 'active' : ''}}"><a class="nav-link"
                                    href="{{ route('permissions.index') }}"><i class="fas fa-key"></i>
                                    Permissions</a></li>
                                @endcan

                                @can('users.index')
                                    <li class="{{ Request::is('users') ? 'active' : ''}}"><a class="nav-link"
                                        href="{{ route('users.index') }}"><i class="fas fa-users"></i> Users</a>
                                </li>
                                @endcan
                            </ul>
                        </li>
                    </ul>
                </aside>
            </div>

            <!-- Main Content -->
            @yield('content')

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2021 <div class="bullet"></div> UJIAN APP <div class="bullet"></div> All Rights
                    Reserved.
                </div>
                <div class="footer-right">

                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="{{ asset('assets/modules/popper.js') }}"></script>
    <script src="{{ asset('assets/modules/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/modules/nicescroll/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('assets/js/stisla.js') }}"></script>
    <script src="{{ asset('assets/modules/select2/dist/js/select2.full.min.js') }}"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
    <script>
        //active select2
        $(document).ready(function () {
            $('select').select2({
                theme: 'bootstrap4',
                width: 'style',
            });
        });

        //flash message
        @if(session()->has('success'))
        swal({
            type: "success",
            icon: "success",
            title: "BERHASIL!",
            text: "{{ session('success') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @elseif(session()->has('error'))
        swal({
            type: "error",
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            timer: 1500,
            showConfirmButton: false,
            showCancelButton: false,
            buttons: false,
        });
        @endif
    </script>

    @livewireScripts
</body>
</html>