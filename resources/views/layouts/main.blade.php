<!DOCTYPE html>
<html lang="fr">

<head>
    <title>@yield('title') | DentalPro Backoffice</title>
    <!-- [Meta] -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description"
        content="Backoffice pour la gestion des ventes, des stocks, et des services de maintenance d'outils et équipements dentaires. Interface pour la distribution et le suivi des produits professionnels.">
    <meta name="keywords"
        content="DentalPro, outils dentaires, équipement dentaire, maintenance, vente, stock, logistique, distribution, backoffice, Laravel 11, administration">
    <meta name="author" content="DentalPro Team">

    <!-- [Favicon] icon -->
    <link rel="icon" href="{{ asset('assets/img/favicons/favicon.svg') }}" type="image/x-icon">

    @yield('css')

    @include('layouts.head-css')
</head>

<body data-pc-preset="preset-1" data-pc-sidebar-theme="light" data-pc-sidebar-caption="true" data-pc-direction="ltr" data-pc-theme="light">
    
    @include('layouts.loader')
    @include('layouts.sidebar')
    @include('layouts.topbar')

    <!-- [ Main Content ] start -->
    <div class="pc-container">
        <div class="pc-content">
            @if (View::hasSection('breadcrumb-item-active'))
                {{-- NOTE: Using 'breadcrumb-item-active' is generally safer here to check if breadcrumbs are required --}}
                @include('layouts.breadcrumb')
            @endif
            <!-- [ Main Content ] start -->
            @yield('content')
            <!-- [ Main Content ] end -->
        </div>
    </div>
    <!-- [ Main Content ] end -->

    @include('layouts.footer')
    @include('layouts.customizer')

    @include('layouts.footerjs')

    @yield('scripts')

</body>
<!-- [Body] end -->
</html>