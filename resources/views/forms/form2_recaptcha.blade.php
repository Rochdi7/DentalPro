@extends('layouts.main')

@section('title', 'ReCaptcha')
@section('breadcrumb-item', 'Forms')

@section('breadcrumb-item-active', 'ReCaptcha')

@section('css')
@endsection

@section('content')
    <div class="row">
        <!-- [ form-element ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <form>
                        <div class="mb-0 row">
                            <label class="col-form-label col-lg-3 col-sm-12 text-lg-end">reCaptcha</label>
                            <div class="col-lg-4 col-md-9 col-sm-12">
                                <div class="g-recaptcha" data-sitekey="6LdnLwgUAAAAAAIb9L3PQlHQgvSCi16sYgbMIMFR"></div>
                            </div>
                            <script src="https://www.google.com/recaptcha/api.js"></script>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- [ form-element ] end -->
@endsection
