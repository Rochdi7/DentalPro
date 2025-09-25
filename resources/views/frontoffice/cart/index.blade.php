@extends('frontoffice.layouts.app')

@section('content')
    <div class="ps-shopping">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ route('frontoffice.home') }}">Accueil</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">Panier</li>
            </ul>

            @php $itemCount = is_array($cart) ? count($cart) : 0; @endphp

            <h3 class="ps-shopping__title">Panier <sup>({{ $itemCount }})</sup></h3>

            <div class="ps-shopping__content">
                <div class="row">
                    <div class="col-12 col-md-7 col-lg-9">
                        @if ($itemCount === 0)
                            <div class="alert alert-info mb-4">
                                Votre panier est vide. <a href="{{ route('frontoffice.home') }}">Continuer vos achats</a>.
                            </div>
                        @else
                            <form action="{{ route('cart.update') }}" method="POST">
                                @csrf

                                {{-- ===== MOBILE LIST (theme block) ===== --}}
                                <ul class="ps-shopping__list">
                                    @foreach ($cart as $item)
                                        @php
                                            $product = $item['product'];
                                            $quantity = (int) $item['quantity'];
                                            $priceNum = is_array($product->price) ? 0 : (float) $product->price;
                                            $priceStr = number_format($priceNum, 2, '.', ' ');
                                            $subtotalNum = isset($item['subtotal'])
                                                ? (float) $item['subtotal']
                                                : $priceNum * $quantity;
                                            $subtotalStr = number_format($subtotalNum, 2, '.', ' ');
                                            $productId = $product->id;
                                            $name = $product->title ?? 'Produit';
                                            $slug = $product->slug ?? '#';
                                            $image =
                                                $product->getFirstMediaUrl('main_image') ?:
                                                asset('img/default-product.jpg');
                                        @endphp

                                        <li>
                                            <div class="ps-product ps-product--wishlist">
                                                <div class="ps-product__remove">
                                                    <a href="javascript:void(0)" class="js-remove-cart"
                                                        data-id="{{ $productId }}">
                                                        <i class="icon-cross"></i>
                                                    </a>
                                                </div>

                                                <div class="ps-product__thumbnail">
                                                    <a class="ps-product__image" href="{{ route('product.show', $slug) }}">
                                                        <figure><img src="{{ $image }}" alt="{{ $name }}" />
                                                        </figure>
                                                    </a>
                                                </div>

                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title">
                                                        <a href="{{ route('product.show', $slug) }}">{{ $name }}</a>
                                                    </h5>

                                                    <div class="ps-product__row">
                                                        <div class="ps-product__label">Prix :</div>
                                                        <div class="ps-product__value">
                                                            <span class="ps-product__price">{{ $priceStr }} MAD</span>
                                                        </div>
                                                    </div>

                                                    <div class="ps-product__row ps-product__quantity">
                                                        <div class="ps-product__label">Quantité :</div>
                                                        <div class="ps-product__value">
                                                            <div class="def-number-input number-input safari_only">
                                                                <button class="minus"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown(); return false;"><i
                                                                        class="icon-minus"></i></button>
                                                                <input class="quantity js-cart-qty" min="1"
                                                                    data-id="{{ $productId }}"
                                                                    name="quantities[{{ $productId }}]"
                                                                    value="{{ $quantity }}" type="number">
                                                                <button class="plus"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp(); return false;"><i
                                                                        class="icon-plus"></i></button>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="ps-product__row ps-product__subtotal">
                                                        <div class="ps-product__label">Sous-total :</div>
                                                        <div class="ps-product__value">{{ $subtotalStr }} MAD</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>

                                {{-- ===== DESKTOP TABLE (theme block) ===== --}}
                                <div class="ps-shopping__table">
                                    <table class="table ps-table ps-table--product">
                                        <thead>
                                            <tr>
                                                <th class="ps-product__remove"></th>
                                                <th class="ps-product__thumbnail"></th>
                                                <th class="ps-product__name">Nom du produit</th>
                                                <th class="ps-product__meta">Prix unitaire</th>
                                                <th class="ps-product__quantity">Quantité</th>
                                                <th class="ps-product__subtotal">Sous-total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cart as $item)
                                                @php
                                                    $product = $item['product'];
                                                    $quantity = (int) $item['quantity'];

                                                    // Prix unitaire sécurisé
                                                    $priceNum = is_array($product->price) ? 0 : (float) $product->price;
                                                    $priceStr = number_format($priceNum, 2, '.', ' ');

                                                    // Sous-total avec fallback si non défini
                                                    $subtotalNum = isset($item['subtotal'])
                                                        ? (float) $item['subtotal']
                                                        : $priceNum * $quantity;
                                                    $subtotalStr = number_format($subtotalNum, 2, '.', ' ');

                                                    // Données produit
                                                    $productId = $product->id;
                                                    $name = $product->title ?? 'Produit'; // ✅ correction: name → title
                                                    $slug = $product->slug ?? '#';
                                                    $image =
                                                        $product->getFirstMediaUrl('main_image') ?:
                                                        asset('img/default-product.jpg');
                                                @endphp

                                                <tr>
                                                    <td class="ps-product__remove">
                                                        <a href="javascript:void(0)"
                                                            class="ps-product__remove js-remove-cart"
                                                            data-id="{{ $productId }}">
                                                            <i class="icon-cross"></i>
                                                        </a>
                                                    </td>
                                                    <td class="ps-product__thumbnail">
                                                        <a class="ps-product__image"
                                                            href="{{ route('product.show', $slug) }}">
                                                            <figure><img src="{{ $image }}"
                                                                    alt="{{ $name }}"></figure>
                                                        </a>
                                                    </td>
                                                    <td class="ps-product__name">
                                                        <a
                                                            href="{{ route('product.show', $slug) }}">{{ $name }}</a>
                                                    </td>
                                                    <td class="ps-product__meta">
                                                        <span class="ps-product__price">{{ $priceStr }} MAD</span>
                                                    </td>
                                                    <td class="ps-product__quantity">
                                                        <div class="def-number-input number-input safari_only">
                                                            <button class="minus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown(); return false;"><i
                                                                    class="icon-minus"></i></button>
                                                            <input class="quantity js-cart-qty" min="1"
                                                                data-id="{{ $productId }}"
                                                                name="quantities[{{ $productId }}]"
                                                                value="{{ $quantity }}" type="number">
                                                            <button class="plus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp(); return false;"><i
                                                                    class="icon-plus"></i></button>
                                                        </div>
                                                    </td>
                                                    <td class="ps-product__subtotal">{{ $subtotalStr }} MAD</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                {{-- ===== FOOTER ===== --}}
                                <div class="ps-shopping__footer">

                                    <div class="ps-shopping__button">
                                        <button type="button" class="ps-btn ps-btn--primary js-clear-cart"
                                            data-url="{{ route('cart.clear') }}">
                                            Tout supprimer
                                        </button>

                                        <button class="ps-btn ps-btn--primary" type="submit">Mettre à jour</button>
                                    </div>
                                </div>
                            </form>
                        @endif
                    </div>

                    <div class="col-12 col-md-5 col-lg-3">
                        <div class="ps-shopping__label">Total</div>
                        <div class="ps-shopping__box">
                            @php $totalStr = number_format((float) $total, 2, '.', ' '); @endphp

                            <div class="ps-shopping__row">
                                <div class="ps-shopping__label">Sous-total</div>
                                <div class="ps-shopping__price">{{ $totalStr }} MAD</div>
                            </div>

                            <div class="ps-shopping__label">Livraison</div>
                            <div class="ps-shopping__checkbox">
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="shipping" id="free-ship"
                                        value="free" @if ($total < 1000) disabled @endif>
                                    <label class="form-check-label" for="free-ship">
                                        Livraison gratuite
                                        @if ($total < 1000)
                                            <small class="text-muted">(Disponible à partir de 1000 MAD)</small>
                                        @endif
                                    </label>
                                </div>
                            </div>

                            <div class="ps-shopping__row">
                                <div class="ps-shopping__label">Total</div>
                                <div class="ps-shopping__price">{{ $totalStr }} MAD</div>
                            </div>

                            <div class="ps-shopping__checkout">
                                <a class="ps-btn ps-btn--warning" href="{{ route('checkout.index') }}">Passer à la
                                    caisse</a>
                                <a class="ps-shopping__link" href="{{ route('frontoffice.home') }}">Continuer vos
                                    achats</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection
