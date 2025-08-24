@extends('layouts.main')

@section('title', 'Render Column Cells')
@section('breadcrumb-item', 'Table')

@section('breadcrumb-item-active', 'Render Column Cells')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/style.css') }}">
@endsection

@section('content')
    <div class="row">
        <!-- [ basic-table ] start -->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h5>Basic Table</h5>
                    <span class="d-block m-t-5">use class <code>table</code> inside table element</span>
                </div>
                <div class="card-body table-border-style">
                    <div class="table-responsive">
                        <table class="table" id="pc-dt-render-column-cells"> </table>
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
        const data = {
            headings: ['ID', 'Drink', 'Price', 'Caffeinated', 'Profit'],
            data: [
                [574, 'latte', 4.0, false, 0.0],
                [984, 'herbal tea', 3.0, false, 0.56],
                [312, 'green tea', 3.0, true, 1.72],
                [312, 'latte', 3.0, true, -1.21],
                [312, 'green tea', 3.0, false, 0.0],
                [312, 'green tea', 3.0, false, 0.0],
                [312, 'green tea', 3.0, true, 1.72],
                [312, 'latte', 3.0, true, 1.72],
                [312, 'green tea', 3.0, true, -1.21],
                [312, 'green tea', 3.0, false, 0.0],
                [312, 'green tea', 3.0, true, 1.72],
                [312, 'green tea', 3.0, true, 1.72],
                [312, 'latte', 3.0, false, 0.0],
                [312, 'latte', 3.0, true, 1.72],
                [312, 'green tea', 3.0, false, 0.0],
                [312, 'green tea', 3.0, true, 1.72],
                [312, 'latte', 3.0, false, 0.0],
                [312, 'latte', 3.0, true, -1.21],
                [312, 'latte', 3.0, true, 1.72],
                [312, 'latte', 3.0, false, 0.0],
                [312, 'latte', 3.0, false, 0.0],
                [312, 'latte', 3.0, true, 1.72],
                [312, 'green tea', 3.0, true, -1.21],
                [312, 'green tea', 3.0, true, -1.21],
                [312, 'green tea', 3.0, true, -1.21]
            ]
        };
        // Add Icon
        const renderIcon = function(data, _cell, _dataIndex, _cellIndex) {
            if (data == 'latte') {
                return `🔥 ${data}`;
            }
            return `🌿 ${data}`;
        };
        // Price column cell manipulation
        const renderButton = function(data, cell, dataIndex, _cellIndex) {
            cell.childNodes.push({
                nodeName: 'BUTTON',
                attributes: {
                    'data-row': dataIndex,
                    class: 'btn btn-success btn-sm ms-3'
                },
                childNodes: [{
                    nodeName: '#text',
                    data: 'Buy Now'
                }]
            });
        };
        // Caffeinated column cell manipulation
        const renderYesNo = function(data, cell, _dataIndex, _cellIndex) {
            if ([true, false].includes(data)) {
                cell.childNodes = [{
                    nodeName: 'B',
                    childNodes: [{
                        nodeName: '#text',
                        data: data === true ? ' Yes ' : ' No '
                    }]
                }];
            }
        };

        // numbers
        const renderHighLow = function(data, cell, _dataIndex, _cellIndex) {
            const cellTextNode = cell.childNodes[0];
            const currencyNode = {
                nodeName: 'SPAN',
                attributes: {
                    class: 'currency '
                },
                childNodes: [cellTextNode]
            };
            cell.childNodes = [currencyNode];

            if (data < 0) {
                currencyNode.attributes.class += 'text-danger';
            } else if (data > 0) {
                currencyNode.attributes.class += 'text-success';
            } else if (data == 0) {
                currencyNode.attributes.class += 'text-body';
            }
        };
        new window.simpleDatatables.DataTable('#pc-dt-render-column-cells', {
            data,
            perPage: 25,
            rowRender: (row, tr, _index) => {
                if ([true, false].includes(row.cells[3].data)) {
                    if (!tr.attributes?.class) {
                        if (!tr.attributes) {
                            tr.attributes = {};
                        }
                        tr.attributes.class = row.cells[3].data === true ? 'text-success' : 'text-danger';
                    } else {
                        tr.attributes.class += row.cells[3].data === true ? 'text-success' : 'text-danger';
                    }
                }
            },
            columns: [{
                    select: 0,
                    hidden: true,
                    type: 'number'
                },
                {
                    select: 1,
                    render: renderIcon,
                    type: 'string'
                },
                {
                    select: 2,
                    render: renderButton,
                    type: 'number'
                },
                {
                    select: 3,
                    render: renderYesNo,
                    type: 'boolean'
                },
                {
                    select: 4,
                    render: renderHighLow,
                    type: 'number'
                }
            ]
        });
    </script>

    <!-- [Page Specific JS] end -->
@endsection
