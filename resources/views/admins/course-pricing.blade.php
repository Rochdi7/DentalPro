@extends('layouts.main')

@section('title', 'Pricing')
@section('breadcrumb-item', 'Online Courses')

@section('breadcrumb-item-active', 'Pricing')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/dropzone.min.css') }}">
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="mb-0">Pricing</h5>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center">
                        <div class="col-md-10 col-lg-8 col-xxl-6">
                            <div class="card border">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-sm-5">
                                            <img src="{{ URL::asset('build/images/admin/img-bulb.svg') }}" alt="images"
                                                class="img-fluid" />
                                            <ul class="d-flex flex-column gap-2 mt-3">
                                                <li>Unlimited Students</li>
                                                <li>No Transaction Fees</li>
                                                <li>Course Product</li>
                                                <li>5 Admin-level user</li>
                                                <li>Priority Product Support</li>
                                                <li>Advanced Reports</li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-7">
                                            <div class="course-price">
                                                <div class="form-check p-0">
                                                    <input type="radio" name="radio1"
                                                        class="form-check-input input-primary" id="customCheckdef1" />
                                                    <label class="form-check-label d-block" for="customCheckdef1">
                                                        <span class="d-flex align-items-center">
                                                            <span class="flex-grow-1 me-3">
                                                                <span class="h5 d-block">FREE</span>
                                                                <span class="badge">Basic Features</span>
                                                            </span>
                                                            <span class="flex-shrink-0">
                                                                <span class="h3 mb-0">0$/<span
                                                                        class="text-sm">mo</span></span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check p-0">
                                                    <input type="radio" name="radio1"
                                                        class="form-check-input input-primary" id="customCheckdef2"
                                                        checked />
                                                    <label class="form-check-label d-block" for="customCheckdef2">
                                                        <span class="d-flex align-items-center">
                                                            <span class="flex-grow-1 me-3">
                                                                <span class="h5 d-block">REGULAR</span>
                                                                <span class="badge"><i
                                                                        class="fas fa-star text-warning f-10"></i>
                                                                    Trending</span>
                                                            </span>
                                                            <span class="flex-shrink-0">
                                                                <span class="h3 mb-0">99$/<span
                                                                        class="text-sm">mo</span></span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check p-0">
                                                    <input type="radio" name="radio1"
                                                        class="form-check-input input-primary" id="customCheckdef3" />
                                                    <label class="form-check-label d-block" for="customCheckdef3">
                                                        <span class="d-flex align-items-center">
                                                            <span class="flex-grow-1 me-3">
                                                                <span class="h5 d-block">PRO</span>
                                                                <span class="badge">For advanced</span>
                                                            </span>
                                                            <span class="flex-shrink-0">
                                                                <span class="h3 mb-0">199$/<span
                                                                        class="text-sm">mo</span></span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                                <div class="form-check p-0">
                                                    <input type="radio" name="radio1"
                                                        class="form-check-input input-primary" id="customCheckdef4" />
                                                    <label class="form-check-label d-block" for="customCheckdef4">
                                                        <span class="d-flex align-items-center">
                                                            <span class="flex-grow-1 me-3">
                                                                <span class="h5 d-block">Business</span>
                                                                <span class="badge">For advanced</span>
                                                            </span>
                                                            <span class="flex-shrink-0">
                                                                <span class="h3 mb-0">299$/<span
                                                                        class="text-sm">mo</span></span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- file-upload Js -->
    <script src="{{ URL::asset('build/js/plugins/dropzone-amd-module.min.js') }}"></script>
@endsection
