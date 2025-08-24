@extends('layouts.main')

@section('title', 'Invoice List')
@section('breadcrumb-item', 'Invoice')

@section('breadcrumb-item-active', 'List')

@section('css')
    <!-- [Page specific CSS] start -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/flatpickr.min.css') }}">
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div class="row justify-content-between ali mb-3 g-3">
                        <div class="col-sm-auto">
                            <form class="form-search">
                                <i class="ph-duotone ph-magnifying-glass icon-search"></i>
                                <input type="search" class="form-control" placeholder="Search..." />
                                <button class="btn btn-light-secondary btn-search">Search</button>
                            </form>
                        </div>
                        <div class="col-sm-auto">
                            <input type="date" class="form-control" />
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Customer name</th>
                                    <th>Status</th>
                                    <th>Amount</th>
                                    <th>Txid</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-center">Payment method</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded-circle" />
                                            </div>
                                            <div class="col">
                                                <h5 class="mb-0">Addie Bass</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td><i class="ph-duotone ph-x-circle text-danger f-24"></i></td>
                                    <td>$20,000</td>
                                    <td>#63579067848912</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center"><img src="{{ URL::asset('build/images/application/img-mastercard.svg') }}"
                                            alt="img" class="img-fluid" /></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-2.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded-circle" />
                                            </div>
                                            <div class="col">
                                                <h5 class="mb-0">Mickie Melmoth</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td><i class="ph-duotone ph-clock-countdown text-warning f-24"></i></td>
                                    <td>$20,000</td>
                                    <td>#63579067848912</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center"><img src="{{ URL::asset('build/images/application/img-mastercard.svg') }}"
                                            alt="img" class="img-fluid" /></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-3.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded-circle" />
                                            </div>
                                            <div class="col">
                                                <h5 class="mb-0">Abey Boseley</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td><i class="ph-duotone ph-check-circle text-success f-24"></i></td>
                                    <td>$20,000</td>
                                    <td>#63579067848912</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center"><img src="{{ URL::asset('build/images/application/img-mastercard.svg') }}"
                                            alt="img" class="img-fluid" /></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-4.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded-circle" />
                                            </div>
                                            <div class="col">
                                                <h5 class="mb-0">Addie Bass</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td><i class="ph-duotone ph-x-circle text-danger f-24"></i></td>
                                    <td>$20,000</td>
                                    <td>#63579067848912</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center"><img src="{{ URL::asset('build/images/application/img-mastercard.svg') }}"
                                            alt="img" class="img-fluid" /></td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" />
                                        </div>
                                    </td>
                                    <td>
                                        <div class="row align-items-center">
                                            <div class="col-auto pe-0">
                                                <img src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt="user-image"
                                                    class="wid-40 rounded-circle" />
                                            </div>
                                            <div class="col">
                                                <h5 class="mb-0">Addie Bass</h5>
                                            </div>
                                        </div>
                                    </td>
                                    <td><i class="ph-duotone ph-x-circle text-danger f-24"></i></td>
                                    <td>$20,000</td>
                                    <td>#63579067848912</td>
                                    <td class="text-center">10</td>
                                    <td class="text-center"><img src="{{ URL::asset('build/images/application/img-mastercard.svg') }}"
                                            alt="img" class="img-fluid" /></td>
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

    <div class="modal fade" id="customer-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <h5 class="mb-0">Customer Details</h5>
                    <a href="#" class="avtar avtar-s btn-link-danger" data-bs-dismiss="modal">
                        <i class="ti ti-x f-20"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="card">
                                <div class="card-body position-relative">
                                    <div class="position-absolute end-0 top-0 p-3">
                                        <span class="badge bg-primary">Relationship</span>
                                    </div>
                                    <div class="text-center mt-3">
                                        <div class="chat-avtar d-inline-flex mx-auto">
                                            <img class="rounded-circle img-fluid wid-60"
                                                src="{{ URL::asset('build/images/user/avatar-5.jpg') }}" alt="User image" />
                                        </div>
                                        <h5 class="mb-0">Aaron Poole</h5>
                                        <p class="text-muted text-sm">Manufacturing Director</p>
                                        <hr class="my-3" />
                                        <div class="row g-3">
                                            <div class="col-4">
                                                <h5 class="mb-0">45</h5>
                                                <small class="text-muted">Age</small>
                                            </div>
                                            <div class="col-4 border border-top-0 border-bottom-0">
                                                <h5 class="mb-0">86%</h5>
                                                <small class="text-muted">Progress</small>
                                            </div>
                                            <div class="col-4">
                                                <h5 class="mb-0">7634</h5>
                                                <small class="text-muted">Visits</small>
                                            </div>
                                        </div>
                                        <hr class="my-3" />
                                        <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                            <i class="ti ti-mail"></i>
                                            <p class="mb-0">bo@gmail.com</p>
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                            <i class="ti ti-phone"></i>
                                            <p class="mb-0">+1 (247) 849-6968</p>
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-between w-100 mb-3">
                                            <i class="ti ti-map-pin"></i>
                                            <p class="mb-0">Lesotho</p>
                                        </div>
                                        <div class="d-inline-flex align-items-center justify-content-between w-100">
                                            <i class="ti ti-link"></i>
                                            <a href="#" class="link-primary">
                                                <p class="mb-0">https://anshan.dh.url</p>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Personal Details</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0 pt-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Full Name</p>
                                                    <h6 class="mb-0">Aaron Poole</h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Father Name</p>
                                                    <h6 class="mb-0">Mr. Ralph Sabatini</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Country</p>
                                                    <h6 class="mb-0">Lesotho</h6>
                                                </div>
                                                <div class="col-md-6">
                                                    <p class="mb-1 text-muted">Zip Code</p>
                                                    <h6 class="mb-0">247 849</h6>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item px-0 pb-0">
                                            <p class="mb-1 text-muted">Address</p>
                                            <h6 class="mb-0">507 Sulnek Grove, Tudzovgeh, United States - 37173</h6>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>About me</h5>
                                </div>
                                <div class="card-body">
                                    <p class="mb-0">Hello, I’m Aaron Poole Manufacturing Director based in international
                                        company, Void jiidki me na fep juih ced gihhiwi
                                        launke cu mig tujum peodpo.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="customer-edit_add-modal" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="mb-0">Edit Customer</h5>
                    <a href="#" class="avtar avtar-s btn-link-danger" data-bs-dismiss="modal">
                        <i class="ti ti-x f-20"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-sm-3 text-center">
                            <div class="chat-avtar d-inline-flex mx-auto">
                                <img class="rounded-circle img-fluid wid-70" src="{{ URL::asset('build/images/user/avatar-5.jpg') }}"
                                    alt="User image" />
                            </div>
                        </div>
                        <div class="col-sm-9">
                            <div class="mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="form-control" placeholder="Name" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Email</label>
                                <input type="text" class="form-control" placeholder="Email" />
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Status</label>
                                <select class="form-select">
                                    <option>Select Status</option>
                                    <option>Complicated</option>
                                    <option>Single</option>
                                    <option>Relationship</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Location</label>
                                <textarea class="form-control" rows="3" placeholder="Enter Location"></textarea>
                            </div>
                            <div class="form-check form-switch d-flex align-items-center justify-content-between p-0">
                                <label class="form-check-label h5 pe-3 mb-0" for="customSwitchemlnot1">Make Contact Info
                                    Public
                                    <span class="text-muted w-75 d-block text-sm f-w-400 mt-2">Means that anyone viewing
                                        your profile will be able to see your contacts details</span>
                                </label>
                                <input class="form-check-input h4 m-0 position-relative flex-shrink-0" type="checkbox"
                                    id="customSwitchemlnot1" checked="" />
                            </div>
                            <hr class="my-3" />
                            <div class="form-check form-switch d-flex align-items-center justify-content-between p-0">
                                <label class="form-check-label h5 pe-3 mb-0" for="customSwitchemlnot2">Available to hire
                                    <span class="text-muted w-75 d-block text-sm f-w-400 mt-2">Toggling this will let your
                                        teammates know that you are available for acquiring new projects</span>
                                </label>
                                <input class="form-check-input h4 m-0 position-relative flex-shrink-0" type="checkbox"
                                    id="customSwitchemlnot2" checked="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <ul class="list-inline me-auto mb-0">
                        <li class="list-inline-item align-bottom">
                            <a href="#" class="avtar avtar-s btn-link-danger w-sm-auto" data-bs-toggle="tooltip"
                                title="Delete">
                                <i class="ti ti-trash f-18"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="flex-grow-1 text-end">
                        <button type="button" class="btn btn-link-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Save</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

@endsection
