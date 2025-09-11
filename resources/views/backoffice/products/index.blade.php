@extends('layouts.main')

@section('title', 'Product List')
@section('breadcrumb-item', 'E-commerce')
@section('breadcrumb-item-active', 'Products list')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/style.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-sm-12">
        <div class="card table-card">
            <div class="card-body">
                <div class="text-end p-sm-4 pb-sm-2">
                    <a href="{{ route('backoffice.products.create') }}" class="btn btn-primary">
                        <i class="ti ti-plus f-18"></i> Add Product
                    </a>
                </div>
                <div class="table-responsive">
                    <table class="table table-hover tbl-product" id="pc-dt-simple">
                        <thead>
                            <tr>
                                <th class="text-end">#</th>
                                <th>Product Detail</th>
                                <th>Category</th>
                                <th class="text-end">Price</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @include('backoffice.products._table', ['products' => $products])
                        </tbody>
                    </table>
                    {{ $products->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ URL::asset('build/js/plugins/simple-datatables.js') }}"></script>
    <script>
        const dataTable = new simpleDatatables.DataTable('#pc-dt-simple', {
            perPage: 10,
            sortable: false
        });
    </script>
@endsection
