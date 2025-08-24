@extends('layouts.layout-components')

@section('title', 'Notifications')
@section('breadcrumb-title', 'Notifications')
@section('breadcrumb-text', 'Beautiful notifications with CSS and Vanilla JavaScript!')

@section('breadcrumb-link', 'https://csilva2810.github.io/notifier/docs/en/index.html')

@section('css')
    <!-- [Page specific CSS] start -->
    <link href="{{ URL::asset('build/css/plugins/animate.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('build/css/plugins/notifier.css') }}" rel="stylesheet" type="text/css">
    <!-- [Page specific CSS] end -->
@endsection

@section('css-bottom')
    <link rel="stylesheet" href="{{ URL::asset('build/css/uikit.css') }}">
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ single-light ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Notification Alert</h5>
                </div>
                <div class="card-body btn-page">
                    <button type="button" class="btn btn-primary" id="btn-default">Default</button>
                    <button type="button" class="btn btn-info" id="btn-info">Info</button>
                    <button type="button" class="btn btn-success" id="btn-success">Success</button>
                    <button type="button" class="btn btn-warning" id="btn-warning">Warning</button>
                    <button type="button" class="btn btn-danger" id="btn-danger">Danger</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Notification with Icons</h5>
                </div>
                <div class="card-body btn-page">
                    <button type="button" class="btn btn-primary" id="btn-default-i">Default</button>
                    <button type="button" class="btn btn-info" id="btn-info-i">Info</button>
                    <button type="button" class="btn btn-success" id="btn-success-i">Success</button>
                    <button type="button" class="btn btn-warning" id="btn-warning-i">Warning</button>
                    <button type="button" class="btn btn-danger" id="btn-danger-i">Danger</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Auto Close Notifications</h5>
                </div>
                <div class="card-body btn-page">
                    <button type="button" class="btn btn-primary" id="btn-default-ac">Default</button>
                    <button type="button" class="btn btn-info" id="btn-info-ac">Info</button>
                    <button type="button" class="btn btn-success" id="btn-success-ac">Success</button>
                    <button type="button" class="btn btn-warning" id="btn-warning-ac">Warning</button>
                    <button type="button" class="btn btn-danger" id="btn-danger-ac">Danger</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Using the notification.hide() method</h5>
                </div>
                <div class="card-body btn-page">
                    <button type="button" class="btn btn-primary" id="btn-nt-show">Show Notification</button>
                    <button type="button" class="btn btn-danger" id="btn-nt-hide">Hide Notification</button>
                </div>
            </div>
        </div>
        <!-- [ single-light ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <!-- notification Js -->
    <script src="{{ URL::asset('build/js/plugins/notifier.js') }}"></script>
    <script src="{{ URL::asset('build/js/elements/ac-notification.js') }}"></script>
    <!-- [Page Specific JS] end -->
@endsection
