@extends('layouts.main')

@section('title', 'Customer List')
@section('breadcrumb-item', 'E-commerce')

@section('breadcrumb-item-active', 'Products list')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/style.css') }}">
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="card table-card">
                <div class="card-body">
                    <div class="text-end p-sm-4 pb-sm-2">
                        <a href="/application/ecom_product-add" class="btn btn-primary"> <i class="ti ti-plus f-18"></i>
                            Add Product </a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover tbl-product" id="pc-dt-simple">
                            <thead>
                                <tr>
                                    <th class="text-end">#</th>
                                    <th>Product Detail</th>
                                    <th>Categories</th>
                                    <th class="text-end">Price</th>
                                    <th class="text-end">Qty</th>
                                    <th class="text-center">Brand</th>
                                    <th class="text-center">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-end">7</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-1.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Apple Series 4 GPS A38 MM Space</h6>
                                                <p class="text-muted f-12 mb-0">Apple Watch SE Smartwatch </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Laptop</td>
                                    <td class="text-end">$14.59</td>
                                    <td class="text-end">70</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-check-circle text-success f-24" data-bs-toggle="tooltip"
                                            data-bs-title="success"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-1.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">2</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-2.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Boat On-Ear Wireless</h6>
                                                <p class="text-muted f-12 mb-0">Mic(Bluetooth 4.2, Rockerz 450R</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Headphones</td>
                                    <td class="text-end">$81.99</td>
                                    <td class="text-end">45</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-clock-countdown text-warning f-24" data-bs-toggle="tooltip"
                                            data-bs-title="warning"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-2.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#" class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">5</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-3.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Fitbit MX30 Smart Watch</h6>
                                                <p class="text-muted f-12 mb-0">(MX30- waterproof) watch</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion, Watch</td>
                                    <td class="text-end">$49.9</td>
                                    <td class="text-end">21</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-x-circle text-danger f-24" data-bs-toggle="tooltip"
                                            data-bs-title="danger"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-3.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">7</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-4.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Apple Series 4 GPS A38 MM Space</h6>
                                                <p class="text-muted f-12 mb-0">Apple Watch SE Smartwatch </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Laptop</td>
                                    <td class="text-end">$14.59</td>
                                    <td class="text-end">70</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-check-circle text-success f-24" data-bs-toggle="tooltip"
                                            data-bs-title="success"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-4.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">2</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-5.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Boat On-Ear Wireless</h6>
                                                <p class="text-muted f-12 mb-0">Mic(Bluetooth 4.2, Rockerz 450R</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Headphones</td>
                                    <td class="text-end">$81.99</td>
                                    <td class="text-end">45</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-clock-countdown text-warning f-24"
                                            data-bs-toggle="tooltip" data-bs-title="warning"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-5.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">7</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-4.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Apple Series 4 GPS A38 MM Space</h6>
                                                <p class="text-muted f-12 mb-0">Apple Watch SE Smartwatch </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Laptop</td>
                                    <td class="text-end">$14.59</td>
                                    <td class="text-end">70</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-check-circle text-success f-24" data-bs-toggle="tooltip"
                                            data-bs-title="success"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-4.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">2</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-5.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Boat On-Ear Wireless</h6>
                                                <p class="text-muted f-12 mb-0">Mic(Bluetooth 4.2, Rockerz 450R</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Headphones</td>
                                    <td class="text-end">$81.99</td>
                                    <td class="text-end">45</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-clock-countdown text-warning f-24"
                                            data-bs-toggle="tooltip" data-bs-title="warning"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-5.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">7</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-1.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Apple Series 4 GPS A38 MM Space</h6>
                                                <p class="text-muted f-12 mb-0">Apple Watch SE Smartwatch </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Laptop</td>
                                    <td class="text-end">$14.59</td>
                                    <td class="text-end">70</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-check-circle text-success f-24" data-bs-toggle="tooltip"
                                            data-bs-title="success"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-1.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">2</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-2.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Boat On-Ear Wireless</h6>
                                                <p class="text-muted f-12 mb-0">Mic(Bluetooth 4.2, Rockerz 450R</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Headphones</td>
                                    <td class="text-end">$81.99</td>
                                    <td class="text-end">45</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-clock-countdown text-warning f-24"
                                            data-bs-toggle="tooltip" data-bs-title="warning"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-2.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">5</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-3.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Fitbit MX30 Smart Watch</h6>
                                                <p class="text-muted f-12 mb-0">(MX30- waterproof) watch</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion, Watch</td>
                                    <td class="text-end">$49.9</td>
                                    <td class="text-end">21</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-x-circle text-danger f-24" data-bs-toggle="tooltip"
                                            data-bs-title="danger"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-3.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">7</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-1.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Apple Series 4 GPS A38 MM Space</h6>
                                                <p class="text-muted f-12 mb-0">Apple Watch SE Smartwatch </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Laptop</td>
                                    <td class="text-end">$14.59</td>
                                    <td class="text-end">70</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-check-circle text-success f-24" data-bs-toggle="tooltip"
                                            data-bs-title="success"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-1.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">2</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-2.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Boat On-Ear Wireless</h6>
                                                <p class="text-muted f-12 mb-0">Mic(Bluetooth 4.2, Rockerz 450R</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Headphones</td>
                                    <td class="text-end">$81.99</td>
                                    <td class="text-end">45</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-clock-countdown text-warning f-24"
                                            data-bs-toggle="tooltip" data-bs-title="warning"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-2.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">5</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-3.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Fitbit MX30 Smart Watch</h6>
                                                <p class="text-muted f-12 mb-0">(MX30- waterproof) watch</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion, Watch</td>
                                    <td class="text-end">$49.9</td>
                                    <td class="text-end">21</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-x-circle text-danger f-24" data-bs-toggle="tooltip"
                                            data-bs-title="danger"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-3.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">7</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-4.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Apple Series 4 GPS A38 MM Space</h6>
                                                <p class="text-muted f-12 mb-0">Apple Watch SE Smartwatch </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Laptop</td>
                                    <td class="text-end">$14.59</td>
                                    <td class="text-end">70</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-check-circle text-success f-24" data-bs-toggle="tooltip"
                                            data-bs-title="success"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-4.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">2</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-5.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Boat On-Ear Wireless</h6>
                                                <p class="text-muted f-12 mb-0">Mic(Bluetooth 4.2, Rockerz 450R</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Headphones</td>
                                    <td class="text-end">$81.99</td>
                                    <td class="text-end">45</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-clock-countdown text-warning f-24"
                                            data-bs-toggle="tooltip" data-bs-title="warning"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-5.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td class="text-end">7</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-4.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Apple Series 4 GPS A38 MM Space</h6>
                                                <p class="text-muted f-12 mb-0">Apple Watch SE Smartwatch </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Laptop</td>
                                    <td class="text-end">$14.59</td>
                                    <td class="text-end">70</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-check-circle text-success f-24" data-bs-toggle="tooltip"
                                            data-bs-title="success"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-4.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">2</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-5.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Boat On-Ear Wireless</h6>
                                                <p class="text-muted f-12 mb-0">Mic(Bluetooth 4.2, Rockerz 450R</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Headphones</td>
                                    <td class="text-end">$81.99</td>
                                    <td class="text-end">45</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-clock-countdown text-warning f-24"
                                            data-bs-toggle="tooltip" data-bs-title="warning"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-5.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">7</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-1.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Apple Series 4 GPS A38 MM Space</h6>
                                                <p class="text-muted f-12 mb-0">Apple Watch SE Smartwatch </p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Laptop</td>
                                    <td class="text-end">$14.59</td>
                                    <td class="text-end">70</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-check-circle text-success f-24" data-bs-toggle="tooltip"
                                            data-bs-title="success"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-1.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">2</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-2.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Boat On-Ear Wireless</h6>
                                                <p class="text-muted f-12 mb-0">Mic(Bluetooth 4.2, Rockerz 450R</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Electronics, Headphones</td>
                                    <td class="text-end">$81.99</td>
                                    <td class="text-end">45</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-clock-countdown text-warning f-24"
                                            data-bs-toggle="tooltip" data-bs-title="warning"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-2.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-end">5</td>
                                    <td>
                                        <div class="row">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/application/img-prod-3.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded" />
                                            </div>
                                            <div class="col">
                                                <h6 class="mb-1">Fitbit MX30 Smart Watch</h6>
                                                <p class="text-muted f-12 mb-0">(MX30- waterproof) watch</p>
                                            </div>
                                        </div>
                                    </td>
                                    <td>Fashion, Watch</td>
                                    <td class="text-end">$49.9</td>
                                    <td class="text-end">21</td>
                                    <td class="text-center">
                                        <i class="ph-duotone ph-x-circle text-danger f-24" data-bs-toggle="tooltip"
                                            data-bs-title="danger"></i>
                                    </td>
                                    <td class="text-center">
                                        <img src="{{ URL::asset('build/images/application/img-prod-brand-3.png') }}" alt="user-image"
                                            class="wid-40" />
                                        <div class="prod-action-links">
                                            <ul class="list-inline me-auto mb-0">
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="View">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-secondary btn-pc-default"
                                                        data-bs-toggle="offcanvas" data-bs-target="#productOffcanvas">
                                                        <i class="ti ti-eye f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Edit">
                                                    <a href="/application/ecom_product-add"
                                                        class="avtar avtar-xs btn-link-success btn-pc-default">
                                                        <i class="ti ti-edit-circle f-18"></i>
                                                    </a>
                                                </li>
                                                <li class="list-inline-item align-bottom" data-bs-toggle="tooltip"
                                                    title="Delete">
                                                    <a href="#"
                                                        class="avtar avtar-xs btn-link-danger btn-pc-default">
                                                        <i class="ti ti-trash f-18"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>
    <!-- [ Main Content ] end -->

    <div class="offcanvas offcanvas-end" tabindex="-1" id="productOffcanvas" aria-labelledby="productOffcanvasLabel">
        <div class="offcanvas-header justify-content-between">
            <h5 class="offcanvas-title" id="productOffcanvasLabel">Product Details</h5>
            <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="offcanvas">
                <i class="ti ti-x f-20"></i>
            </a>
        </div>
        <div class="offcanvas-body">
            <div class="card product-card shadow-none border-0">
                <div class="card-img-top p-0">
                    <a href="/application/ecom_product-details">
                        <img src="{{ URL::asset('build/images/application/img-prod-4.jpg') }}" alt="image"
                            class="img-prod img-fluid" />
                    </a>
                    <div class="card-body position-absolute end-0 top-0">
                        <div class="form-check prod-likes">
                            <input type="checkbox" class="form-check-input" />
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="feather feather-heart prod-likes-icon">
                                <path
                                    d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z">
                                </path>
                            </svg>
                        </div>
                    </div>
                    <div class="card-body position-absolute start-0 top-0">
                        <span class="badge bg-danger badge-prod-card">30%</span>
                    </div>
                </div>
            </div>
            <h5>Glitter gold Mesh Walking Shoes</h5>
            <p class="text-muted">Image Enlargement: After shooting, you can enlarge photographs of the objects for clear
                zoomed view. Change In Aspect Ratio:
                Boldly crop the subject and save it with a composition that has impact.</p>
            <ul class="list-group list-group-flush">
                <li class="list-group-item px-0">
                    <div class="d-inline-flex align-items-center justify-content-between w-100">
                        <p class="mb-0 text-muted me-1">Price</p>
                        <h4 class="mb-0"><b>$299.00</b><span
                                class="mx-2 f-14 text-muted f-w-400 text-decoration-line-through">$399.00</span></h4>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="d-inline-flex align-items-center justify-content-between w-100">
                        <p class="mb-0 text-muted me-1">Categories</p>
                        <h6 class="mb-0">Shoes</h6>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="d-inline-flex align-items-center justify-content-between w-100">
                        <p class="mb-0 text-muted me-1">Status</p>
                        <h6 class="mb-0"><span class="badge bg-warning rounded-pill">Process</span></h6>
                    </div>
                </li>
                <li class="list-group-item px-0">
                    <div class="d-inline-flex align-items-center justify-content-between w-100">
                        <p class="mb-0 text-muted me-1">Brands</p>
                        <h6 class="mb-0"><img src="{{ URL::asset('build/images/application/img-prod-brand-1.png') }}" alt="user-image"
                                class="wid-40" /></h6>
                    </div>
                </li>
            </ul>
        </div>
    </div>

@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="{{ URL::asset('build/js/plugins/simple-datatables.js') }}"></script>
    <script>
        const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
            sortable: false,
            perPage: 5
        });
    </script>
    <!-- [Page Specific JS] end -->
@endsection
