@extends('layouts.main')

@section('title', 'Dynamic Import')
@section('breadcrumb-item', 'DataTable')

@section('breadcrumb-item-active', 'Dynamic Import')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/style.css') }}">
@endsection

@section('content')
    <div class="row">
        <!-- [ Dynamic Import ] start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Dynamic Import</h5>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table" id="pc-dt-dynamic-import"> </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- [ Dynamic Import ] end -->
    </div>
    <!-- [ Main Content ] end -->
@endsection

@section('scripts')
    <script type="module">
        import {
            DataTable,
            convertCSV
        } from "/build/js/plugins/module.js"
        const dataTable = new DataTable("#pc-dt-dynamic-import")
        const convertedData = convertCSV({
            type: "csv",
            data: "Name,Ext.,City,Start Date|Hammett Gordon,8101,Wah,1998/06/09|Kyra Moses,3796,Quenast,1998/07/07|Kelly Cameron,4836,Fontaine-Valmont,1999/02/07|Theodore Duran,8971,Dhanbad,1999/04/07|Hammett Gordon,8101,Wah,1998/06/09|Kyra Moses,3796,Quenast,1998/07/07|Kelly Cameron,4836,Fontaine-Valmont,1999/02/07|Theodore Duran,8971,Dhanbad,1999/04/07|Hammett Gordon,8101,Wah,1998/06/09|Kyra Moses,3796,Quenast,1998/07/07|Kelly Cameron,4836,Fontaine-Valmont,1999/02/07|Theodore Duran,8971,Dhanbad,1999/04/07|Hammett Gordon,8101,Wah,1998/06/09|Kyra Moses,3796,Quenast,1998/07/07|Kelly Cameron,4836,Fontaine-Valmont,1999/02/07|Theodore Duran,8971,Dhanbad,1999/04/07",
            headings: true,
            columnDelimiter: ",",
            lineDelimiter: "|"
        })
        dataTable.insert(convertedData)
    </script>
@endsection
