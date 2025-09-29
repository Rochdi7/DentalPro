@extends('frontoffice.layouts.app')

@section('title', 'Produits')

@section('content')

    <div class="ps-categogy">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item">
                    <a href="{{ route('frontoffice.home') }}">Accueil</a>
                </li>
                <li class="ps-breadcrumb__item">
                    <a href="{{ route('products.index') }}">Boutique</a>
                </li>
                <li class="ps-breadcrumb__item active" aria-current="page">
                    {{ $currentCategory->name ?? 'Produits' }}
                </li>
            </ul>

            <h1 class="ps-categogy__name">
                {{ $currentCategory?->name ?? 'Tous les produits' }}
                <sup>({{ $products->total() }})</sup>
            </h1>
            <div class="ps-categogy__content">
                <div class="row row-reverse">
                    <div class="col-12 col-md-9">

                        <div class="ps-categogy__wrapper">
                            <div class="ps-categogy__type">
                                <a href="{{ route('products.index') }}">
                                    <img src="{{ asset('assets/img/bars.png') }}" alt="Vue en liste">
                                </a>
                                <a href="{{ route('products.index') }}">
                                    <img src="{{ asset('assets/img/gird2.png') }}" alt="Grille compacte">
                                </a>
                                <a class="active" href="{{ route('products.index') }}">
                                    <img src="{{ asset('assets/img/gird3-active.png') }}" alt="Grille large">
                                </a>
                                <a href="{{ route('products.index') }}">
                                    <img src="{{ asset('assets/img/gird4.png') }}" alt="Grille séparée">
                                </a>
                            </div>

                            <div class="ps-categogy__onsale">
                                <form method="GET" action="{{ route('products.index') }}">
                                    <div class="custom-control custom-checkbox">
                                        <input class="custom-control-input" type="checkbox" id="occasionCheckbox"
                                            name="occasion" value="1" onchange="this.form.submit();"
                                            {{ request('occasion') ? 'checked' : '' }}>

                                        <label class="custom-control-label" for="occasionCheckbox">
                                            Afficher uniquement les produits en occasion
                                        </label>
                                    </div>
                                </form>

                            </div>
                            <div class="ps-categogy__sort">
                                <form method="GET" action="{{ route('products.index') }}">
                                    {{-- Keep other query params like "occasion" in the URL --}}
                                    @if (request('occasion'))
                                        <input type="hidden" name="occasion" value="1">
                                    @endif

                                    <span>Trier par</span>
                                    <select name="sort" class="form-select" onchange="this.form.submit()">
                                        <option value="latest" {{ request('sort') === 'latest' ? 'selected' : '' }}>
                                            Nouveautés</option>

                                        <option value="price_asc" {{ request('sort') === 'price_asc' ? 'selected' : '' }}>
                                            Prix croissant</option>
                                        <option value="price_desc"
                                            {{ request('sort') === 'price_desc' ? 'selected' : '' }}>
                                            Prix décroissant</option>
                                    </select>
                                </form>
                            </div>

                            <div class="ps-categogy__show">
                                <form method="GET" action="{{ route('products.index') }}">
                                    @if (request('occasion'))
                                        <input type="hidden" name="occasion" value="1">
                                    @endif
                                    @if (request('sort'))
                                        <input type="hidden" name="sort" value="{{ request('sort') }}">
                                    @endif

                                    <span>Afficher</span>
                                    <select name="per_page" class="form-select" onchange="this.form.submit()">
                                        <option value="12" {{ request('per_page') == 12 ? 'selected' : '' }}>12
                                        </option>
                                        <option value="24" {{ request('per_page') == 24 ? 'selected' : '' }}>24
                                        </option>
                                        <option value="36" {{ request('per_page') == 36 ? 'selected' : '' }}>36
                                        </option>
                                        <option value="48" {{ request('per_page') == 48 ? 'selected' : '' }}>48
                                        </option>
                                    </select>
                                </form>
                            </div>

                        </div>
                        <div class="ps-categogy--grid">
                            <div class="row m-0">
                                @forelse ($products as $product)
                                    <div class="col-6 col-lg-4 col-xl-3 p-0">
                                        <div class="ps-product ps-product--standard">
                                            <div class="ps-product__thumbnail">
                                                <a class="ps-product__image"
                                                    href="{{ route('product.show', $product->slug) }}">
                                                    <figure>
                                                        <img src="{{ $product->getFirstMediaUrl('main_image', 'thumb') ?: asset('images/placeholder.jpg') }}"
                                                            alt="{{ $product->title }}">
                                                    </figure>
                                                </a>

                                                <div class="ps-product__actions">
                                                    <div class="ps-product__item" title="Ajouter à la wishlist">
                                                        <a href="#" class="btn-wishlist add-to-wishlist"
                                                            data-id="{{ $product->id }}">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>

                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Aperçu rapide">
                                                        <a href="#" class="btn-quickview"
                                                            data-id="{{ $product->id }}">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>

                                                    <div class="ps-product__item" title="Ajouter au panier">
                                                        <a href="#" class="btn-cart add-to-cart"
                                                            data-id="{{ $product->id }}">
                                                            <i class="fa fa-shopping-basket"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                @if ($product->is_occasion)
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--sale">Occasion</div>
                                                    </div>
                                                @elseif ($product->is_hot)
                                                    <div class="ps-product__badge">
                                                        <div class="ps-badge ps-badge--hot">Populaire</div>
                                                    </div>
                                                @endif
                                            </div>

                                            <div class="ps-product__content">
                                                <a class="ps-product__branch" href="#">
                                                    {{ $product->category?->name ?? 'Sans catégorie' }}
                                                </a>

                                                <h5 class="ps-product__title">
                                                    <a
                                                        href="{{ route('product.show', $product->slug) }}">{{ $product->title }}</a>
                                                </h5>

                                                <div class="ps-product__meta">
                                                    <span
                                                        class="ps-product__price {{ $product->old_price ? 'sale' : '' }}">
                                                        {{ number_format($product->price, 2) }} MAD
                                                    </span>

                                                    @if ($product->old_price)
                                                        <span
                                                            class="ps-product__del">{{ number_format($product->old_price, 2) }}
                                                            MAD</span>
                                                    @endif
                                                </div>

                                                <div class="ps-product__desc">
                                                    <ul class="ps-product__list">
                                                        @foreach ($product->characteristics->take(3) as $char)
                                                            <li>{{ $char->attribute_name }} : {{ $char->value }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                                <div class="ps-product__actions ps-product__group-mobile">
                                                    <div class="ps-product__cart">
                                                        <a class="ps-btn ps-btn--warning btn-cart add-to-cart"
                                                            href="#" data-id="{{ $product->id }}">
                                                            Ajouter au panier
                                                        </a>
                                                    </div>

                                                    <div class="ps-product__item cart">
                                                        <a href="#" class="btn-cart add-to-cart"
                                                            data-id="{{ $product->id }}">
                                                            <i class="fa fa-shopping-basket"></i>
                                                        </a>
                                                    </div>

                                                    <div class="ps-product__item">
                                                        <a href="#" class="btn-wishlist add-to-wishlist"
                                                            data-id="{{ $product->id }}">
                                                            <i class="fa fa-heart-o"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <div class="col-12">
                                        <p class="text-center">Aucun produit trouvé.</p>
                                    </div>
                                @endforelse
                            </div>
                        </div>

                        @if ($products->hasPages())
                            <div class="ps-pagination">
                                <ul class="pagination">

                                    {{-- Previous Page Link --}}
                                    @if ($products->onFirstPage())
                                        <li class="disabled"><span><i class="fa fa-angle-double-left"></i></span></li>
                                    @else
                                        <li><a href="{{ $products->previousPageUrl() }}"><i
                                                    class="fa fa-angle-double-left"></i></a></li>
                                    @endif

                                    {{-- Pagination Elements --}}
                                    @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                                        @if ($page == $products->currentPage())
                                            <li class="active"><a href="#">{{ $page }}</a></li>
                                        @else
                                            <li><a href="{{ $url }}">{{ $page }}</a></li>
                                        @endif
                                    @endforeach

                                    {{-- Next Page Link --}}
                                    @if ($products->hasMorePages())
                                        <li><a href="{{ $products->nextPageUrl() }}"><i
                                                    class="fa fa-angle-double-right"></i></a></li>
                                    @else
                                        <li class="disabled"><span><i class="fa fa-angle-double-right"></i></span></li>
                                    @endif

                                </ul>
                            </div>
                        @endif

                        <div class="ps-delivery" data-background="{{ asset('assets/img/ads/banner-delivery-2.webp') }}">
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
                    <div class="col-12 col-md-3">
                        <div class="ps-widget ps-widget--product">
                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Catégories</h4>
                                <a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>

                                <div class="ps-widget__content ps-widget__category">
                                    <ul class="menu--mobile">
                                        @foreach ($categories->where('parent_id', null) as $parent)
                                            <li>
                                                <a href="{{ route('products.index', ['category' => $parent->slug]) }}">
                                                    {{ $parent->name }}
                                                </a>

                                                @php
                                                    $children = $categories->where('parent_id', $parent->id);
                                                @endphp

                                                @if ($children->count())
                                                    <span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                                                    <ul class="sub-menu">
                                                        @foreach ($children as $child)
                                                            <li>
                                                                <a
                                                                    href="{{ route('products.index', ['category' => $child->slug]) }}">
                                                                    {{ $child->name }}
                                                                </a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Par prix</h4>
                                <a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content">
                                    <div class="ps-widget__price">
                                        <div id="slide-price"></div>
                                    </div>
                                    <form method="GET" action="{{ route('products.index') }}">
                                        @foreach (request()->except(['prix_min', 'prix_max', 'page']) as $key => $value)
                                            <input type="hidden" name="{{ $key }}"
                                                value="{{ $value }}">
                                        @endforeach

                                        {{-- We just keep the spans and add real input hidden fields --}}
                                        <div class="ps-widget__input">
                                            <span class="ps-price" id="slide-price-min">MAD
                                                {{ request('prix_min', 0) }}</span>
                                            <span class="bridge">-</span>
                                            <span class="ps-price" id="slide-price-max">MAD
                                                {{ request('prix_max', 820) }}</span>
                                        </div>

                                        {{-- Hidden inputs for form submission --}}
                                        <input type="hidden" name="prix_min" id="prix_min"
                                            value="{{ request('prix_min', 0) }}">
                                        <input type="hidden" name="prix_max" id="prix_max"
                                            value="{{ request('prix_max', 820) }}">

                                        <button type="submit" class="ps-widget__filter">Filtrer</button>
                                    </form>
                                </div>
                            </div>

                            <div class="ps-widget__block">
                                <h4 class="ps-widget__title">Filtres</h4>
                                <a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                <div class="ps-widget__content">

                                    {{-- ✅ Occasion --}}
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="filterOccasion"
                                                name="occasion" value="1" {{ request('occasion') ? 'checked' : '' }}
                                                onchange="this.form.submit()">
                                            <label class="custom-control-label" for="filterOccasion">Produits en
                                                occasion</label>
                                        </div>
                                    </div>

                                    {{-- ✅ En vedette --}}
                                    <div class="ps-widget__item">
                                        <div class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox" id="filterHot"
                                                name="hot" value="1" {{ request('hot') ? 'checked' : '' }}
                                                onchange="this.form.submit()">
                                            <label class="custom-control-label" for="filterHot">Produits en
                                                vedette</label>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <div class="ps-widget__promo"><img src="img/banner-sidebar1.jpg" alt></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
