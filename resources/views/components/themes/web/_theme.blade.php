<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>{{ config('config.site_name') }} - {{ config('config.site_title') }}</title>
    <meta content="{{ config('config.site_desc') }}" name="description">
    <meta name="keywords" content="{{ config('config.site_keywords') }}">

    <!-- Favicons -->
    <link href="{{ asset('themes/web/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('themes/web/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('themes/web/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/web/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/web/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/web/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/web/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('themes/web/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('themes/web/assets/css/style.css') }}" rel="stylesheet">
    <!-- Load CSS -->
    <link href="{{ asset('shared/css/load.css') }}" rel="stylesheet">
    <!-- My Custom CSS -->
    <link href="{{ asset('themes/web/assets/css/custom.css') }}" rel="stylesheet">
    @stack('css')

    <!-- =======================================================
  * Template Name: Techie - v4.10.0
  * Template URL: https://bootstrapmade.com/techie-free-skin-bootstrap-3/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <div class="ajax-load d-none">
        <div class="ajax-load-box">
            <div class="ajax-preloader">
                <img src="{{ asset('shared/images/preloader.gif') }}">
            </div>
            <p class="ajax-load-box-title">Aguarde, carregando...</p>
        </div>
    </div>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center justify-content-between">
            <h1 class="logo"><a href="{{ route('home') }}">{{ config('config.site_name') }}</a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo"><img src="/themes/web/assets/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">Sobre</a></li>
                    <li><a class="nav-link scrollto" href="#services">Serviços</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Portfolio</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Contato</a></li>
                    <li><a class="getstarted scrollto" href="#about">Bora Lá</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

        </div>
    </header>
    <!-- End Header -->

    {{ $slot }}

    <!-- ======= Footer ======= -->
    <footer id="footer">

        <div class="footer-top">
            <div class="container">
                <div class="row">

                    <div class="col-lg-3 col-md-6 footer-contact">
                        <h3>{{ config('config.site_name') }}</h3>
                        <p>
                            {{ config('config.site_addr_street') }}, Nº {{ config('config.site_addr_number') }},
                            {{ config('config.site_addr_complement') }} <br>
                            {{ config('config.site_addr_city') }}, {{ config('config.site_addr_state') }}<br>
                            <strong>Celular:</strong> {{ config('config.site_phone_number_fmt') }}<br>
                            <strong>Email:</strong> {{ config('config.site_email_contact') }}<br>
                        </p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Links</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="#hero">Home</a>
                            </li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                    href="#about">Sobre</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                    href="#services">Serviços</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                    href="#portfolio">Portfolio</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                    href="#contact">Contato</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                        <h4>Serviços</h4>
                        <ul>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                    href="#services">Sites</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                    href="#services">Sistemas</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                    href="#services">Landing Pages</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                    href="#services">Aplicativos Mobile (Android/IOS)</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                    href="#services">Plataforma EAD</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                    href="#services">E-Commerce</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                    href="#services">Marketing Automation</a></li>
                            <li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto"
                                    href="#services">Social Media</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter">
                        <h4>{{ config('config.site_name') }} Newsletter</h4>
                        <p>Receba dicas, promoções de nossa agência.</p>
                        <form action="{{ route('newsletter.store') }}" method="post">
                            @csrf
                            <div class="newsletter-input">
                                <input type="email" name="email">
                                <input type="submit" value="Assinar">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container">

            <div class="copyright-wrap d-md-flex py-4">
                <div class="me-md-auto text-center text-md-start">
                    <div class="copyright">
                        &copy; Copyright <strong><span>{{ config('config.site_name') }}</span></strong>. All Rights
                        Reserved
                    </div>
                </div>
                <div class="social-links text-center text-md-right pt-3 pt-md-0">
                    <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                    <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                    <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                    <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                    <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
                </div>
            </div>

        </div>
    </footer>
    <!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('themes/web/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('themes/web/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('themes/web/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('themes/web/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('themes/web/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('themes/web/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('themes/web/assets/js/main.js') }}"></script>
    <script src="{{ asset('build/assets/app.js') }}"></script>
    <!-- Form Response -->
    <script src="{{ asset('themes/admin/assets/custom/js/validation-errors.js') }}"></script>
    @stack('js')

</body>

</html>
