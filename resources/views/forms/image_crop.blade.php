@extends('layouts.main')

@section('title', 'Image Cropper')
@section('breadcrumb-item', 'Forms')

@section('breadcrumb-item-active', 'Image Cropper')

@section('css')
    <!-- [Page specific CSS] start -->
    <!-- cropper css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/croppr.min.css') }}">
    <!-- [Page specific CSS] end -->
@endsection

@section('content')
    <div class="row">
        <!-- [ Form Validation ] start -->
        <div class="col-sm-12">
            <!-- Image cropper plugin start -->
            <div class="card">
                <div class="card-header">
                    <h5>Image Cropper Plugin</h5>
                </div>
                <div class="card-body">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 mb-3 mb-md-0">
                                <div class="cropper"><img src="{{ URL::asset('build/images/light-box/l1.jpg') }}" alt="image"
                                        id="croppr" /> </div>
                            </div>
                            <div class="col-md-5">
                                <div class="rounded bg-light px-4 py-3 mb-3">
                                    <h5>Selection value</h5>
                                    <div class="row">
                                        <div class="col-6">
                                            <p id="valX"><strong>x: </strong>&nbsp;500</p>
                                            <p class="mb-1" id="valY"><strong>y: </strong>&nbsp;500</p>
                                        </div>
                                        <div class="col-6">
                                            <p id="valW"><strong>width: </strong>&nbsp;500</p>
                                            <p class="mb-1" id="valH"><strong>height: </strong>&nbsp;500</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mb-1">
                                    <div class="col">
                                        <h6>Aspect Ratio</h6>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="cb-ratio" />
                                            <label class="form-check-label" for="cb-ratio"> Enable </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="input-group mb-3">
                                    <span class="input-group-text">A</span>
                                    <input type="text" class="form-control" id="input-ratio" value="1.0"
                                        disabled="disabled" />
                                </div>
                                <div class="row mb-1">
                                    <div class="col">
                                        <h6>Maximum size</h6>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="max-checkbox" />
                                            <label class="form-check-label" for="max-checkbox"> Enable </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-1 g-sm-3 mb-4">
                                    <div class="col-4">
                                        <div class="input-group">
                                            <span class="input-group-text">W</span>
                                            <input type="text" class="form-control" id="max-input-width" value="150"
                                                disabled="disabled" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group">
                                            <span class="input-group-text">H</span>
                                            <input type="text" class="form-control" id="max-input-height" value="150"
                                                disabled="disabled" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <select id="max-input-unit" disabled="disabled" class="form-control">
                                            <option>px</option>
                                            <option value="%">%</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="row mb-1">
                                    <div class="col">
                                        <h6>Minimum size</h6>
                                    </div>
                                    <div class="col-auto">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                id="min-checkbox" />
                                            <label class="form-check-label" for="min-checkbox"> Enable </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row g-1 g-sm-3">
                                    <div class="col-4">
                                        <div class="input-group">
                                            <span class="input-group-text">W</span>
                                            <input type="text" class="form-control" id="min-input-width" value="150"
                                                disabled="disabled" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="input-group">
                                            <span class="input-group-text">H</span>
                                            <input type="text" class="form-control" id="min-input-height" value="150"
                                                disabled="disabled" />
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <select id="min-input-unit" disabled="disabled" class="form-control">
                                            <option> px </option>
                                            <option value="%"> % </option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Image cropper plugin end -->
        </div>
        <!-- [ Form Validation ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <!-- cropper js -->
    <script src="{{ URL::asset('build/js/plugins/croppr.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/forms/page-croper.js') }}"></script>
    <!-- [Page Specific JS] end -->
@endsection
