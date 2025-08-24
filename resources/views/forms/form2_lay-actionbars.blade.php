@extends('layouts.main')

@section('title', 'Action Bars')
@section('breadcrumb-item', 'Forms')

@section('breadcrumb-item-active', 'Action Bars')

@section('css')
@endsection

@section('content')
    <!-- [ Main Content ] start -->
    <div class="row">
        <!-- [ form-element ] start -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5>Simple Action Bar</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-0">
                            <label class="form-label">Name:</label>
                            <input type="email" class="form-control" placeholder="Enter Name" />
                            <small class="form-text text-muted">Please enter your Name</small>
                        </div>
                    </form>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Clear</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Action Button with Link</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-0">
                            <label class="form-label">Name:</label>
                            <input type="email" class="form-control" placeholder="Enter Name" />
                            <small class="form-text text-muted">Please enter your Name</small>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-end">
                    <button type="reset" class="btn btn-primary">Submit</button>
                    <span class="ms-2">or <a href="#" class="ms-2">Clear</a></span>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h5>Layout With side action button</h5>
                    <hr />
                    <form>
                        <div class="mb-0">
                            <label class="form-label">Name:</label>
                            <input type="email" class="form-control" placeholder="Enter Name" />
                            <small class="form-text text-muted">Please enter your Name</small>
                        </div>
                    </form>
                    <hr />
                    <div class="row">
                        <div class="col-lg-6">
                            <button type="reset" class="btn btn-light-primary">Save</button>
                            <button type="reset" class="btn btn-light-secondary">Clear</button>
                        </div>
                        <div class="col-lg-6 text-end">
                            <button type="reset" class="btn btn-light-danger">Delete</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">
                    <h5>Right Align Action Bar</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-0">
                            <label class="form-label">Name:</label>
                            <input type="email" class="form-control" placeholder="Enter Name" />
                            <small class="form-text text-muted">Please enter your Name</small>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-end">
                    <button class="btn btn-primary me-2">Submit</button>
                    <button class="btn btn-secondary">Clear</button>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Horizontal Form</h5>
                </div>
                <div class="card-body">
                    <form>
                        <div class="row mb-0">
                            <label class="col-lg-4 col-form-label">Name:</label>
                            <div class="col-lg-6">
                                <input type="email" class="form-control" placeholder="Enter Name" />
                                <small class="form-text text-muted">Please enter your Name</small>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="card-footer bg-light border-0">
                    <div class="row">
                        <label class="col-lg-4"></label>
                        <div class="col-lg-8">
                            <button class="btn btn-primary me-2">Submit</button>
                            <button class="btn btn-secondary">Clear</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h5>Top & Bottom Actions Bars</h5>
                </div>
                <div class="card-body border-bottom">
                    <div class="row align-items-center">
                        <div class="col-sm-6"> Top Actions: </div>
                        <div class="col-sm-6 text-sm-end mt-3 mt-sm-0">
                            <button type="reset" class="btn btn-success">Submit</button>
                            <button type="reset" class="btn btn-secondary">Clear</button>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form>
                        <div class="mb-0">
                            <label class="form-label">Name:</label>
                            <input type="email" class="form-control" placeholder="Enter Name" />
                            <small class="form-text text-muted">Please enter your Name</small>
                        </div>
                    </form>
                </div>
                <div class="card-footer text-center bg-light border-0">
                    <button class="btn btn-success me-2">Submit</button>
                    <button class="btn btn-secondary">Clear</button>
                </div>
            </div>
        </div>
        <!-- [ form-element ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection
