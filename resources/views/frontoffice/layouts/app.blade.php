<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
<meta name="mobile-web-app-capable" content="yes">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- FAVICONS / PWA --}}
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/img/favicons/apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('assets/img/favicons/apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('assets/img/favicons/apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/favicons/apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('assets/img/favicons/apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('assets/img/favicons/apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('assets/img/favicons/apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('assets/img/favicons/apple-touch-icon-152x152.png') }}">
    <link rel="apple-touch-icon" href="{{ asset('assets/img/favicons/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/img/favicons/favicon-16x16.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/img/favicons/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('assets/img/favicons/favicon-96x96.png') }}">
    <link rel="icon" type="image/png" sizes="128x128" href="{{ asset('assets/img/favicons/favicon-128.png') }}">
    <link rel="icon" type="image/png" sizes="196x196"
        href="{{ asset('assets/img/favicons/favicon-196x196.png') }}">
    <link rel="manifest" href="{{ asset('assets/img/favicons/site.webmanifest') }}">
    <link rel="mask-icon" href="{{ asset('assets/img/favicons/favicon.svg') }}" color="#3b82f6">
    <link rel="shortcut icon" href="{{ asset('assets/img/favicons/favicon.ico') }}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="{{ asset('assets/img/favicons/mstile-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">

    {{-- META SEO --}}
    <meta name="author" content="DentalPro">
    <meta name="keywords" content="@yield('meta_keywords', 'dental, outils dentaires, boutique')">
    <meta name="description" content="@yield('meta_description', 'DentalPro - votre boutique en ligne d’outils dentaires')">

    <title>@yield('title', 'DentalPro - Boutique en ligne')</title>

    {{-- STYLES --}}
    <link rel="stylesheet" href="{{ asset('assets/plugins/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fonts/Linearicons/Font/demo-files/demo.css') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Jost:400,500,600,700&display=swap&ver=1607580870">
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap4/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/owl-carousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/slick/slick/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/lightGallery/dist/css/lightgallery.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/noUiSlider/nouislider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/home-1.css') }}">

    @stack('styles')
</head>

<body>

    <div class="ps-page">
        {{-- Header --}}
        @include('frontoffice.partials.header')

        {{-- Mobile Header --}}
        @include('frontoffice.partials.header-mobile')

        {{-- Main Content --}}
        @yield('content')

        {{-- Footer --}}
        @include('frontoffice.partials.footer')

        {{-- Modals --}}
        @include('frontoffice.partials.modals')
    </div>

    {{-- SCRIPTS --}}
    <script src="{{ asset('assets/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/bootstrap4/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/jquery-bar-rating/dist/jquery.barrating.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/lightGallery/dist/js/lightgallery-all.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/slick/slick/slick.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/noUiSlider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/mini-cart.js') }}"></script>
    <script src="{{ asset('assets/js/quickview.js') }}"></script>
    <script src="{{ asset('assets/js/search.js') }}"></script>



    @stack('scripts')
</body>

</html>
