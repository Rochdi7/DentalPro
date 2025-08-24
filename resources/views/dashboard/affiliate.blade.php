@extends('layouts.main')

@section('title', 'Affiliate Dashboard')
@section('breadcrumb-item', 'Dashboard')

@section('breadcrumb-item-active', 'Dashboard')

@section('css')
    <!-- map-vector css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/jsvectormap.min.css') }}">
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ Row 1 ] start -->
        <div class="col-md-12 col-xxl-4">
            <div class="card statistics-card-1">
                <div class="card-body">
                    <img src="{{ URL::asset('build/images/widget/img-status-2.svg') }}" alt="img" class="img-fluid img-bg" />
                    <div class="d-flex align-items-center">
                        <div class="avtar bg-brand-color-1 text-white me-3">
                            <i class="ph-duotone ph-currency-dollar f-26"></i>
                        </div>
                        <div>
                            <p class="text-muted mb-0">Referrals</p>
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 f-w-500">$134.6K</h2>
                                <span class="badge bg-light-success ms-2"><i class="ti ti-chevrons-up"></i> 55%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-4">
            <div class="card statistics-card-1">
                <div class="card-body">
                    <img src="{{ URL::asset('build/images/widget/img-status-1.svg') }}" alt="img" class="img-fluid img-bg" />
                    <div class="d-flex align-items-center">
                        <div class="avtar bg-brand-color-2 text-white me-3">
                            <i class="ph-duotone ph-scales f-26"></i>
                        </div>
                        <div>
                            <p class="text-muted mb-0">Conversion Rate</p>
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 f-w-500">8.57<small class="text-muted">%</small></h2>
                                <span class="badge bg-light-danger ms-2"><i class="ti ti-chevrons-down"></i> 3.6%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 col-xxl-4">
            <div class="card statistics-card-1">
                <div class="card-body">
                    <img src="{{ URL::asset('build/images/widget/img-status-3.svg') }}" alt="img" class="img-fluid img-bg" />
                    <div class="d-flex align-items-center">
                        <div class="avtar bg-brand-color-3 text-white me-3">
                            <i class="ph-duotone ph-users-four f-26"></i>
                        </div>
                        <div>
                            <p class="text-muted mb-0">Visits</p>
                            <div class="d-flex align-items-end">
                                <h2 class="mb-0 f-w-500">278</h2>
                                <span class="badge bg-light-success ms-2"><i class="ti ti-chevrons-up"></i> 7%</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Row 1 ] end -->
        <!-- [ Row 2 ] start -->
        <div class="col-md-6">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Affiliates</h5>
                </div>
                <div class="card-body py-3 px-0">
                    <div class="table-responsive affiliate-table">
                        <table class="table table-hover table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">John Doe</h6>
                                        </div>
                                    </td>
                                    <td>Dashboard</td>
                                    <td class="text-end f-w-600">$38</td>
                                    <td><i class="ti ti-arrow-up text-success f-18 align-text-bottom"></i> 5.8%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">Keefs</h6>
                                        </div>
                                    </td>
                                    <td>New Website</td>
                                    <td class="text-end f-w-600">$928</td>
                                    <td><i class="ti ti-arrow-down text-danger f-18 align-text-bottom"></i> 51.2%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">Lazaro</h6>
                                        </div>
                                    </td>
                                    <td>Dashboard</td>
                                    <td class="text-end f-w-600">$674</td>
                                    <td><i class="ti ti-arrow-up text-success f-18 align-text-bottom"></i> 17.1%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">Adeline</h6>
                                        </div>
                                    </td>
                                    <td>New Website</td>
                                    <td class="text-end f-w-600">$1,438</td>
                                    <td><i class="ti ti-arrow-down text-danger f-18 align-text-bottom"></i> 15.8%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">John Doe</h6>
                                        </div>
                                    </td>
                                    <td>Invoice</td>
                                    <td class="text-end f-w-600">$90</td>
                                    <td><i class="ti ti-arrow-up text-success f-18 align-text-bottom"></i> 9.8%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-6.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">Keefs</h6>
                                        </div>
                                    </td>
                                    <td>Dashboard</td>
                                    <td class="text-end f-w-600">$123</td>
                                    <td><i class="ti ti-arrow-up text-success f-18 align-text-bottom"></i> 5.8%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-7.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">Lazaro</h6>
                                        </div>
                                    </td>
                                    <td>Landing page</td>
                                    <td class="text-end f-w-600">$928</td>
                                    <td><i class="ti ti-arrow-down text-danger f-18 align-text-bottom"></i> 51.2%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Top Visitors</h5>
                </div>
                <div class="card-body py-3 px-0">
                    <div class="table-responsive">
                        <table class="table table-hover table-borderless mb-0">
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">Adeline</h6>
                                        </div>
                                    </td>
                                    <td class="text-end f-w-600">$1,438</td>
                                    <td><i class="ti ti-arrow-down text-danger f-18 align-text-bottom"></i> 15.8%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">John Doe</h6>
                                        </div>
                                    </td>
                                    <td class="text-end f-w-600">$90</td>
                                    <td><i class="ti ti-arrow-up text-success f-18 align-text-bottom"></i> 9.8%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-6.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">Keefs</h6>
                                        </div>
                                    </td>
                                    <td class="text-end f-w-600">$123</td>
                                    <td><i class="ti ti-arrow-up text-success f-18 align-text-bottom"></i> 5.8%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-7.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">Lazaro</h6>
                                        </div>
                                    </td>
                                    <td class="text-end f-w-600">$928</td>
                                    <td><i class="ti ti-arrow-down text-danger f-18 align-text-bottom"></i> 51.2%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">John Doe</h6>
                                        </div>
                                    </td>
                                    <td class="text-end f-w-600">$38</td>
                                    <td><i class="ti ti-arrow-up text-success f-18 align-text-bottom"></i> 5.8%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">Keefs</h6>
                                        </div>
                                    </td>
                                    <td class="text-end f-w-600">$928</td>
                                    <td><i class="ti ti-arrow-down text-danger f-18 align-text-bottom"></i> 51.2%</td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt=""
                                                class="img-fluid wid-30 rounded-1" />
                                            <h6 class="mb-0 ms-2">Lazaro</h6>
                                        </div>
                                    </td>
                                    <td class="text-end f-w-600">$674</td>
                                    <td><i class="ti ti-arrow-up text-success f-18 align-text-bottom"></i> 17.1%</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Row 2 ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection
