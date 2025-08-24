@extends('layouts.layout-components')

@section('title', 'Tree View')
@section('breadcrumb-title', 'Tree View')
@section('breadcrumb-text', 'Standalone tree view library')

@section('breadcrumb-link', 'https://github.com/finom/vanillatree/')

@section('css')
    <!-- [Page specific CSS] start -->
    <!-- jstree css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/vanillatree.css') }}">
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
            <div class="card">
                <div class="card-header">
                    <h5>HTML Demo</h5>
                </div>
                <div class="card-body">
                    <div id="tree-demo"> </div>
                    <p id="tree-msg"></p>
                </div>
            </div>
        </div>
        <!-- [ rangeslider ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <!-- jstree Js -->
    <script src="{{ URL::asset('build/js/plugins/vanillatree.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/elements/ac-treeview.js') }}"></script>
    <!-- [Page Specific JS] end -->
@endsection
