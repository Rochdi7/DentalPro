@extends('layouts.main')

@section('title', 'Accueil')
@section('breadcrumb-item', 'Tableau de bord')

@section('breadcrumb-item-active')

@section('css')
    <!-- map-vector css -->
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/jsvectormap.min.css') }}">
@endsection

@section('content')
    <!-- [ Contenu principal ] start -->
    <div class="row">
        {{-- <div class="col-md-4 col-sm-6">
            <div class="card statistics-card-1 overflow-hidden">
                <div class="card-body">
                    <img src="{{ URL::asset('build/images/widget/img-status-4.svg') }}" alt="img" class="img-fluid img-bg" />
                    <h5 class="mb-4">Daily Sales</h5>
                    <div class="d-flex align-items-center mt-3">
                        <h3 class="f-w-300 d-flex align-items-center m-b-0">$249.95</h3>
                        <span class="badge bg-light-success ms-2">36%</span>
                    </div>
                    <p class="text-muted mb-2 text-sm mt-3">You made an extra 35,000 this daily</p>
                    <div class="progress" style="height: 7px">
                        <div class="progress-bar bg-brand-color-3" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-6">
            <div class="card statistics-card-1 overflow-hidden">
                <div class="card-body">
                    <img src="{{ URL::asset('build/images/widget/img-status-5.svg') }}" alt="img" class="img-fluid img-bg" />
                    <h5 class="mb-4">Monthly Sales</h5>
                    <div class="d-flex align-items-center mt-3">
                        <h3 class="f-w-300 d-flex align-items-center m-b-0">$249.95</h3>
                        <span class="badge bg-light-primary ms-2">20%</span>
                    </div>
                    <p class="text-muted mb-2 text-sm mt-3">You made an extra 35,000 this Monthly</p>
                    <div class="progress" style="height: 7px">
                        <div class="progress-bar bg-brand-color-3" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-12">
            <div class="card statistics-card-1 overflow-hidden bg-brand-color-3">
                <div class="card-body">
                    <img src="{{ URL::asset('build/images/widget/img-status-6.svg') }}" alt="img" class="img-fluid img-bg" />
                    <h5 class="mb-4 text-white">Yearly Sales</h5>
                    <div class="d-flex align-items-center mt-3">
                        <h3 class="text-white f-w-300 d-flex align-items-center m-b-0">$249.95</h3>
                    </div>
                    <p class="text-white text-opacity-75 mb-2 text-sm mt-3">You made an extra 35,000 this Daily</p>
                    <div class="progress bg-white bg-opacity-10" style="height: 7px">
                        <div class="progress-bar bg-white" role="progressbar" style="width: 75%" aria-valuenow="75"
                            aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div> --}}
    </div>
    <!-- [ Contenu principal ] end -->
@endsection

@section('scripts')
    <!-- [Page Specific JS] start -->
    <script src="{{ URL::asset('build/js/plugins/apexcharts.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/plugins/jsvectormap.min.js') }}"></script>
    <script src="{{ URL::asset('build/js/plugins/world.js') }}"></script>
    <script src="{{ URL::asset('build/js/plugins/world-merc.js') }}"></script>
    <script src="{{ URL::asset('build/js/widgets/earnings-users-chart.js') }}"></script>
    <script src="{{ URL::asset('build/js/widgets/world-map-markers.js') }}"></script>
    <!-- [Page Specific JS] end -->
@endsection
