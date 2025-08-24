@extends('layouts.main')

@section('title', 'Fetch API')
@section('breadcrumb-item', 'Table')

@section('breadcrumb-item-active', 'Fetch API')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/style.css') }}">
@endsection

@section('content')
    <div class="row">
        <!-- [ basic-table ] start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Fetch API</h5>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table" id="pc-dt-fetchapi"> </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ basic-table ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="{{ URL::asset('build/js/plugins/simple-datatables.js') }}"></script>
    <script>
        fetch('/build/json/datatable.json')
            .then((response) => response.json())
            .then((data) => {
                if (!data.length) {
                    return;
                }

                let table = new simpleDatatables.DataTable('#pc-dt-fetchapi', {
                    data: {
                        headings: Object.keys(data[0]),
                        data: data.map((item) => Object.values(item))
                    }
                });
            });
    </script>
    <!-- [Page Specific JS] end -->
@endsection
