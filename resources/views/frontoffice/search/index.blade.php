@extends('frontoffice.layouts.app')

@section('title', 'Résultats de recherche')

@section('content')
    <div class="ps-categogy">
        <div class="container">

            {{-- ✅ Breadcrumb --}}
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ route('frontoffice.home') }}">Accueil</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">Recherche</li>
            </ul>

            <h1 class="ps-categogy__name">Résultats de recherche : “{{ $query }}”</h1>

            <div class="ps-categogy__content">
                <div class="row row-reverse">

                    {{-- ✅ Colonne principale --}}
                    <div class="col-12 col-md-9">
                        <div class="ps-categogy__wrapper">
                            {{-- Options de tri / affichage --}}
                            <div class="ps-categogy__type">
                                <a class="active" href="#"><img src="{{ asset('assets/img/bars-active.png') }}"
                                        alt=""></a>
                                <a href="#"><img src="{{ asset('assets/img/gird2.png') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('assets/img/gird3.png') }}" alt=""></a>
                                <a href="#"><img src="{{ asset('assets/img/gird4.png') }}" alt=""></a>
                            </div>

                            <div class="ps-categogy__onsale">
                                <form method="GET" action="{{ route('frontoffice.search') }}">
                                    <input type="hidden" name="q" value="{{ $query }}">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="onSaleProduct"
                                            name="on_sale" value="1" {{ request('on_sale') ? 'checked' : '' }}
                                            onchange="this.form.submit()">
                                        <label class="custom-control-label" for="onSaleProduct">
                                            Afficher uniquement les produits en solde
                                        </label>
                                    </div>
                                </form>
                            </div>

                            <div class="ps-categogy__sort">
                                <form method="GET" action="{{ route('frontoffice.search') }}">
                                    <input type="hidden" name="q" value="{{ $query }}">
                                    <span>Trier par</span>
                                    <select class="form-select" name="sort" onchange="this.form.submit()">
                                        <option value="latest" {{ request('sort') == 'latest' ? 'selected' : '' }}>
                                            Nouveautés
                                        </option>
                                        <option value="price_low" {{ request('sort') == 'price_low' ? 'selected' : '' }}>
                                            Prix: bas → haut</option>
                                        <option value="price_high" {{ request('sort') == 'price_high' ? 'selected' : '' }}>
                                            Prix: haut → bas</option>
                                    </select>
                                </form>
                            </div>

                            <div class="ps-categogy__show">
                                <form method="GET" action="{{ route('frontoffice.search') }}">
                                    <input type="hidden" name="q" value="{{ $query }}">
                                    <span>Afficher</span>
                                    <select class="form-select" name="show" onchange="this.form.submit()">
                                        <option value="12" {{ request('show') == 12 ? 'selected' : '' }}>12</option>
                                        <option value="24" {{ request('show') == 24 ? 'selected' : '' }}>24</option>
                                        <option value="36" {{ request('show') == 36 ? 'selected' : '' }}>36</option>
                                        <option value="48" {{ request('show') == 48 ? 'selected' : '' }}>48</option>
                                    </select>
                                </form>
                            </div>
                        </div>

                        {{-- ✅ Liste des produits --}}
                        <div class="ps-categogy--list">
                            @forelse($products as $product)
                                <div class="ps-product ps-product--list">
                                    <div class="ps-product__content">
                                        <div class="ps-product__thumbnail">
                                            <a class="ps-product__image"
                                                href="{{ route('product.show', $product->slug) }}">
                                                <figure>
                                                    <img src="{{ $product->getFirstMediaUrl('main_image') ?: asset('img/products/default.jpg') }}"
                                                        alt="{{ $product->title }}">
                                                </figure>
                                            </a>
                                            <div class="ps-product__actions">
                                                <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                    title="Aperçu rapide">
                                                    <a href="#" class="btn-quickview" data-id="{{ $product->id }}">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </div>

                                            </div>
                                            @if ($product->old_price && $product->old_price > $product->price)
                                                <div class="ps-product__badge">
                                                    <div class="ps-badge ps-badge--sale">Promo</div>
                                                </div>
                                            @endif
                                        </div>
                                        <div class="ps-product__info">
                                            <h5 class="ps-product__title">
                                                <a
                                                    href="{{ route('product.show', $product->slug) }}">{{ $product->title }}</a>
                                            </h5>
                                            <div class="ps-product__desc">
                                                <p>{{ Str::limit(strip_tags($product->description), 120) }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ps-product__footer">
                                        <div class="ps-product__meta">
                                            <span class="ps-product__price">{{ $product->price }} MAD</span>
                                            @if ($product->old_price)
                                                <span class="ps-product__del">{{ $product->old_price }} MAD</span>
                                            @endif
                                        </div>
                                        <div class="ps-product__quantity">
                                            <form action="{{ route('cart.add', $product->id) }}" method="POST">
                                                @csrf
                                                <div class="def-number-input number-input safari_only">
                                                    <button type="button" class="minus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()">
                                                        <i class="icon-minus"></i>
                                                    </button>
                                                    <input class="quantity" min="1" name="quantity"
                                                        value="1" type="number" />
                                                    <button type="button" class="plus"
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()">
                                                        <i class="icon-plus"></i>
                                                    </button>
                                                </div>
                                                <button type="submit" class="ps-btn ps-btn--warning">Ajouter au
                                                    panier</button>
                                            </form>
                                        </div>
                                        <div class="ps-product__variations">
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Wishlist">
                                                <a href="#" class="btn-wishlist" data-id="{{ $product->id }}">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            @empty
                                <p>Aucun produit trouvé pour "{{ $query }}".</p>
                            @endforelse
                        </div>

                        {{-- ✅ Pagination --}}
                        <div class="ps-pagination">
                            {{ $products->appends(request()->query())->links('pagination::bootstrap-4') }}
                        </div>

                        {{-- ✅ Bannière --}}
                        <div class="ps-delivery"
                            data-background="{{ asset('assets/img/promotion/banner-delivery-2.jpg') }}">
                            <div class="ps-delivery__content">
                                <div class="ps-delivery__text">
                                    <i class="icon-shield-check"></i>
                                    <span><strong>Livraison 100 % sécurisée</strong> offerte à partir de 1000 MAD
                                        d'achat</span>
                                </div>
                                <a class="ps-delivery__more" href="#">En savoir plus</a>
                            </div>
                        </div>

                    </div>

                    {{-- ✅ Sidebar --}}
                    <div class="col-12 col-md-3">
                        <div class="ps-widget ps-widget--product">

                            {{-- Catégories --}}
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Catégories</h4>
                                <a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content ps-widget__category">
                                    <ul class="menu--mobile">
                                        @foreach ($categories as $cat)
                                            <li>
                                                <a
                                                    href="{{ route('frontoffice.category', $cat->slug) }}">{{ $cat->name }}</a>
                                                @if ($cat->children && $cat->children->count())
                                                    <span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                                    <ul class="sub-menu">
                                                        @foreach ($cat->children as $child)
                                                            <li>
                                                                <a
                                                                    href="{{ route('frontoffice.category', $child->slug) }}">{{ $child->name }}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            {{-- ✅ Filtre prix --}}
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Par prix</h4>
                                <a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content">
                                    <div class="ps-widget__price">
                                        <div id="slide-price"></div>
                                    </div>

                                    <form method="GET" action="{{ route('products.index') }}">
                                        {{-- Garder les autres filtres actifs (on_sale, tri, etc.) --}}
                                        @foreach (request()->except(['prix_min', 'prix_max', 'page']) as $key => $value)
                                            <input type="hidden" name="{{ $key }}"
                                                value="{{ $value }}">
                                        @endforeach

                                        {{-- Valeurs affichées --}}
                                        <div class="ps-widget__input">
                                            <span class="ps-price" id="slide-price-min">MAD
                                                {{ request('prix_min', 0) }}</span>
                                            <span class="bridge">-</span>
                                            <span class="ps-price" id="slide-price-max">MAD
                                                {{ request('prix_max', 10000) }}</span>
                                        </div>

                                        {{-- Inputs cachés pour soumettre au backend --}}
                                        <input type="hidden" name="prix_min" id="prix_min"
                                            value="{{ request('prix_min', 0) }}">
                                        <input type="hidden" name="prix_max" id="prix_max"
                                            value="{{ request('prix_max', 10000) }}">

                                        <button type="submit" class="ps-widget__filter">Filtrer</button>
                                    </form>
                                </div>
                            </div>


                            {{-- Filtres spéciaux --}}
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Filtres spéciaux</h4>
                                <a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content">
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="isHot"
                                                name="is_hot" value="1" {{ request('is_hot') ? 'checked' : '' }}
                                                onchange="window.location='{{ request()->fullUrlWithQuery(['is_hot' => request('is_hot') ? null : 1]) }}'">
                                            <label class="custom-control-label" for="isHot">Produits Hot 🔥</label>
                                        </div>
                                    </div>
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="isOccasion"
                                                name="is_occasion" value="1"
                                                {{ request('is_occasion') ? 'checked' : '' }}
                                                onchange="window.location='{{ request()->fullUrlWithQuery(['is_occasion' => request('is_occasion') ? null : 1]) }}'">
                                            <label class="custom-control-label" for="isOccasion">Produits Occasion</label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            {{-- Bannière promo --}}
                            <div class="ps-widget__promo">
                                <img src="{{ asset('assets/img/banner-sidebar1.jpg') }}" alt="Promo">
                            </div>

                        </div>
                    </div>

                </div> {{-- row --}}
            </div> {{-- ps-categogy__content --}}
        </div> {{-- container --}}
    </div> {{-- ps-categogy --}}
@endsection
