@extends('layouts.layout-components')

@section('title', 'Badges')
@section('breadcrumb-title', 'Badges')
@section('breadcrumb-text', 'Documentation and examples for badges, our small count and labeling component.')

@section('breadcrumb-link', 'https://getbootstrap.com/docs/5.2/components/badge/')

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
        <!-- [ badge ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>Basic Badges</h5>
                </div>
                <div class="card-body pc-component">
                    <h1>Example heading <span class="badge text-bg-dark">New</span></h1>
                    <h2>Example heading <span class="badge text-bg-dark">New</span></h2>
                    <h3>Example heading <span class="badge text-bg-dark">New</span></h3>
                    <h4>Example heading <span class="badge text-bg-dark">New</span></h4>
                    <h5>Example heading <span class="badge text-bg-dark">New</span></h5>
                    <h6>Example heading <span class="badge text-bg-dark">New</span></h6>
                </div>
            </div>
            <div class="card btn-page">
                <div class="card-header">
                    <h5>Button Badges</h5>
                </div>
                <div class="card-body pc-component">
                    <div class="d-flex flex-wrap gap-2">
                        <button type="button" class="btn btn-primary">primary <span
                                class="badge bg-light text-dark">4</span></button>
                        <button type="button" class="btn btn-secondary position-relative">Inbox
                            <span
                                class="position-absolute top-0 start-100 translate-middle badge rounded-pill text-bg-danger">99+
                                <span class="visually-hidden">unread messages</span>
                            </span>
                        </button>
                        <button type="button" class="btn btn-info position-relative ms-2">Profile
                            <span
                                class="position-absolute top-0 start-100 translate-middle p-2 text-bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Contextual Variations</h5>
                </div>
                <div class="card-body pc-component">
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge text-bg-primary">Primary</span>
                        <span class="badge text-bg-secondary">Secondary</span>
                        <span class="badge text-bg-success">Success</span>
                        <span class="badge text-bg-danger">Danger</span>
                        <span class="badge text-bg-warning text-dark">Warning</span>
                        <span class="badge text-bg-info">Info</span>
                        <span class="badge text-bg-light text-dark">Light</span>
                        <span class="badge text-bg-dark">Dark</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Pill Badges</h5>
                </div>
                <div class="card-body pc-component">
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge rounded-pill text-bg-primary">Primary</span>
                        <span class="badge rounded-pill text-bg-secondary">Secondary</span>
                        <span class="badge rounded-pill text-bg-success">Success</span>
                        <span class="badge rounded-pill text-bg-danger">Danger</span>
                        <span class="badge rounded-pill text-bg-warning text-dark">Warning</span>
                        <span class="badge rounded-pill text-bg-info">Info</span>
                        <span class="badge rounded-pill text-bg-light text-dark">Light</span>
                        <span class="badge rounded-pill text-bg-dark">Dark</span>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Light variant</h5>
                </div>
                <div class="card-body pc-component">
                    <div class="d-flex flex-wrap gap-2">
                        <span class="badge bg-light-primary">Primary</span>
                        <span class="badge bg-light-secondary">Secondary</span>
                        <span class="badge bg-light-success">Success</span>
                        <span class="badge bg-light-danger">Danger</span>
                        <span class="badge bg-light-warning">Warning</span>
                        <span class="badge bg-light-info">Info</span>
                        <span class="badge bg-light-light text-dark">Light</span>
                        <span class="badge bg-light-dark">Dark</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ badge ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
@endsection
