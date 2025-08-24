@extends('layouts.main')

@section('title', 'Multi Form Layouts')
@section('breadcrumb-item', 'Forms')

@section('breadcrumb-item-active', 'Multi Layout')

@section('css')
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ form-element ] start -->
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5>2 Columns Form Layout</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Name:</label>
                                    <input type="email" class="form-control" placeholder="Enter full name" />
                                    <small class="form-text text-muted">Please enter your full name</small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Email:</label>
                                    <input type="email" class="form-control" placeholder="Enter contact number" />
                                    <small class="form-text text-muted">Please enter your Email id</small>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Password:</label>
                                    <div class="input-group search-form">
                                        <input type="Password" class="form-control"
                                            placeholder="Please enter your Password" />
                                        <span class="input-group-text bg-transparent"><i
                                                class="feather icon-lock"></i></span>
                                    </div>
                                    <small class="form-text text-muted">Please enter your Password</small>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Profile URL:</label>
                                    <div class="input-group search-form">
                                        <input type="text" class="form-control"
                                            placeholder="Please enter your Profile URL" />
                                        <span class="input-group-text bg-transparent"><i
                                                class="feather icon-link"></i></span>
                                    </div>
                                    <small class="form-text text-muted">Please enter your Profile URL</small>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3 row">
                            <div class="col-lg-6">
                                <label class="form-label">User Type:</label>
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="customRadioInline1" name="customRadioInline1"
                                            class="form-check-input" checked />
                                        <label class="form-check-label" for="customRadioInline1">Administrator</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="customRadioInline2" name="customRadioInline1"
                                            class="form-check-input" />
                                        <label class="form-check-label" for="customRadioInline2">Author</label>
                                    </div>
                                </div>
                                <small class="form-text">Please select user type</small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>2 Columns Horizontal Form Layout</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-3 row g-3">
                            <label class="col-lg-2 col-form-label">Name:</label>
                            <div class="col-lg-3">
                                <input type="email" class="form-control" placeholder="Enter full name" />
                                <small class="form-text text-muted">Please enter your full name</small>
                            </div>
                            <label class="col-lg-2 col-form-label">Email:</label>
                            <div class="col-lg-3">
                                <input type="email" class="form-control" placeholder="Enter contact number" />
                                <small class="form-text text-muted">Please enter your Email id</small>
                            </div>
                        </div>
                        <div class="mb-3 row g-3">
                            <label class="col-lg-2 col-form-label">Password:</label>
                            <div class="col-lg-3">
                                <div class="input-group search-form">
                                    <input type="password" class="form-control" placeholder="Enter your Password" />
                                    <span class="input-group-text bg-transparent"><i class="feather icon-lock"></i></span>
                                </div>
                                <small class="form-text text-muted">Please enter your Password</small>
                            </div>
                            <label class="col-lg-2 col-form-label">Profile URL:</label>
                            <div class="col-lg-3">
                                <div class="input-group search-form">
                                    <input type="text" class="form-control" placeholder="Enter your Profile URL" />
                                    <span class="input-group-text bg-transparent"><i class="feather icon-link"></i></span>
                                </div>
                                <small class="form-text text-muted">Please enter your Profile URL</small>
                            </div>
                        </div>
                        <div class="mb-3 row g-3">
                            <label class="col-lg-2 col-form-label pt-0">User Type:</label>
                            <div class="col-lg-3">
                                <div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="customRadioInline21" name="customRadioInline1"
                                            class="form-check-input" checked />
                                        <label class="form-check-label" for="customRadioInline21">Administrator</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="customRadioInline22" name="customRadioInline1"
                                            class="form-check-input" />
                                        <label class="form-check-label" for="customRadioInline22">Author</label>
                                    </div>
                                </div>
                                <small class="form-text">Please select user type</small>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>3 Columns Form Layout</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row g-3">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Name:</label>
                                    <input type="email" class="form-control" placeholder="Enter full name" />
                                    <small class="form-text text-muted">Please enter your full name</small>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Email:</label>
                                    <input type="email" class="form-control" placeholder="Enter email" />
                                    <small class="form-text text-muted">Please enter your email</small>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Password:</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                        <input type="password" class="form-control" placeholder="Enter Password" />
                                    </div>
                                    <small class="form-text text-muted">Please enter your Password</small>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Contact:</label>
                                    <input type="email" class="form-control" placeholder="Enter contact number" />
                                    <small class="form-text text-muted">Please enter your contact</small>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Profile URL:</label>
                                    <div class="input-group search-form">
                                        <input type="text" class="form-control" placeholder="Profile URL" />
                                        <span class="input-group-text bg-transparent"><i
                                                class="feather icon-link"></i></span>
                                    </div>
                                    <small class="form-text text-muted">Please enter Profile URL</small>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Pin code:</label>
                                    <input type="text" class="form-control" placeholder="Enter your Pin code" />
                                    <small class="form-text text-muted">Please enter your Pin code</small>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">Address:</label>
                                    <input type="text" class="form-control" placeholder="Enter your address" />
                                    <small class="form-text text-muted">Please enter your address</small>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <label class="form-label">User Type:</label>
                                    <div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadioInline221" name="customRadioInline1"
                                                class="form-check-input" checked />
                                            <label class="form-check-label"
                                                for="customRadioInline221">Administrator</label>
                                        </div>
                                        <div class="form-check form-check-inline">
                                            <input type="radio" id="customRadioInline222" name="customRadioInline1"
                                                class="form-check-input" />
                                            <label class="form-check-label" for="customRadioInline222">Author</label>
                                        </div>
                                    </div>
                                    <small class="form-text">Please select User Type</small>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>3 Columns Horizontal Form Layout</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Name:</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control" placeholder="Full name" />
                                            <small class="form-text text-muted">Please enter your full name</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Email:</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control" placeholder="Enter email" />
                                            <small class="form-text text-muted">Please enter your email</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Password:</label>
                                        <div class="col-lg-9">
                                            <div class="input-group">
                                                <span class="input-group-text"><i class="feather icon-lock"></i></span>
                                                <input type="password" class="form-control"
                                                    placeholder="Enter Password" />
                                            </div>
                                            <small class="form-text text-muted">Please enter your Password</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-3" />
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Contact:</label>
                                        <div class="col-lg-9">
                                            <input type="email" class="form-control"
                                                placeholder="Enter contact number" />
                                            <small class="form-text text-muted">Please enter your contact</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <div class="mb-3">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Profile URL:</label>
                                        <div class="col-lg-9">
                                            <div class="input-group search-form">
                                                <input type="text" class="form-control"
                                                    placeholder="Fax Profile URL" />
                                                <span class="input-group-text bg-transparent"><i
                                                        class="feather icon-alert-circle"></i></span>
                                            </div>
                                            <small class="form-text text-muted">Please enter Profile URL</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="row">
                                    <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Pin code:</label>
                                    <div class="col-lg-9">
                                        <input type="text" class="form-control" placeholder="Enter your Pin code" />
                                        <small class="form-text text-muted">Please enter your Pin code</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <hr class="my-3" />
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0">Address:</label>
                                        <div class="col-lg-9">
                                            <input type="text" class="form-control"
                                                placeholder="Enter your address" />
                                            <small class="form-text text-muted">Please enter your address</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="mb-3">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label text-lg-end px-lg-0 pt-0">User Type:</label>
                                        <div class="col-lg-9">
                                            <div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="customRadioInline231"
                                                        name="customRadioInline1" class="form-check-input" checked />
                                                    <label class="form-check-label"
                                                        for="customRadioInline231">Administrator</label>
                                                </div>
                                                <div class="form-check form-check-inline">
                                                    <input type="radio" id="customRadioInline232"
                                                        name="customRadioInline1" class="form-check-input" />
                                                    <label class="form-check-label"
                                                        for="customRadioInline232">Author</label>
                                                </div>
                                            </div>
                                            <small class="form-text">Please select User Type</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- [ form-element ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection
