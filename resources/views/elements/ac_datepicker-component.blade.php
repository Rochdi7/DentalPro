@extends('layouts.layout-components')

@section('title', 'DatePicker')
@section('breadcrumb-title', 'DatePicker')
@section('breadcrumb-text', 'Bootstrap-datepicker provides a flexible datepicker widget in the Bootstrap style.')

@section('breadcrumb-link', 'https://bootstrap-datepicker.readthedocs.io/en/latest')

@section('css')
    <!-- [Page specific CSS] start -->
    <!-- Bootstrap DatePicker -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/datepicker-bs5.min.css') }}">
    <!-- [Page specific CSS] end -->
@endsection

@section('css-bottom')
    <link rel="stylesheet" href="{{ URL::asset('build/css/uikit.css') }}">
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ bootstrap-datetimepicker ] start -->
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Days of Week Disabled</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="d_week" />
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Days of Week Highlighted</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="d_highlight" />
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>AutoClose</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="d_auto" />
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>DatesDisabled</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="d_disable" />
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Today Highlight</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="d_today" />
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Calendar Weeks</h5>
                </div>
                <div class="card-body">
                    <input type="text" class="form-control" id="disp_week" />
                </div>
            </div>
        </div>
        <div class="col-xl-8 col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5>Date Range</h5>
                </div>
                <div class="card-body">
                    <div class="input-daterange input-group" id="datepicker_range">
                        <input type="text" class="form-control text-left" placeholder="Start date" name="range-start" />
                        <input type="text" class="form-control text-end" placeholder="End date" name="range-end" />
                    </div>
                </div>
            </div>
        </div>
        <!-- [ bootstrap-datetimepicker ] End -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <!-- DatePicker js -->
    <script src="{{ URL::asset('build/js/plugins/datepicker-full.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/elements/ac-datepicker.js') }}"></script>
    <!-- [Page Specific JS] end -->
@endsection
