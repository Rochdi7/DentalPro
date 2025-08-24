@extends('layouts.layout-components')

@section('title', 'Tooltip')
@section('breadcrumb-title', 'Tooltip')
@section('breadcrumb-text', 'Documentation and examples for adding custom Bootstrap tooltips with CSS and JavaScript
    using CSS3 for animations and data-bs-attributes for local title storage.')

@section('breadcrumb-link', 'https://getbootstrap.com/docs/5.2/components/tooltips/')

@section('css')
    <!-- [Page specific CSS] start -->
    <link href="{{ URL::asset('build/css/plugins/animate.min.css') }}" rel="stylesheet" type="text/css">
    <!-- [Page specific CSS] end -->
@endsection

@section('css-bottom')
    <link rel="stylesheet" href="{{ URL::asset('build/css/uikit.css') }}">
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ tooltip ] start -->
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Tooltip</h5>
                </div>
                <div class="card-body btn-page pc-component">
                    <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="top"
                        title="tooltip on top">Top</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="tooltip" data-bs-placement="left"
                        title="tooltip on left">Left</button>
                    <button type="button" class="btn btn-success" data-bs-toggle="tooltip" data-bs-placement="right"
                        title="tooltip on right">Right</button>
                    <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="tooltip on bottom">Bottom</button>
                    <button type="button" class="btn btn-info" data-bs-toggle="tooltip" data-bs-html="true"
                        title="<em>Tooltip</em> <u>with</u> <b>HTML</b>">Html Tooltip</button>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Popover</h5>
                </div>
                <div class="card-body btn-page pc-component">
                    <button type="button" class="btn btn-danger" data-bs-toggle="popover" data-bs-placement="top"
                        title="" data-bs-content="top by popover" data-original-title="popup on top">Top</button>
                    <button type="button" class="btn btn-primary" data-bs-toggle="popover" data-bs-placement="left"
                        title="popup on left" data-bs-content="left by popover">Left</button>
                    <button type="button" class="btn btn-success" data-bs-toggle="popover" data-bs-placement="right"
                        title="popup on right" data-bs-content="right by popover">Right</button>
                    <button type="button" class="btn btn-warning" data-bs-toggle="popover" data-bs-placement="bottom"
                        title="popup on bottom" data-bs-content="bottom by popover">Bottom</button>
                    <button type="button" class="btn btn-info" data-bs-toggle="popover" data-bs-html="true"
                        data-bs-placement="top" title="<em>popup</em> <u>with</u> <b>HTML</b>"
                        data-bs-content="popup by HTML">Html popup</button>
                </div>
            </div>
        </div>
        <!-- [ tooltip ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
@endsection
