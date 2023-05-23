<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('config.site_title') }}</title>
    <link rel="icon" href="{{ asset('themes/admin/assets/dist/img/AdminLTELogo.png') }}" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('themes/admin/assets/dist/img/AdminLTELogo.png') }}" />

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('themes/admin/assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- DataTables -->
    <link rel="stylesheet"
        href="{{ asset('themes/admin/assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('themes/admin/assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ asset('themes/admin/assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css') }}">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Tempusdominus Bootstrap 4 -->
    <link rel="stylesheet"
        href="{{ asset('themes/admin/assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css') }}">
    <!-- iCheck -->
    <link rel="stylesheet" href="{{ asset('themes/admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- JQVMap -->
    <link rel="stylesheet" href="{{ asset('themes/admin/assets/plugins/jqvmap/jqvmap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('themes/admin/assets/dist/css/adminlte.min.css') }}">
    <!-- overlayScrollbars -->
    <link rel="stylesheet"
        href="{{ asset('themes/admin/assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="{{ asset('themes/admin/assets/plugins/daterangepicker/daterangepicker.css') }}">
    <!-- summernote -->
    <link rel="stylesheet" href="{{ asset('themes/admin/assets/plugins/summernote/summernote-bs4.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet"
        href="{{ asset('themes/admin/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('themes/admin/assets/plugins/toastr/toastr.min.css') }}">
    <!-- Load CSS -->
    <link href="{{ asset('shared/css/load.css') }}" rel="stylesheet">
    @stack('css')
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="ajax-load d-none">
        <div class="ajax-load-box">
            <div class="ajax-preloader">
                <img src="{{ asset('shared/images/preloader.gif') }}">
            </div>
            <p class="ajax-load-box-title">Aguarde, carregando...</p>
        </div>
    </div>
    @if (session('message'))
        <div class="flash-response" data-message="{{ session('message')->message }}"
            data-status="{{ session('message')->status }}"></div>
    @endif
    <div class="modal fade" data-backdrop="static" data-keyboard="false" id="data-destroy">
        <div class="modal-dialog">
            <div class="modal-content bg-danger">
                <div class="modal-body"></div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn btn-outline-light" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-outline-light btn-confirm">Confirmar</button>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="{{ asset('themes/admin/assets/dist/img/AdminLTELogo.png') }}"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Notifications Dropdown Menu -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="{{ route('admin.dash.home') }}" class="brand-link">
                <span class="brand-text font-weight-light">Map. de Competências</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ asset('storage/photos/' . auth()->user()->photo) }}"
                            class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="{{ route('admin.users.edit', auth()->user()->id) }}"
                            class="d-block">{{ auth()->user()->fullName() }}</a>
                    </div>
                </div>

                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Buscar"
                            aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                        data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                        @foreach (config('config.admin_menus') as $menu)
                            @php
                                $active = url('') . $menu->route == url()->current();
                            @endphp
                            <li class="nav-item">
                                <a href="{{ $menu->route }}" class="nav-link {{ $active ? 'active' : '' }}"
                                    target="{{ $menu->target }}">
                                    <i class="nav-icon fas {{ $menu->icon }}"></i>
                                    <p>{{ $menu->name }}</p>
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Main content -->
            {{ $slot }}
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; {{ date('Y') }} <a
                    href="#">{{ config('config.site_name') }}</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0-rc
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('themes/admin/assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="{{ asset('themes/admin/assets/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <!-- Bootstrap 4 -->
    <script src="{{ asset('themes/admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js') }}">
    </script>
    <script src="{{ asset('themes/admin/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}">
    </script>
    <script src="{{ asset('themes/admin/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/plugins/jszip/jszip.min.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/plugins/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/plugins/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/plugins/datatables-buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/plugins/datatables-buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/plugins/datatables-buttons/js/buttons.colVis.min.js') }}"></script>
    <!-- ChartJS -->
    <script src="{{ asset('themes/admin/assets/plugins/chart.js/Chart.min.js') }}"></script>
    <!-- Sparkline -->
    <script src="{{ asset('themes/admin/assets/plugins/sparklines/sparkline.js') }}"></script>
    <!-- JQVMap -->
    <script src="{{ asset('themes/admin/assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <!-- jQuery Knob Chart -->
    <script src="{{ asset('themes/admin/assets/plugins/jquery-knob/jquery.knob.min.js') }}"></script>
    <!-- daterangepicker -->
    <script src="{{ asset('themes/admin/assets/plugins/moment/moment.min.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/plugins/daterangepicker/daterangepicker.js') }}"></script>
    <!-- Tempusdominus Bootstrap 4 -->
    <script src="{{ asset('themes/admin/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js') }}">
    </script>
    <!-- Summernote -->
    <script src="{{ asset('themes/admin/assets/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <!-- overlayScrollbars -->
    <script src="{{ asset('themes/admin/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('themes/admin/assets/dist/js/adminlte.js') }}"></script>
    <script>
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
    <script src="{{ asset('themes/admin/assets/dist/js/axios.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('themes/admin/assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('themes/admin/assets/plugins/toastr/toastr.min.js') }}"></script>
    <!-- Form Response -->
    <script src="{{ asset('themes/admin/assets/custom/js/validation-errors.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/custom/js/destroy.js') }}"></script>
    @stack('js')
</body>

</html>
