<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Dashboard &mdash; SMK WIMA</title>
    <link href="{{ asset('hekel/assets/img/tut-wuri.png') }}" rel="icon">
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
                    @can('message.show')
                        <li class="dropdown dropdown-list-toggle">
                            <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle">
                                <i id="message-icon" class="far fa-envelope" style="position: relative;">
                                    <span style="position: absolute; top: -10px; left: 20px; ">
                                        <small>{{ App\Models\Contact::where('status', 'belum dibaca')->count() ?? '0' }}</small>
                                    </span>
                                </i>
                            </a>
                            
                            <div class="dropdown-menu dropdown-list dropdown-menu-right">
                                <div class="dropdown-header">Messages
                                    <div class="float-right">
                                        <a href="#" onclick="refreshMessages()">Refresh</a>
                                    </div>
                                </div>
                            <div class="dropdown-list-content dropdown-list-message">
                                @foreach (App\Models\Contact::latest()->limit(5)->get() as $message)
                                    @php
                                        $statusStyle = $message->status == 'belum dibaca' ? 'background-color: lightblue;' : '';
                                    @endphp
                                    <a href="{{ route('message.show', $message->id) }}" class="dropdown-item dropdown-item-unread" style="{{ $statusStyle }}" onclick="markAsRead({{ $message->id }})">
                                        <div class="dropdown-item-avatar">
                                            <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle">
                                            <div class="is-online"></div>
                                        </div>
                                        <div class="dropdown-item-desc">
                                            <b>{{ $message->name }} - {{ $message->no_wa }}</b>
                                            <p>{{ $message->content }}</p>
                                            <div class="time">{{ $message->created_at->diffForHumans() }}</div>
                                        </div>
                                    </a>
                                @endforeach
                            </div>
                            <div class="dropdown-footer text-center">
                                <a href="{{ route('message.index') }}">Lihat Semua <i class="fas fa-chevron-right"></i></a>
                            </div>
                            </div>
                        </li>
                    @endcan
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
                                href="{{  route('ppdb.index') }}"><i class="fas fa-atlas"></i>
                                <span>Pendaftaran</span></a></li>
                        @endcan

                        @can('subjects.index')
                        <li class="{{ Request::is('subjects') ? 'active' : ''}}"><a class="nav-link"
                                href="{{ route('subjects.index') }}"><i class="fa fa-tags"></i>
                                <span>Kategori Soal</span></a></li>
                        @endcan

                        @can('questions.index')
                        <li class="{{ Request::is('questions') ? 'active' : ''}}"><a class="nav-link"
                                href="{{ route('questions.index') }}"><i class="fas fa-question"></i> <span>Soal</span></a>
                        </li>
                        @endcan

                        @can('exams.index')
                        <li class="{{ Request::is('exams') ? 'active' : ''}}"><a class="nav-link"
                                href="{{  route('exams.index') }}"><i class="fas fa-book-open"></i>
                                <span>Ujian</span></a></li>
                        @endcan

                        @can('kategori.index')
                        <li class="{{ Request::is('kategori') ? 'active' : ''}}"><a class="nav-link"
                                href="{{ route('kategori.index') }}"><i class="fas fa-newspaper"></i>
                                <span>Kategori Berita</span></a></li>
                        @endcan

                        @can('beritaadmin.index')
                        <li class="{{ Request::is('beritaadmin') ? 'active' : ''}}"><a class="nav-link"
                                href="{{ route('beritaadmin.index') }}"><i class="fas fa-newspaper"></i>
                                <span>Berita</span></a></li>
                        @endcan

                        @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') || auth()->user()->can('users.index'))
                        <li class="menu-header">PENGATURAN</li>
                        @endif

                        <li class="dropdown {{ Request::is('roles', 'permissions', 'users') ? 'active' : ''}}">
                            @if(auth()->user()->can('roles.index') || auth()->user()->can('permission.index') || auth()->user()->can('users.index'))
                                <a href="#" class="nav-link has-dropdown "><i class="fas fa-users"></i><span>Pengaturan User</span></a>
                            @endif
                            
                            <ul class="dropdown-menu">
                                @can('roles.index')
                                    <li class="{{ Request::is('roles') ? 'active' : ''}}"><a class="nav-link"
                                        href="{{ route('roles.index') }}"><i class="fas fa-unlock"></i> Role</a>
                                </li>
                                @endcan

                                @can('permissions.index')
                                    <li class="{{ Request::is('permissions') ? 'active' : ''}}"><a class="nav-link"
                                    href="{{ route('permissions.index') }}"><i class="fas fa-key"></i>
                                    Hak Akses</a></li>
                                @endcan

                                @can('users.index')
                                    <li class="{{ Request::is('users') ? 'active' : ''}}"><a class="nav-link"
                                        href="{{ route('users.index') }}"><i class="fas fa-users"></i> User</a>
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
    {{-- Read Message --}}
    <script>
        function markAsRead(messageId) {
            // Kirim permintaan AJAX ke server untuk menandai pesan sebagai sudah dibaca
            fetch(`/mark-as-read/${messageId}`, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }).then(response => {
                if (response.ok) {
                    // Jika permintaan berhasil, hapus gaya latar belakang pesan
                    const messageElement = document.querySelector(`.dropdown-item-unread[onclick="markAsRead(${messageId})"]`);
                    messageElement.style = '';
                } else {
                    console.error('Failed to mark message as read');
                }
            }).catch(error => {
                console.error('Failed to mark message as read:', error);
            });
        }
    </script>
    {{-- refresh --}}
    <script>
        function refreshMessages() {
            // Simpan referensi ke ikon pesan
            const messageIcon = document.getElementById('message-icon');
    
            // Tambahkan kelas spin ke ikon pesan untuk menunjukkan bahwa sedang memuat
            messageIcon.classList.add('fa-spin');
    
            // Reload halaman untuk memperbarui konten pesan
            setTimeout(() => {
                window.location.reload();
            }, 1000); // Reload setelah 1 detik (Anda dapat menyesuaikan waktu sesuai kebutuhan)
    
            // Untuk memberikan umpan balik visual bahwa pesan sedang dimuat, kita tambahkan kelas spin
            // Pada prakteknya, Anda dapat menyesuaikan ini dengan menambahkan indikator loading yang lebih baik
            // Jika Anda menggunakan AJAX untuk memperbarui konten pesan tanpa me-reload halaman
            setTimeout(() => {
                // Hapus kelas spin dari ikon pesan setelah selesai memuat
                messageIcon.classList.remove('fa-spin');
            }, 1500); // Menghapus kelas spin setelah 1,5 detik (Anda dapat menyesuaikan waktu ini juga)
        }
    </script>

    @livewireScripts
</body>
</html>