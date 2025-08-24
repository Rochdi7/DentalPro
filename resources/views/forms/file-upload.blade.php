@extends('layouts.main')

@section('title', 'File Upload')
@section('breadcrumb-item', 'Forms')

@section('breadcrumb-item-active', 'File Upload')

@section('css')
    <!-- [Page specific CSS] start -->
    <!-- fileupload-custom css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/dropzone.min.css') }}">
    <!-- [Page specific CSS] end -->
@endsection

@section('content')
    <div class="row">
        <!-- [ file-upload ] start -->
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h5>File Upload</h5>
                </div>
                <div class="card-body">
                    <form action="../assets/json/file-upload.php" class="dropzone">
                        <div class="fallback">
                            <input name="file" type="file" multiple />
                        </div>
                    </form>
                    <div class="text-center m-t-20">
                        <button class="btn btn-primary">Upload Now</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ file-upload ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <!-- file-upload Js -->
    <script src="{{ URL::asset('build/js/plugins/dropzone-amd-module.min.js') }}"></script>
    <!-- [Page Specific JS] end -->
@endsection
