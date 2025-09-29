@extends('frontoffice.layouts.app')

@section('content')
    <div class="ps-wishlist">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ route('frontoffice.home') }}">Accueil</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">Ma Wishlist</li>
            </ul>

            <h3 class="ps-wishlist__title">Ma Wishlist ({{ count($products) }})</h3>

            <div class="ps-wishlist__content">
                @if ($products->isEmpty())
                    <div class="alert alert-info">
                        Votre wishlist est vide. <a href="{{ route('frontoffice.home') }}">Commencer vos achats</a>.
                    </div>
                @else
                    {{-- LISTE (cartes) --}}
                    <ul class="ps-wishlist__list">
                        @foreach ($products as $product)
                            @php
                                $image = $product->getFirstMediaUrl('main_image') ?: asset('img/default-product.jpg');
                                $price = number_format($product->price, 2);
                                $isInWishlist = in_array($product->id, session('wishlist', []));
                            @endphp
                            <li>
                                <div class="ps-product ps-product--wishlist">
                                    <div class="ps-product__remove">
                                        {{-- 🔁 Unification bouton favoris pour éviter les conflits --}}
                                        <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                            title="Favoris">
                                            <a href="#" class="btn-wishlist {{ $isInWishlist ? 'active' : '' }}"
                                                data-id="{{ $product->id }}">
                                                <i class="fa fa-heart{{ $isInWishlist ? '' : '-o' }}"></i>
                                            </a>
                                        </div>
                                    </div>

                                    <div class="ps-product__thumbnail">
                                        <a class="ps-product__image" href="{{ route('product.show', $product->slug) }}">
                                            <figure>
                                                <img src="{{ $image }}" alt="{{ $product->name ?? 'Produit' }}" />
                                            </figure>
                                        </a>
                                    </div>

                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title">
                                            <a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a>
                                        </h5>

                                        <div class="ps-product__row">
                                            <div class="ps-product__label">Prix :</div>
                                            <div class="ps-product__value">
                                                <span class="ps-product__price">{{ $price }} MAD</span>
                                            </div>
                                        </div>

                                        <div class="ps-product__row ps-product__stock">
                                            <div class="ps-product__label">Stock :</div>
                                            <div class="ps-product__value">
                                                <span class="ps-product__in-stock">Disponible</span>
                                            </div>
                                        </div>

                                        <div class="ps-product__cart">
                                            <button class="ps-btn btn-cart" data-id="{{ $product->id }}">
                                                Ajouter au panier
                                            </button>
                                        </div>

                                        <div class="ps-product__row ps-product__quantity">
                                            <div class="ps-product__label">Quantité :</div>
                                            <div class="ps-product__value">1</div>
                                        </div>

                                        <div class="ps-product__row ps-product__subtotal">
                                            <div class="ps-product__label">Sous-total :</div>
                                            <div class="ps-product__value">{{ $price }} MAD</div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                    </ul>

                    {{-- TABLEAU --}}
                    <div class="ps-wishlist__table mt-5">
                        <table class="table ps-table ps-table--product">
                            <thead>
                                <tr>
                                    <th class="ps-product__remove"></th>
                                    <th class="ps-product__thumbnail"></th>
                                    <th class="ps-product__name">Nom du produit</th>
                                    <th class="ps-product__meta">Prix unitaire</th>
                                    <th class="ps-product__status">Statut</th>
                                    <th class="ps-product__cart"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                    @php
                                        $image =
                                            $product->getFirstMediaUrl('main_image') ?:
                                            asset('img/default-product.jpg');
                                        $price = number_format($product->price, 2);
                                        $isInWishlist = in_array($product->id, session('wishlist', []));
                                    @endphp
                                    <tr>
                                        <td class="ps-product__remove">
                                            {{-- 🔁 Même bouton unifié ici aussi --}}
                                            <div class="ps-product__item" data-toggle="tooltip" data-placement="left"
                                                title="Favoris">
                                                <a href="#" class="btn-wishlist {{ $isInWishlist ? 'active' : '' }}"
                                                    data-id="{{ $product->id }}">
                                                    <i class="fa fa-heart{{ $isInWishlist ? '' : '-o' }}"></i>
                                                </a>
                                            </div>
                                        </td>

                                        <td class="ps-product__thumbnail">
                                            <a class="ps-product__image"
                                                href="{{ route('product.show', $product->slug) }}">
                                                <figure><img src="{{ $image }}" alt="{{ $product->name }}">
                                                </figure>
                                            </a>
                                        </td>

                                        <td class="ps-product__name">
                                            <a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a>
                                        </td>

                                        <td class="ps-product__meta">
                                            <span class="ps-product__price">{{ $price }} MAD</span>
                                        </td>

                                        <td class="ps-product__status">
                                            <span class="ps-product__in-stock">Disponible</span>
                                        </td>

                                        <td class="ps-product__cart">
                                            <button class="ps-btn btn-cart" data-id="{{ $product->id }}">
                                                Ajouter au panier
                                            </button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                @endif
            </div>

            <div class="ps-wishlist__share mt-4">
                <label>Partager sur :</label>
                <ul class="ps-social ps-social--color">
                    <!-- Facebook Share -->
                    <li>
                        <a class="ps-social__link facebook"
                            href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"
                            target="_blank">
                            <i class="fa fa-facebook"></i>
                            <span class="ps-tooltip">Facebook</span>
                        </a>
                    </li>

                    <!-- Twitter Share -->
                    <li>
                        <a class="ps-social__link twitter"
                            href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($product->name ?? '') }}"
                            target="_blank">
                            <i class="fa fa-twitter"></i>
                            <span class="ps-tooltip">Twitter</span>
                        </a>
                    </li>

                    <!-- Pinterest Share -->
                    <li>
                        <a class="ps-social__link pinterest"
                            href="https://pinterest.com/pin/create/button/?url={{ urlencode(request()->fullUrl()) }}&media={{ urlencode($main ?? '') }}&description={{ urlencode($product->name ?? '') }}"
                            target="_blank">
                            <i class="fa fa-pinterest-p"></i>
                            <span class="ps-tooltip">Pinterest</span>
                        </a>
                    </li>

                    <!-- LinkedIn Share -->
                    <li>
                        <a class="ps-social__link linkedin"
                            href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}"
                            target="_blank">
                            <i class="fa fa-linkedin"></i>
                            <span class="ps-tooltip">LinkedIn</span>
                        </a>
                    </li>

                    <!-- Email Share -->
                    <li>
                        <a class="ps-social__link envelope"
                            href="mailto:?subject={{ rawurlencode($product->name ?? 'Check this out') }}&body={{ rawurlencode(request()->fullUrl()) }}">
                            <i class="fa fa-envelope-o"></i>
                            <span class="ps-tooltip">Email</span>
                        </a>
                    </li>

                    <!-- WhatsApp Share -->
                    <li>
                        <a class="ps-social__link whatsapp"
                            href="https://wa.me/?text={{ urlencode(($product->name ?? '') . ' ' . request()->fullUrl()) }}"
                            target="_blank">
                            <i class="fa fa-whatsapp"></i>
                            <span class="ps-tooltip">WhatsApp</span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </div>
@endsection
