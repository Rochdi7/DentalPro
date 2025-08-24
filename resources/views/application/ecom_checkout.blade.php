@extends('layouts.main')

@section('title', 'Checkout')
@section('breadcrumb-item', 'E-commerce')

@section('breadcrumb-item-active', 'Checkout')

@section('css')
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ sample-page ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body p-0">
                    <ul class="nav nav-tabs checkout-tabs mb-0" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="ecomtab-tab-1" data-bs-toggle="tab" href="#ecomtab-1"
                                role="tab" aria-controls="ecomtab-1" aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-s">
                                            <i class="ti ti-shopping-cart"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="mb-0">Cart Details</h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ecomtab-tab-2" data-bs-toggle="tab" href="#ecomtab-2" role="tab"
                                aria-controls="ecomtab-2" aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-s">
                                            <i class="ti ti-building-skyscraper"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="mb-0">Shipping Information</h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="ecomtab-tab-3" data-bs-toggle="tab" href="#ecomtab-3" role="tab"
                                aria-controls="ecomtab-3" aria-selected="true">
                                <div class="d-flex align-items-center">
                                    <div class="flex-shrink-0">
                                        <div class="avtar avtar-s">
                                            <i class="ti ti-credit-card"></i>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1 ms-2">
                                        <h5 class="mb-0">Payment</h5>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div class="tab-pane show active" id="ecomtab-1" role="tabpanel" aria-labelledby="ecomtab-tab-1">
                    <div class="row gy-4">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="progress" style="height: 6px">
                                                <div class="progress-bar bg-primary" style="width: 33%"></div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <p class="mb-0 h6">Step 1</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body border-bottom">
                                    <h5 class="mb-0">Cart Item <span
                                            class="ms-2 f-14 px-2 badge bg-light-secondary rounded-pill">3</span></h5>
                                </div>
                                <div class="card-body p-0 table-body">
                                    <div class="table-responsive">
                                        <table class="table mb-0" id="pc-dt-simple">
                                            <thead>
                                                <tr>
                                                    <th>Product</th>
                                                    <th class="text-end">Price</th>
                                                    <th class="text-center">Quantity</th>
                                                    <th class="text-end">Total</th>
                                                    <th class="text-end"></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ URL::asset('build/images/application/img-prod-2.jpg') }}"
                                                                    alt="image" class="bg-light wid-50 rounded" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h5 class="mb-1">Apple MacBook Pro</h5>
                                                                <p class="text-sm text-muted mb-0">Dark Red</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h5 class="mb-0">$100.00</h5>
                                                        <span
                                                            class="text-sm text-muted text-decoration-line-through">$129.99</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-sm mb-2 border" role="group">
                                                            <button type="button" onclick="decreaseValue('number')"
                                                                class="btn btn-link-secondary"><i
                                                                    class="ti ti-minus"></i></button>
                                                            <input
                                                                class="wid-35 text-center border-0 m-0 form-control rounded-0 shadow-none"
                                                                type="text" id="number" value="0" />
                                                            <button type="button" onclick="increaseValue('number')"
                                                                class="btn btn-link-secondary"><i
                                                                    class="ti ti-plus"></i></button>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h5 class="mb-0">$100.00</h5>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default">
                                                            <i class="ti ti-trash f-18"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ URL::asset('build/images/application/img-prod-3.jpg') }}"
                                                                    alt="image" class="bg-light wid-50 rounded" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h5 class="mb-1">Apple MacBook Pro</h5>
                                                                <p class="text-sm text-muted mb-0">Dark Red</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h5 class="mb-0">$100.00</h5>
                                                        <span
                                                            class="text-sm text-muted text-decoration-line-through">$129.99</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-sm mb-2 border" role="group">
                                                            <button type="button" onclick="decreaseValue('number2')"
                                                                class="btn btn-link-secondary"><i
                                                                    class="ti ti-minus"></i></button>
                                                            <input
                                                                class="wid-35 text-center border-0 m-0 form-control rounded-0 shadow-none"
                                                                type="text" id="number2" value="0" />
                                                            <button type="button" onclick="increaseValue('number2')"
                                                                class="btn btn-link-secondary"><i
                                                                    class="ti ti-plus"></i></button>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h5 class="mb-0">$100.00</h5>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default">
                                                            <i class="ti ti-trash f-18"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <div class="flex-shrink-0">
                                                                <img src="{{ URL::asset('build/images/application/img-prod-4.jpg') }}"
                                                                    alt="image" class="bg-light wid-50 rounded" />
                                                            </div>
                                                            <div class="flex-grow-1 ms-3">
                                                                <h5 class="mb-1">Apple MacBook Pro</h5>
                                                                <p class="text-sm text-muted mb-0">Dark Red</p>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h5 class="mb-0">$100.00</h5>
                                                        <span
                                                            class="text-sm text-muted text-decoration-line-through">$129.99</span>
                                                    </td>
                                                    <td class="text-center">
                                                        <div class="btn-group btn-group-sm mb-2 border" role="group">
                                                            <button type="button" onclick="decreaseValue('number1')"
                                                                class="btn btn-link-secondary"><i
                                                                    class="ti ti-minus"></i></button>
                                                            <input
                                                                class="wid-35 text-center border-0 m-0 form-control rounded-0 shadow-none"
                                                                type="text" id="number1" value="0" />
                                                            <button type="button" onclick="increaseValue('number1')"
                                                                class="btn btn-link-secondary"><i
                                                                    class="ti ti-plus"></i></button>
                                                        </div>
                                                    </td>
                                                    <td class="text-end">
                                                        <h5 class="mb-0">$100.00</h5>
                                                    </td>
                                                    <td class="text-end">
                                                        <a href="#"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default">
                                                            <i class="ti ti-trash f-18"></i>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="text-end">
                                <a href="/application/ecom_product"
                                    class="btn btn-link-secondary d-inline-flex align-items-center"><i
                                        class="ti ti-chevron-left me-2"></i> Back to Shopping</a>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" class="btn btn-sm btn-link-secondary" data-bs-toggle="modal"
                                        data-bs-target="#couponModal">
                                        Have a coupon code?
                                    </button>
                                    <div class="input-group my-2">
                                        <input type="text" class="form-control" placeholder="Discount Coupon" />
                                        <button class="btn btn-outline-secondary" type="button">Apply</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body py-2">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            <h5 class="mb-0">Order Summary</h5>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="float-end">
                                                <h5 class="mb-0">$300.00</h5>
                                            </div><span class="text-muted">Sub Total</span>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="float-end">
                                                <h5 class="mb-0">-</h5>
                                            </div><span class="text-muted">Estimated Delivery</span>
                                        </li>
                                        <li class="list-group-item px-0">
                                            <div class="float-end">
                                                <h5 class="mb-0">-</h5>
                                            </div><span class="text-muted">Voucher</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body py-2">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            <div class="float-end">
                                                <h5 class="mb-0">$300.00</h5>
                                            </div>
                                            <h5 class="mb-0 d-inline-block">Total</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center text-muted">
                                        <div class="avtar avtar-s bg-light-primary flex-shrink-0 me-2">
                                            <i class="material-icons-two-tone text-primary f-20">security</i>
                                        </div>
                                        <span class="text-muted text-sm w-100">Safe & Secure Payment. Easy returns. 100%
                                            Athentic products.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid mb-3">
                                <button class="btn btn-primary">Place an Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="ecomtab-2" role="tabpanel" aria-labelledby="ecomtab-tab-2">
                    <div class="row">
                        <div class="col-xl-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <div class="progress" style="height: 6px">
                                                <div class="progress-bar bg-primary" style="width: 66%"></div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <p class="mb-0 h6">Step 2</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse multi-collapse show" id="multiCollapseExample1">
                                    <div class="card-body border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="mb-0">Shipping Information</h5>
                                            </div>
                                            <div class="col-auto">
                                                <button class="btn btn-primary" type="button" data-bs-toggle="collapse"
                                                    data-bs-target=".multi-collapse" aria-expanded="false"
                                                    aria-controls="multiCollapseExample1 multiCollapseExample2">Add new
                                                    Address</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="address-check-block">
                                            <div class="address-check border rounded p-3">
                                                <div class="form-check">
                                                    <input type="radio" name="radio1"
                                                        class="form-check-input input-primary" id="address-check-1"
                                                        checked="" />
                                                    <label class="form-check-label d-block" for="address-check-1">
                                                        <span class="h6 mb-0 d-block">Ian Carpenter <small
                                                                class="text-muted">(Home)</small></span>
                                                        <span class="text-muted address-details">1754 Ureate Path, 695
                                                            Newga View, Seporcus, Rhode Island, Belgium - SA5 5BO</span>
                                                        <span class="row align-items-center justify-content-between">
                                                            <span class="col-6">
                                                                <span class="text-muted mb-0">+91 1234567890</span>
                                                            </span>
                                                            <span class="col-6 text-end">
                                                                <span
                                                                    class="address-btns d-flex align-items-center justify-content-end gap-2">
                                                                    <a href="#"
                                                                        class="avtar avtar-s btn-link-danger btn-pc-default">
                                                                        <i class="ti ti-trash f-20"></i>
                                                                    </a>
                                                                    <span class="btn btn-sm btn-outline-primary">Deliver to
                                                                        this address</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="address-check border rounded p-3">
                                                <div class="form-check">
                                                    <input type="radio" name="radio1"
                                                        class="form-check-input input-primary" id="address-check-2" />
                                                    <label class="form-check-label d-block" for="address-check-2">
                                                        <span class="h6 mb-0 d-block">Ian Carpenter <small
                                                                class="text-muted">(Home)</small></span>
                                                        <span class="text-muted address-details">1754 Ureate Path, 695
                                                            Newga View, Seporcus, Rhode Island, Belgium - SA5 5BO</span>
                                                        <span class="row align-items-center justify-content-between">
                                                            <span class="col-6">
                                                                <span class="text-muted mb-0">+91 1234567890</span>
                                                            </span>
                                                            <span class="col-6 text-end">
                                                                <span
                                                                    class="address-btns d-flex align-items-center justify-content-end gap-2">
                                                                    <a href="#"
                                                                        class="avtar avtar-s btn-link-danger btn-pc-default">
                                                                        <i class="ti ti-trash f-20"></i>
                                                                    </a>
                                                                    <span class="btn btn-sm btn-outline-primary">Deliver to
                                                                        this address</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="address-check border rounded p-3">
                                                <div class="form-check">
                                                    <input type="radio" name="radio1"
                                                        class="form-check-input input-primary" id="address-check-3" />
                                                    <label class="form-check-label d-block" for="address-check-3">
                                                        <span class="h6 mb-0 d-block">Ian Carpenter <small
                                                                class="text-muted">(Home)</small></span>
                                                        <span class="text-muted address-details">1754 Ureate Path, 695
                                                            Newga View, Seporcus, Rhode Island, Belgium - SA5 5BO</span>
                                                        <span class="row align-items-center justify-content-between">
                                                            <span class="col-6">
                                                                <span class="text-muted mb-0">+91 1234567890</span>
                                                            </span>
                                                            <span class="col-6 text-end">
                                                                <span
                                                                    class="address-btns d-flex align-items-center justify-content-end gap-2">
                                                                    <a href="#"
                                                                        class="avtar avtar-s btn-link-danger btn-pc-default">
                                                                        <i class="ti ti-trash f-20"></i>
                                                                    </a>
                                                                    <span class="btn btn-sm btn-outline-primary">Deliver to
                                                                        this address</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="address-check border rounded p-3">
                                                <div class="form-check">
                                                    <input type="radio" name="radio1"
                                                        class="form-check-input input-primary" id="address-check-4" />
                                                    <label class="form-check-label d-block" for="address-check-4">
                                                        <span class="h6 mb-0 d-block">Ian Carpenter <small
                                                                class="text-muted">(Home)</small></span>
                                                        <span class="text-muted address-details">1754 Ureate Path, 695
                                                            Newga View, Seporcus, Rhode Island, Belgium - SA5 5BO</span>
                                                        <span class="row align-items-center justify-content-between">
                                                            <span class="col-6">
                                                                <span class="text-muted mb-0">+91 1234567890</span>
                                                            </span>
                                                            <span class="col-6 text-end">
                                                                <span
                                                                    class="address-btns d-flex align-items-center justify-content-end gap-2">
                                                                    <a href="#"
                                                                        class="avtar avtar-s btn-link-danger btn-pc-default">
                                                                        <i class="ti ti-trash f-20"></i>
                                                                    </a>
                                                                    <span class="btn btn-sm btn-outline-primary">Deliver to
                                                                        this address</span>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="collapse multi-collapse" id="multiCollapseExample2">
                                    <div class="card-body border-bottom">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <h5 class="mb-0">Add new address</h5>
                                            </div>
                                            <div class="col-auto"> </div>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="mb-3 row align-items-center g-2">
                                                    <label class="col-lg-4 col-form-label py-0">Address Type :<small
                                                            class="text-muted d-block">Enter Add Type</small></label>
                                                    <div class="col-lg-8">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="addtypecheck1" checked />
                                                            <label class="form-check-label" for="addtypecheck1"> Home (All
                                                                day Delivery) </label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="addtypecheck2" />
                                                            <label class="form-check-label" for="addtypecheck2"> Work
                                                                (Between 10 AM to 5 PM) </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row align-items-center g-2">
                                                    <label class="col-lg-4 col-form-label py-0">First Name :<small
                                                            class="text-muted d-block">Enter your first
                                                            name</small></label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row align-items-center g-2">
                                                    <label class="col-lg-4 col-form-label py-0">Last Name :<small
                                                            class="text-muted d-block">Enter your last name</small></label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row align-items-center g-2">
                                                    <label class="col-lg-4 col-form-label py-0">Email Id :<small
                                                            class="text-muted d-block">Enter Email id</small></label>
                                                    <div class="col-lg-8">
                                                        <input type="email" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row align-items-center g-2">
                                                    <label class="col-lg-4 col-form-label py-0">Date of Birth :<small
                                                            class="text-muted d-block">Enter the date of
                                                            birth</small></label>
                                                    <div class="col-lg-8">
                                                        <input type="date" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row align-items-center g-2">
                                                    <label class="col-lg-4 col-form-label py-0">Phone number :<small
                                                            class="text-muted d-block">Enter Phone number</small></label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row align-items-center g-2">
                                                    <label class="col-lg-4 col-form-label py-0">City :<small
                                                            class="text-muted d-block">Enter City name</small></label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="mb-3">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="checkaddres" checked />
                                                        <label class="form-check-label" for="checkaddres"> Save this new
                                                            address for future shipping </label>
                                                    </div>
                                                </div>
                                                <div class="text-end btn-page mb-0 mt-4">
                                                    <button class="btn btn-outline-secondary" type="button"
                                                        data-bs-toggle="collapse" data-bs-target=".multi-collapse"
                                                        aria-expanded="false"
                                                        aria-controls="multiCollapseExample1 multiCollapseExample2">Cancel</button>
                                                    <button class="btn btn-primary"
                                                        onClick="change_tab('#ecomtab-3')">Save & Deliver to this
                                                        Address</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end mb-3">
                                <button class="btn btn-link-primary"><i
                                        class="ti ti-arrow-narrow-left align-text-bottom me-2"></i>Back to Cart</button>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="card">
                                <div class="card-body">
                                    <button type="button" class="btn btn-sm btn-link-secondary" data-bs-toggle="modal"
                                        data-bs-target="#couponModal">
                                        Have a coupon code?
                                    </button>
                                    <div class="input-group my-2">
                                        <input type="text" class="form-control" placeholder="Discount Coupon" />
                                        <button class="btn btn-outline-secondary" type="button">Apply</button>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Order Summary</h5>
                                </div>
                                <div class="card-body p-0">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <img class="bg-light rounded img-fluid wid-60 flex-shrink-0"
                                                        src="{{ URL::asset('build/images/application/img-prod-2.jpg') }}"
                                                        alt="User image" />
                                                </div>
                                                <div class="flex-grow-1 mx-2">
                                                    <h5 class="mb-1">Canon EOS 1500D 24.1</h5>
                                                    <p class="text-muted text-sm mb-2">SLR Camera (Black) with EF</p>
                                                    <h5 class="mb-1"><b>$275</b><span
                                                            class="mx-2 text-sm text-decoration-line-through text-muted f-w-400">$325</span>
                                                    </h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <a href="#"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default flex-shrink-0">
                                                        <i class="ti ti-trash f-20"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <img class="bg-light rounded img-fluid wid-60 flex-shrink-0"
                                                        src="{{ URL::asset('build/images/application/img-prod-3.jpg') }}"
                                                        alt="User image" />
                                                </div>
                                                <div class="flex-grow-1 mx-2">
                                                    <h5 class="mb-1">Canon EOS 1500D 24.1</h5>
                                                    <p class="text-muted text-sm mb-2">SLR Camera (Black) with EF</p>
                                                    <h5 class="mb-1"><b>$275</b><span
                                                            class="mx-2 text-sm text-decoration-line-through text-muted f-w-400">$325</span>
                                                    </h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <a href="#"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default flex-shrink-0">
                                                        <i class="ti ti-trash f-20"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-shrink-0">
                                                    <img class="bg-light rounded img-fluid wid-60 flex-shrink-0"
                                                        src="{{ URL::asset('build/images/application/img-prod-4.jpg') }}"
                                                        alt="User image" />
                                                </div>
                                                <div class="flex-grow-1 mx-2">
                                                    <h5 class="mb-1">Canon EOS 1500D 24.1</h5>
                                                    <p class="text-muted text-sm mb-2">SLR Camera (Black) with EF</p>
                                                    <h5 class="mb-1"><b>$275</b><span
                                                            class="mx-2 text-sm text-decoration-line-through text-muted f-w-400">$325</span>
                                                    </h5>
                                                </div>
                                                <div class="flex-shrink-0">
                                                    <a href="#"
                                                        class="avtar avtar-s btn-link-danger btn-pc-default flex-shrink-0">
                                                        <i class="ti ti-trash f-20"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="float-end">
                                                <h5 class="mb-0">$300.00</h5>
                                            </div><span class="text-muted">Sub Total</span>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="float-end">
                                                <h5 class="mb-0">-</h5>
                                            </div><span class="text-muted">Estimated Delivery</span>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="float-end">
                                                <h5 class="mb-0">-</h5>
                                            </div><span class="text-muted">Voucher</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body py-2">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item px-0">
                                            <div class="float-end">
                                                <h5 class="mb-0">$300.00</h5>
                                            </div>
                                            <h5 class="mb-0 d-inline-block">Total</h5>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex align-items-center text-muted">
                                        <div class="avtar avtar-s bg-light-primary flex-shrink-0 me-2">
                                            <i class="material-icons-two-tone text-primary f-20">security</i>
                                        </div>
                                        <span class="text-muted text-sm w-100">Safe & Secure Payment. Easy returns. 100%
                                            Athentic products.</span>
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid mb-3">
                                <button class="btn btn-primary">Process to Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane" id="ecomtab-3" role="tabpanel" aria-labelledby="ecomtab-tab-3">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="row align-items-center">
                                            <div class="col">
                                                <div class="progress" style="height: 6px">
                                                    <div class="progress-bar bg-primary" style="width: 99%"></div>
                                                </div>
                                            </div>
                                            <div class="col-auto">
                                                <p class="mb-0 h6">Step 3</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-body border-bottom">
                                        <h5 class="mb-0">Payment</h5>
                                    </div>
                                    <div class="card-body">
                                        <div class="address-check border rounded p-3">
                                            <div class="form-check">
                                                <input type="radio" name="radio11"
                                                    class="form-check-input input-primary" checked="" />
                                                <label class="form-check-label d-block">
                                                    <span class="row align-items-center justify-content-between">
                                                        <span class="col-6">
                                                            <span class="h6 mb-0 d-block">Ian Carpenter <small
                                                                    class="text-muted">(Home)</small>
                                                                <span
                                                                    class="badge bg-primary rounded-pill">Default</span></span>
                                                        </span>
                                                        <span class="col-6 text-end">
                                                            <button class="btn btn-primary"
                                                                onClick="change_tab('#ecomtab-2')"><i
                                                                    class="ti ti-edit-circle align-text-bottom me-1"></i>Change</button>
                                                        </span>
                                                    </span>
                                                    <span class="text-muted address-details">1754 Ureate Path, 695 Newga
                                                        View, Seporcus, Rhode Island, Belgium - SA5 5BO</span>
                                                    <span class="row align-items-center justify-content-between">
                                                        <span class="col-6">
                                                            <span class="text-muted mb-0">+91 1234567890</span>
                                                        </span>
                                                    </span>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="row g-2">
                                            <div class="col-md-6">
                                                <div class="address-check border rounded">
                                                    <div class="form-check paycard"
                                                        style="background-image: url(../build/images/application/img-pay-card-bg.png)">
                                                        <input type="radio" name="payradio1"
                                                            class="form-check-input input-primary" id="paycard-check-1"
                                                            checked="" />
                                                        <label class="form-check-label d-block" for="paycard-check-1">
                                                            <span class="card-body p-3 d-block">
                                                                <span
                                                                    class="d-flex align-items-start justify-content-between">
                                                                    <span class="h5">John Smith</span>
                                                                    <img src="{{ URL::asset('build/images/application/mastercard.png') }}"
                                                                        alt="images" class="img-fluid" />
                                                                </span>
                                                                <span
                                                                    class="row g-2 align-items-center justify-content-between mt-2 mb-5">
                                                                    <span class="col-auto">
                                                                        <span class="h5 mb-0">****</span>
                                                                    </span>
                                                                    <span class="col-auto">
                                                                        <span class="h5 mb-0">****</span>
                                                                    </span>
                                                                    <span class="col-auto">
                                                                        <span class="h5 mb-0">****</span>
                                                                    </span>
                                                                    <span class="col-auto">
                                                                        <span class="h5 mb-0">2599</span>
                                                                    </span>
                                                                </span>
                                                                <span
                                                                    class="row align-items-center justify-content-between">
                                                                    <span class="col-auto">
                                                                        <span class="mb-0"><span
                                                                                class="text-sm opacity-50">CVV</span>
                                                                            085</span>
                                                                    </span>
                                                                    <span class="col-auto">
                                                                        <span class="mb-0"><span
                                                                                class="text-sm opacity-50">Expire
                                                                                Date</span> 05/24</span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="address-check border rounded">
                                                    <div class="form-check paycard"
                                                        style="background-image: url(../build/images/application/img-pay-card-bg.png)">
                                                        <input type="radio" name="payradio1"
                                                            class="form-check-input input-primary" id="paycard-check-2" />
                                                        <label class="form-check-label d-block" for="paycard-check-2">
                                                            <span class="card-body p-3 d-block">
                                                                <span
                                                                    class="d-flex align-items-start justify-content-between">
                                                                    <span class="h5">Jennifer winget</span>
                                                                    <img src="{{ URL::asset('build/images/application/visa.png') }}"
                                                                        alt="images" class="img-fluid" />
                                                                </span>
                                                                <span
                                                                    class="row g-2 align-items-center justify-content-between mt-2 mb-5">
                                                                    <span class="col-auto">
                                                                        <span class="h5 mb-0">****</span>
                                                                    </span>
                                                                    <span class="col-auto">
                                                                        <span class="h5 mb-0">****</span>
                                                                    </span>
                                                                    <span class="col-auto">
                                                                        <span class="h5 mb-0">****</span>
                                                                    </span>
                                                                    <span class="col-auto">
                                                                        <span class="h5 mb-0">2599</span>
                                                                    </span>
                                                                </span>
                                                                <span
                                                                    class="row align-items-center justify-content-between">
                                                                    <span class="col-auto">
                                                                        <span class="mb-0"><span
                                                                                class="text-sm opacity-50">CVV</span>
                                                                            085</span>
                                                                    </span>
                                                                    <span class="col-auto">
                                                                        <span class="mb-0"><span
                                                                                class="text-sm opacity-50">Expire
                                                                                Date</span> 05/24</span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider"><span>OR</span></div>
                                        <div class="row">
                                            <div class="col-xl-12 col-xxl-4">
                                                <div class="address-check border rounded">
                                                    <div class="form-check">
                                                        <input type="radio" name="payoptradio1"
                                                            class="form-check-input input-primary" id="payopn-check-1"
                                                            checked="" />
                                                        <label class="form-check-label d-block" for="payopn-check-1">
                                                            <span class="card-body p-3 d-block">
                                                                <span class="h5 mb-3 d-block">Credit Card</span>
                                                                <span class="d-flex align-items-center">
                                                                    <span class="f-12 badge bg-success me-3">5% OFF</span>
                                                                    <img src="{{ URL::asset('build/images/application/card.png') }}"
                                                                        alt="img" class="img-fluid ms-1" />
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-xxl-4">
                                                <div class="address-check border rounded">
                                                    <div class="form-check">
                                                        <input type="radio" name="payoptradio1"
                                                            class="form-check-input input-primary" id="payopn-check-2" />
                                                        <label class="form-check-label d-block" for="payopn-check-2">
                                                            <span class="card-body p-3 d-block">
                                                                <span class="h5 mb-3 d-block">Pay with PayPal</span>
                                                                <span class="d-flex align-items-center">
                                                                    <span class="f-12 badge bg-success me-3">5% OFF</span>
                                                                    <img src="{{ URL::asset('build/images/application/paypal.png') }}"
                                                                        alt="img" class="img-fluid ms-1" />
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-xxl-4">
                                                <div class="address-check border rounded">
                                                    <div class="form-check">
                                                        <input type="radio" name="payoptradio1"
                                                            class="form-check-input input-primary" id="payopn-check-3" />
                                                        <label class="form-check-label d-block" for="payopn-check-3">
                                                            <span class="card-body p-3 d-block">
                                                                <span class="d-flex align-items-center">
                                                                    <span>
                                                                        <span class="h5 mb-3 d-block">Cash on
                                                                            Delivery</span>
                                                                        <span class="f-12 text-muted">When you use this
                                                                            payment</span>
                                                                    </span>
                                                                </span>
                                                            </span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mt-3">
                                            <div class="col-12">
                                                <div class="mb-3 row align-items-center g-2">
                                                    <label class="col-lg-4 col-form-label py-0">Card Number :<small
                                                            class="text-muted d-block">Enter the 16 digit card number on
                                                            the card</small></label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row align-items-center g-2">
                                                    <label class="col-lg-4 col-form-label py-0">Expiry Date :<small
                                                            class="text-muted d-block">Enter the expiration on the
                                                            card</small></label>
                                                    <div class="col-lg-8">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Month" />
                                                            </div>
                                                            <div class="col-6">
                                                                <input type="text" class="form-control"
                                                                    placeholder="Year" />
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="mb-3 row align-items-center g-2">
                                                    <label class="col-lg-4 col-form-label py-0">CVV Number :<small
                                                            class="text-muted d-block">Enter the 3 or 4 digit number on the
                                                            card</small></label>
                                                    <div class="col-lg-8">
                                                        <input type="text" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 row align-items-center g-2">
                                                    <label class="col-lg-4 col-form-label py-0">Password :<small
                                                            class="text-muted d-block">Enter your dynamic
                                                            password</small></label>
                                                    <div class="col-lg-8">
                                                        <input type="password" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="text-end btn-page mb-0 mt-4">
                                                    <button class="btn btn-outline-secondary">Cancel</button>
                                                    <button class="btn btn-primary">Save & Continue</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-flex justify-content-end mb-3">
                                    <button class="btn btn-link-primary"><i
                                            class="ti ti-arrow-narrow-left align-text-bottom me-2"></i>Back to Shipping
                                        Information</button>
                                </div>
                            </div>
                            <div class="col-xl-4">
                                <div class="card coupon-card bg-warning">
                                    <div class="card-body">
                                        <div class="row align-items-center">
                                            <div
                                                class="col-6 d-flex flex-column align-items-start justify-content-between">
                                                <h4 class="text-white">Claim your rewards</h4>
                                                <span class="badge bg-warning f-14 py-2 px-3">ABLEPRO50</span>
                                            </div>
                                            <div class="col-6 text-end">
                                                <img src="{{ URL::asset('build/images/application/img-coupon.png') }}" alt="img"
                                                    class="img-fluid" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <button type="button" class="btn btn-sm btn-link-secondary"
                                            data-bs-toggle="modal" data-bs-target="#couponModal">
                                            Have a coupon code?
                                        </button>
                                        <div class="input-group my-2">
                                            <input type="text" class="form-control" placeholder="Discount Coupon" />
                                            <button class="btn btn-outline-secondary" type="button">Apply</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Order Summary</h5>
                                    </div>
                                    <div class="card-body p-0">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0">
                                                        <img class="bg-light rounded img-fluid wid-60 flex-shrink-0"
                                                            src="{{ URL::asset('build/images/application/img-prod-2.jpg') }}"
                                                            alt="User image" />
                                                    </div>
                                                    <div class="flex-grow-1 mx-2">
                                                        <h5 class="mb-1">Canon EOS 1500D 24.1</h5>
                                                        <p class="text-muted text-sm mb-2">SLR Camera (Black) with EF</p>
                                                        <h5 class="mb-1"><b>$275</b><span
                                                                class="mx-2 text-sm text-decoration-line-through text-muted f-w-400">$325</span>
                                                        </h5>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a href="#"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default flex-shrink-0">
                                                            <i class="ti ti-trash f-20"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0">
                                                        <img class="bg-light rounded img-fluid wid-60 flex-shrink-0"
                                                            src="{{ URL::asset('build/images/application/img-prod-3.jpg') }}"
                                                            alt="User image" />
                                                    </div>
                                                    <div class="flex-grow-1 mx-2">
                                                        <h5 class="mb-1">Canon EOS 1500D 24.1</h5>
                                                        <p class="text-muted text-sm mb-2">SLR Camera (Black) with EF</p>
                                                        <h5 class="mb-1"><b>$275</b><span
                                                                class="mx-2 text-sm text-decoration-line-through text-muted f-w-400">$325</span>
                                                        </h5>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a href="#"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default flex-shrink-0">
                                                            <i class="ti ti-trash f-20"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="d-flex align-items-start">
                                                    <div class="flex-shrink-0">
                                                        <img class="bg-light rounded img-fluid wid-60 flex-shrink-0"
                                                            src="{{ URL::asset('build/images/application/img-prod-4.jpg') }}"
                                                            alt="User image" />
                                                    </div>
                                                    <div class="flex-grow-1 mx-2">
                                                        <h5 class="mb-1">Canon EOS 1500D 24.1</h5>
                                                        <p class="text-muted text-sm mb-2">SLR Camera (Black) with EF</p>
                                                        <h5 class="mb-1"><b>$275</b><span
                                                                class="mx-2 text-sm text-decoration-line-through text-muted f-w-400">$325</span>
                                                        </h5>
                                                    </div>
                                                    <div class="flex-shrink-0">
                                                        <a href="#"
                                                            class="avtar avtar-s btn-link-danger btn-pc-default flex-shrink-0">
                                                            <i class="ti ti-trash f-20"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="float-end">
                                                    <h5 class="mb-0">$300.00</h5>
                                                </div><span class="text-muted">Sub Total</span>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="float-end">
                                                    <h5 class="mb-0">-</h5>
                                                </div><span class="text-muted">Estimated Delivery</span>
                                            </li>
                                            <li class="list-group-item">
                                                <div class="float-end">
                                                    <h5 class="mb-0">-</h5>
                                                </div><span class="text-muted">Voucher</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body py-2">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0">
                                                <div class="float-end">
                                                    <h5 class="mb-0">$300.00</h5>
                                                </div>
                                                <h5 class="mb-0 d-inline-block">Total</h5>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center text-muted">
                                            <div class="avtar avtar-s bg-light-primary flex-shrink-0 me-2">
                                                <i class="material-icons-two-tone text-primary f-20">security</i>
                                            </div>
                                            <span class="text-muted text-sm w-100">Safe & Secure Payment. Easy returns.
                                                100% Athentic products.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="d-grid mb-3">
                                    <button class="btn btn-primary">Process to Payment</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ sample-page ] end -->
    </div>
    <!-- [ Main Content ] end -->

    <!-- Modal -->
    <div class="modal fade" id="couponModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="calendar-modal-title f-w-600 text-truncate">Festival gift for your</h4>
                    <a href="#" class="avtar avtar-s btn-link-danger btn-pc-default" data-bs-dismiss="modal">
                        <i class="ti ti-x f-20"></i>
                    </a>
                </div>
                <div class="modal-body">
                    <div class="overflow-hidden">
                        <div class="coupon-label coupon-label-primary">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avtar bg-light-primary">
                                        <i class="ti ti-gift f-22"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 mx-3">
                                    <h5 class="mb-1">Get $150 off on your subscription</h5>
                                    <p class="mb-0 text-sm text-muted">When you subscribe to the unlimited consultation
                                        plan on berry.</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <button class="btn coupon-btn btn-primary">SUB150</button>
                                </div>
                            </div>
                        </div>
                        <div class="coupon-label coupon-label-warning">
                            <div class="d-flex align-items-center">
                                <div class="flex-shrink-0">
                                    <div class="avtar bg-light-warning">
                                        <i class="ti ti-trophy f-22"></i>
                                    </div>
                                </div>
                                <div class="flex-grow-1 mx-3">
                                    <h5 class="mb-1">Save up to $200</h5>
                                    <p class="mb-0 text-sm text-muted">Make 4 play store recharge code purchases & save up
                                        to $200</p>
                                </div>
                                <div class="flex-shrink-0">
                                    <button class="btn coupon-btn btn-warning">UPTO200</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <!-- Sweet Alert -->
    <script src="{{ URL::asset('build/js/plugins/sweetalert2.all.min.js') }}"></script>
    <script>
        function change_tab(tab_name) {
            var someTabTriggerEl = document.querySelector('a[href="' + tab_name + '"]');
            var actTab = new bootstrap.Tab(someTabTriggerEl);
            actTab.show();
        }
        // quantity start
        function increaseValue(temp) {
            var value = parseInt(document.getElementById(temp).value, 10);
            value = isNaN(value) ? 0 : value;
            value++;
            document.getElementById(temp).value = value;
        }

        function decreaseValue(temp) {
            var value = parseInt(document.getElementById(temp).value, 10);
            value = isNaN(value) ? 0 : value;
            value < 1 ? (value = 1) : '';
            value--;
            document.getElementById(temp).value = value;
        }
        // quantity end
    </script>
    <!-- [Page Specific JS] end -->
@endsection
