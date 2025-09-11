@extends('layouts.main')

@section('title', 'Tableau de bord')
@section('breadcrumb-item', 'Accueil')
@section('breadcrumb-item-active', 'Tableau de bord')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/apexcharts.css') }}">
@endsection

@section('content')
<!-- [ Cartes KPI stylées ] -->
<div class="row">
    {{-- ✅ Produits --}}
    <div class="col-md-4 col-sm-6">
        <div class="card statistics-card-1 overflow-hidden">
            <div class="card-body">
                <img src="{{ asset('build/images/widget/img-status-4.svg') }}" alt="img" class="img-fluid img-bg" />
                <h5 class="mb-4">Produits</h5>
                <div class="d-flex align-items-center mt-3">
                    <h3 class="f-w-300 d-flex align-items-center m-b-0">{{ $stats['totalProducts'] }}</h3>
                    <span class="badge bg-light-success ms-2">+{{ $stats['totalHot'] }}</span>
                </div>
                <p class="text-muted mb-2 text-sm mt-3">Produits disponibles en boutique</p>
                <div class="progress" style="height: 7px">
                    <div class="progress-bar bg-brand-color-3" role="progressbar" style="width: 85%" aria-valuenow="85"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- ✅ Catégories Produits --}}
    <div class="col-md-4 col-sm-6">
        <div class="card statistics-card-1 overflow-hidden">
            <div class="card-body">
                <img src="{{ asset('build/images/widget/img-status-5.svg') }}" alt="img" class="img-fluid img-bg" />
                <h5 class="mb-4">Catégories Produits</h5>
                <div class="d-flex align-items-center mt-3">
                    <h3 class="f-w-300 d-flex align-items-center m-b-0">{{ $stats['totalCategories'] }}</h3>
                    <span class="badge bg-light-primary ms-2">{{ $stats['totalTags'] }} tags</span>
                </div>
                <p class="text-muted mb-2 text-sm mt-3">Organisation du catalogue</p>
                <div class="progress" style="height: 7px">
                    <div class="progress-bar bg-brand-color-3" role="progressbar" style="width: 50%" aria-valuenow="50"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>

    {{-- ✅ Articles de blog --}}
    <div class="col-md-4 col-sm-12">
        <div class="card statistics-card-1 overflow-hidden bg-brand-color-3">
            <div class="card-body">
                <img src="{{ asset('build/images/widget/img-status-6.svg') }}" alt="img" class="img-fluid img-bg" />
                <h5 class="mb-4 text-white">Articles de blog</h5>
                <div class="d-flex align-items-center mt-3">
                    <h3 class="text-white f-w-300 d-flex align-items-center m-b-0">{{ $stats['totalPosts'] }}</h3>
                </div>
                <p class="text-white text-opacity-75 mb-2 text-sm mt-3">Articles publiés sur le site</p>
                <div class="progress bg-white bg-opacity-10" style="height: 7px">
                    <div class="progress-bar bg-white" role="progressbar" style="width: 65%" aria-valuenow="65"
                        aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- [ Activité récente ] -->
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">🛍️ Derniers Produits</div>
            <ul class="list-group list-group-flush">
                @foreach($recentProducts as $p)
                    <li class="list-group-item">
                        {{ $p->title }} – {{ number_format($p->price, 2) }} MAD
                        <span class="text-muted float-end">{{ $p->created_at->format('d/m/Y') }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">📰 Derniers Articles</div>
            <ul class="list-group list-group-flush">
                @foreach($recentPosts as $post)
                    <li class="list-group-item">
                        {{ $post->title }}
                        <span class="text-muted float-end">{{ $post->published_at?->format('d/m/Y') }}</span>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>

<!-- [ Graphiques ] -->
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">📈 Produits par mois</div>
            <div id="chart-products-month"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">✍️ Articles par mois</div>
            <div id="chart-posts-month"></div>
        </div>
    </div>
</div>
<div class="row mt-4">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">📦 Produits par catégorie</div>
            <div id="chart-products-category"></div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">🔥 Hot / 🎁 Occasion / 🛒 Normal</div>
            <div id="chart-products-comparison"></div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="{{ URL::asset('build/js/plugins/apexcharts.min.js') }}"></script>
<script>
    // Produits par mois
    new ApexCharts(document.querySelector("#chart-products-month"), {
        chart: { type: 'line' },
        series: [{ name: "Produits", data: @json(array_values($productsByMonth->toArray())) }],
        xaxis: { categories: @json(array_keys($productsByMonth->toArray())) }
    }).render();

    // Articles par mois
    new ApexCharts(document.querySelector("#chart-posts-month"), {
        chart: { type: 'line' },
        series: [{ name: "Articles", data: @json(array_values($postsByMonth->toArray())) }],
        xaxis: { categories: @json(array_keys($postsByMonth->toArray())) }
    }).render();

    // Produits par catégorie
    new ApexCharts(document.querySelector("#chart-products-category"), {
        chart: { type: 'pie' },
        series: @json($productsByCategory->pluck('products_count')->toArray()),
        labels: @json($productsByCategory->pluck('name')->toArray())
    }).render();

    // Hot vs Occasion vs Normal
    new ApexCharts(document.querySelector("#chart-products-comparison"), {
        chart: { type: 'donut' },
        series: @json(array_values($productComparison)),
        labels: ['Hot', 'Occasion', 'Normal']
    }).render();
</script>
@endsection
