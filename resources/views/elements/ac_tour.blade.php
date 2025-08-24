@extends('layouts.layout-components')

@section('title', 'Tour')
@section('breadcrumb-title', 'Tour')
@section('breadcrumb-text', 'Intro.js is a lightweight JavaScript library for creating step-by-step and powerful
    customer onboarding tours')

@section('breadcrumb-link', 'https://introjs.com/')

@section('css')
    <!-- [Page specific CSS] start -->
    <!-- enjoyhint css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/introjs.min.css') }}">
    <!-- [Page specific CSS] end -->
@endsection

@section('css-bottom')
    <link rel="stylesheet" href="{{ URL::asset('build/css/uikit.css') }}">
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ rangeslider ] start -->
        <div class="col-sm-12">
            <div class="card step1">
                <div class="card-header step2">
                    <h5 class="step3">Hello card</h5>
                </div>
                <div class="card-body step4">
                    <h1>H1 Admin Template</h1>
                    <h2>H2 Admin Template</h2>
                    <h3>H3 Admin Template</h3>
                    <h4>H4 Admin Template</h4>
                    <h5>H5 Admin Template</h5>
                    <h6>H6 Admin Template</h6>
                    <p>p Admin Template</p>
                    <strong>p Admin Template</strong>
                </div>
            </div>
        </div>
        <!-- [ rangeslider ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <!-- tour Js -->
    <script src="{{ URL::asset('build/js/plugins/intro.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/elements/ac-tour.js') }}"></script>
    <!-- [Page Specific JS] end -->
@endsection
