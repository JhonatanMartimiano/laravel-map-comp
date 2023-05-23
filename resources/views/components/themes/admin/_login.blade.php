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
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('themes/admin/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('themes/admin/assets/dist/css/adminlte.min.css') }}">
    <!-- SweetAlert2 -->
    <link rel="stylesheet"
        href="{{ asset('themes/admin/assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css') }}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{ asset('themes/admin/assets/plugins/toastr/toastr.min.css') }}">
    <!-- Load CSS -->
    <link href="{{ asset('shared/css/load.css') }}" rel="stylesheet">
    @stack('css')
</head>

<body class="hold-transition login-page">
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
    <div class="login-box w-25">
        <div class="login-logo">
            <a href="#">Mapeamento de Competências</a>
        </div>
        <!-- /.login-logo -->
        <div class="card">
            <div class="card-body login-card-body">
                {{ $slot }}
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('themes/admin/assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('themes/admin/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('themes/admin/assets/dist/js/adminlte.min.js') }}"></script>
    <script src="{{ asset('themes/admin/assets/dist/js/axios.min.js') }}"></script>
    <!-- SweetAlert2 -->
    <script src="{{ asset('themes/admin/assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
    <!-- Toastr -->
    <script src="{{ asset('themes/admin/assets/plugins/toastr/toastr.min.js') }}"></script>
    <!-- Form Response -->
    <script src="{{ asset('themes/admin/assets/custom/js/validation-errors.js') }}"></script>
    @stack('js')
</body>

</html>
