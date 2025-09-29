@extends('frontoffice.layouts.app')

@section('title', $product->name)

@section('content')
    <div class="ps-page--product ps-page--product1">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="index.html">Home</a></li>
                <li class="ps-breadcrumb__item"><a href="index.html">Shop</a></li>
                <li class="ps-breadcrumb__item"><a href="index.html">Equipment</a></li>
                <li class="ps-breadcrumb__item"><a href="index.html">Machines</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">Blood Pressure Monitor</li>
            </ul>
            <div class="ps-page__content">
                <div class="row">
                    <div class="col-12 col-md-9">
                        <div class="ps-product--detail">
                            <div class="row">
                                <div class="col-12 col-xl-7">
                                    <div class="ps-product--gallery">
                                        <div class="ps-product__thumbnail">
                                            {{-- Main image first, then gallery (structure & classes unchanged) --}}
                                            @php
                                                $main =
                                                    $product->getFirstMediaUrl('main_image') ?:
                                                    asset('img/default-product.jpg');
                                                $gallery = $product->getMedia('gallery');
                                            @endphp
                                            <div class="slide"><img src="{{ $main }}" alt="{{ $product->name }}" />
                                            </div>
                                            @foreach ($gallery as $media)
                                                <div class="slide"><img src="{{ $media->getUrl() }}"
                                                        alt="{{ $product->name }}" /></div>
                                            @endforeach
                                        </div>

                                        <div class="ps-gallery--image">
                                            <div class="slide">
                                                <div class="ps-gallery__item"><img src="{{ $main }}"
                                                        alt="{{ $product->name }}" /></div>
                                            </div>
                                            @foreach ($gallery as $media)
                                                <div class="slide">
                                                    <div class="ps-gallery__item"><img src="{{ $media->getUrl() }}"
                                                            alt="{{ $product->name }}" /></div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-xl-5">
                                    <div class="ps-product__info">
                                        {{-- Badge (keep structure; show only when you need) --}}
                                        @if (isset($product->is_hot) && $product->is_hot)
                                            <div class="ps-product__badge"><span class="ps-badge ps-badge--hot">HOT</span>
                                            </div>
                                        @endif
                                        @if (isset($product->is_used) && $product->is_used)
                                            <div class="ps-product__badge"><span class="ps-badge">Occasion</span></div>
                                        @endif

                                        <div class="ps-product__branch">
                                            <a
                                                href="{{ $product->brand_url ?? '#' }}">{{ $product->brand ?? ($product->category->name ?? '—') }}</a>
                                        </div>

                                        <div class="ps-product__title">
                                            <a href="{{ route('product.show', $product->slug) }}">
                                                {{ \Illuminate\Support\Str::limit($product->title, 70) }}
                                            </a>
                                        </div>


                                        <div class="ps-product__desc">
                                            {{-- Short bullet points from characteristics (top 3 by position) --}}
                                            <ul class="ps-product__list">
                                                @foreach ($product->characteristics->sortBy('position')->take(3) as $c)
                                                    <li>{{ $c->attribute_name }}: {{ $c->value }}</li>
                                                @endforeach
                                            </ul>
                                        </div>

                                        {{-- ✅ INSERTED SIZE + QUANTITY + ADD TO CART --}}
                                        @php
                                            // Find relevant characteristic: taille, capacité, or volume
                                            $sizeAttr = $product->characteristics->first(function ($item) {
                                                return in_array(strtolower($item->attribute_name), [
                                                    'taille',
                                                    'capacité',
                                                    'volume',
                                                ]);
                                            });

                                            // Parse the value if found (ex: "S, M, L" or "50L, 100L")
                                            $sizeValues = $sizeAttr
                                                ? array_map('trim', explode(',', $sizeAttr->value))
                                                : [];
                                        @endphp

                                        @if (!empty($sizeValues))
                                            <div class="ps-product__group">
                                                <h6>{{ ucfirst($sizeAttr->attribute_name) }}</h6>
                                                <div class="ps-product__size ps-select--feature">
                                                    @foreach ($sizeValues as $val)
                                                        <a href="#" data-value="{{ $val }}"
                                                            title="{{ $val }}">{{ $val }}</a>
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endif


                                        <div class="ps-product__quantity" data-product-id="{{ $product->id }}">
                                            <h6>Quantité</h6>
                                            <div class="def-number-input number-input safari_only">
                                                <button class="minus" type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown(); return false;">
                                                    <i class="icon-minus"></i>
                                                </button>

                                                <input class="quantity js-product-qty" min="1" name="quantity"
                                                    value="1" type="number">

                                                <button class="plus" type="button"
                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp(); return false;">
                                                    <i class="icon-plus"></i>
                                                </button>
                                            </div>
                                        </div>

                                        <a class="ps-btn ps-btn--warning btn-cart btn-quickview-addcart"
                                            href="javascript:void(0)" data-id="{{ $product->id }}">
                                            Ajouter au panier
                                        </a>

                                        {{-- ✅ END INSERTION --}}

                                        <div class="ps-product__meta">
                                            @if (!empty($product->old_price) && $product->old_price > $product->price)
                                                <span
                                                    class="ps-product__price sale">{{ number_format($product->price, 2) }}
                                                    DH</span>
                                                <span class="ps-product__del">{{ number_format($product->old_price, 2) }}
                                                    DH</span>
                                            @else
                                                <span class="ps-product__price">{{ number_format($product->price, 2) }}
                                                    DH</span>
                                            @endif
                                        </div>


                                        {{-- <div class="ps-product__variations">
                                            <a class="ps-product__link" href="#" data-id="{{ $product->id }}"
                                                id="btn-wishlist-detail">Add to wishlist</a>

                                        </div> --}}

                                        <div class="ps-product__type">
                                            <ul class="ps-product__list">
                                                <li>
                                                    <span class="ps-list__title">Tags: </span>
                                                    @forelse($product->tags as $tag)
                                                        <a class="ps-list__text" href="#">{{ $tag->name }}</a>
                                                    @empty
                                                        <span class="ps-list__text">—</span>
                                                    @endforelse
                                                </li>
                                                <li>
                                                    <span class="ps-list__title">SKU: </span>
                                                    <a class="ps-list__text" href="#">{{ $product->sku ?? '—' }}</a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="ps-product__social">
                                            <ul class="ps-social ps-social--color">
                                                <li><a class="ps-social__link facebook"
                                                        href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(request()->fullUrl()) }}"><i
                                                            class="fa fa-facebook"></i><span
                                                            class="ps-tooltip">Facebook</span></a></li>
                                                <li><a class="ps-social__link twitter"
                                                        href="https://twitter.com/intent/tweet?url={{ urlencode(request()->fullUrl()) }}&text={{ urlencode($product->name) }}"><i
                                                            class="fa fa-twitter"></i><span
                                                            class="ps-tooltip">Twitter</span></a></li>
                                                <li><a class="ps-social__link pinterest"
                                                        href="https://pinterest.com/pin/create/button/?url={{ urlencode(request()->fullUrl()) }}&media={{ urlencode($main) }}&description={{ urlencode($product->name) }}"><i
                                                            class="fa fa-pinterest-p"></i><span
                                                            class="ps-tooltip">Pinterest</span></a></li>
                                                <li class="ps-social__linkedin"><a class="ps-social__link linkedin"
                                                        href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(request()->fullUrl()) }}"><i
                                                            class="fa fa-linkedin"></i><span
                                                            class="ps-tooltip">Linkedin</span></a></li>
                                                <li class="ps-social__reddit"><a class="ps-social__link reddit-alien"
                                                        href="https://www.reddit.com/submit?url={{ urlencode(request()->fullUrl()) }}&title={{ urlencode($product->name) }}"><i
                                                            class="fa fa-reddit-alien"></i><span class="ps-tooltip">Reddit
                                                            Alien</span></a></li>
                                                <li class="ps-social__email"><a class="ps-social__link envelope"
                                                        href="mailto:?subject={{ rawurlencode($product->name) }}&body={{ rawurlencode(request()->fullUrl()) }}"><i
                                                            class="fa fa-envelope-o"></i><span
                                                            class="ps-tooltip">Email</span></a></li>
                                                <li class="ps-social__whatsapp"><a class="ps-social__link whatsapp"
                                                        href="https://wa.me/?text={{ urlencode($product->name . ' ' . request()->fullUrl()) }}"><i
                                                            class="fa fa-whatsapp"></i><span
                                                            class="ps-tooltip">WhatsApp</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="ps-product__content">
                                <ul class="nav nav-tabs ps-tab-list" id="productContentTabs" role="tablist">
                                    <li class="nav-item" role="presentation"><a class="nav-link active"
                                            id="description-tab" data-toggle="tab" href="#description-content"
                                            role="tab" aria-controls="description-content"
                                            aria-selected="true">Description</a></li>
                                    <li class="nav-item" role="presentation"><a class="nav-link" id="information-tab"
                                            data-toggle="tab" href="#information-content" role="tab"
                                            aria-controls="information-content" aria-selected="false">Additional
                                            information</a></li>

                                </ul>

                                <div class="tab-content" id="productContent">
                                    {{-- Description tab (keeps exact markup) --}}
                                    <div class="tab-pane fade show active" id="description-content" role="tabpanel"
                                        aria-labelledby="description-tab">
                                        <div class="ps-document">
                                            <div class="row row-reverse">
                                                <div class="col-12 col-md-6">
                                                    <img class="ps-thumbnail"
                                                        src="{{ isset($gallery[0]) ? $gallery[0]->getUrl() : $main ?? asset('assets/img/products/default.jpg') }}"
                                                        alt="{{ $product->name }}">

                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <h2 class="ps-title">{{ $product->name }}</h2>
                                                    <div class="ps-subtitle">{{ $product->subtitle ?? '' }}</div>
                                                    <p class="ps-desc">{!! $product->description !!}</p>
                                                    <ul class="ps-list">
                                                        @foreach ($product->characteristics->sortBy('position')->take(3) as $c)
                                                            <li><img src="{{ asset('img/icon5.png') }}"
                                                                    alt=""><span>{{ $c->attribute_name }}:
                                                                    {{ $c->value }}</span></li>
                                                        @endforeach
                                                    </ul>
                                                </div>
                                            </div>

                                            {{-- Keep these two items with dynamic links/texts if you want --}}
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <div class="ps-item">
                                                        <img src="{{ asset('assets/img/maintenance.webp') }}" alt>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <div class="ps-item">
                                                        <img src="{{ asset('assets/img/installation.webp') }}" alt>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="row m-0">
                                                <div class="col-12 col-md-4 p-0">
                                                    <div class="ps-document__review">
                                                        <span>+120</span> utilisateurs à travers le maroc
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 p-0">
                                                    <div class="ps-document__review">
                                                        <span>plus de 7</span> ans d'expérience
                                                    </div>
                                                </div>
                                                <div class="col-12 col-md-4 p-0">
                                                    <div class="ps-document__review">
                                                        <span>5 étoiles</span> sur la qualité de nos produits
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    {{-- Additional information -> map characteristics --}}
                                    <div class="tab-pane fade" id="information-content" role="tabpanel"
                                        aria-labelledby="information-tab">
                                        <table class="table ps-table ps-table--oriented">
                                            <tbody>
                                                @forelse($product->characteristics->sortBy('position') as $c)
                                                    <tr>
                                                        <th class="ps-table__th">{{ $c->attribute_name }}</th>
                                                        <td>{{ $c->value }}</td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <th class="ps-table__th">—</th>
                                                        <td>—</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>



                                    {{-- Reviews (render if you have a reviews relation; otherwise show empty state) --}}
                                    <div class="tab-pane fade" id="reviews-content" role="tabpanel"
                                        aria-labelledby="reviews-tab">
                                        <div class="ps-product__tabreview">
                                            @forelse(($product->reviews ?? []) as $r)
                                                <div class="ps-review--product">
                                                    <div class="ps-review__row">
                                                        <div class="ps-review__avatar"><img
                                                                src="{{ asset('img/avatar-review.jpg') }}"
                                                                alt="alt" /></div>
                                                        <div class="ps-review__info">
                                                            <div class="ps-review__name">{{ $r->author_name }}</div>
                                                            <div class="ps-review__date">
                                                                {{ $r->created_at?->format('M d, Y') }}</div>
                                                        </div>
                                                        <div class="ps-review__rating">
                                                            @php $rv = (int)($r->rating ?? 0); @endphp
                                                            <select class="ps-rating" data-read-only="true">
                                                                @for ($i = 1; $i <= 5; $i++)
                                                                    <option value="{{ $i }}"
                                                                        {{ $i === $rv ? 'selected=selected' : '' }}>
                                                                        {{ $i }}</option>
                                                                @endfor
                                                            </select>
                                                        </div>
                                                        <div class="ps-review__desc">
                                                            <p>{{ $r->comment }}</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            @empty
                                                <p class="px-3">Aucun avis pour l’instant.</p>
                                            @endforelse
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Tiny helper script (no CSS/HTML changes) to update the total --}}
                        @push('scripts')
                            <script>
                                document.addEventListener('DOMContentLoaded', function() {
                                    const items = document.querySelectorAll('.fb-item');
                                    const totalEl = document.querySelector('.ps-bought__total');

                                    function fmt(n) {
                                        return new Intl.NumberFormat('fr-MA', {
                                            minimumFractionDigits: 2,
                                            maximumFractionDigits: 2
                                        }).format(n) + ' DH';
                                    }

                                    function recalc() {
                                        let t = 0;
                                        items.forEach(i => {
                                            if (i.checked) {
                                                t += parseFloat(i.dataset.price || 0);
                                            }
                                        });
                                        if (totalEl) {
                                            totalEl.textContent = fmt(t);
                                        }
                                    }
                                    items.forEach(i => i.addEventListener('change', recalc));
                                    recalc();
                                });
                            </script>
                        @endpush

                    </div>
                    <div class="col-12 col-md-3">
                        <div class="ps-product--extension">
                            <div class="ps-product__delivery">
                                <div class="ps-delivery__item">
                                    <i class="icon-wallet"></i>
                                    100% <br>Remboursement garanti
                                </div>
                                <div class="ps-delivery__item">
                                    <i class="icon-bag2"></i>
                                    Livraison <br>sans contact
                                </div>
                                <div class="ps-delivery__item">
                                    <i class="icon-truck"></i>
                                    Livraison gratuite <br>à partir de 1000 DH
                                </div>
                            </div>

                            <div class="ps-product__payment">
                                <img src="{{ asset('assets/img/paymentmethode2.webp') }}" alt="Moyens de paiement">
                            </div>

                            <div class="ps-product__gif">
                                <div class="ps-gif__text">
                                    <i class="icon-shield-check"></i>
                                    <strong>Livraison 100% sécurisée</strong> sans contact avec le livreur
                                </div>
                                <img class="ps-gif__thumbnail"
                                    src="{{ asset('assets/img/blue-white-ribbon-on-pink-box.webp') }}"
                                    alt="Livraison sécurisée">
                            </div>
                        </div>

                        @if ($relatedProducts->count())
                            <div class="ps-widget--related-product">
                                <div class="ps-widget__title">Produits similaires</div>
                                <div class="ps-widget__product">

                                    @foreach ($relatedProducts as $item)
                                        @php
                                            $mainImg =
                                                $item->getFirstMediaUrl('main_image') ?:
                                                asset('assets/img/default-product.jpg');
                                            $hoverImg = $item->getMedia('gallery')->first()?->getUrl() ?? $mainImg;
                                        @endphp

                                        <div class="ps-product ps-product--standard">
                                            <div class="ps-product__thumbnail">
                                                <a class="ps-product__image"
                                                    href="{{ route('product.show', $item->slug) }}">
                                                    <figure>
                                                        <img src="{{ $mainImg }}" alt="{{ $item->title }}" />
                                                        <img src="{{ $hoverImg }}" alt="{{ $item->title }} alt" />
                                                    </figure>
                                                </a>

                                                <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        title="Ajouter à la wishlist">
                                                        <a href="#" class="btn-wishlist"
                                                            data-id="{{ $item->id }}"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Aperçu rapide">
                                                        <a href="#" class="btn-quickview"
                                                            data-id="{{ $product->id }}">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>

                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        title="Ajouter au panier">
                                                        <a href="#" class="btn-cart"
                                                            data-id="{{ $item->id }}"><i
                                                                class="fa fa-shopping-basket"></i></a>
                                                    </div>
                                                </div>

                                                <div class="ps-product__badge">
                                                    @if ($product->is_hot)
                                                        <div class="ps-badge ps-badge--hot">Hot</div>
                                                    @endif
                                                    @if ($product->is_occasion)
                                                        <div class="ps-badge ps-badge--sale">Occasion</div>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="ps-product__content">
                                                <h5 class="ps-product__title">
                                                    <a href="{{ route('product.show', $product->slug) }}">
                                                        {{ \Illuminate\Support\Str::limit($product->title, 70) }}
                                                    </a>
                                                </h5>

                                                <div class="ps-product__meta">
                                                    @if (!empty($item->old_price) && $item->old_price > $item->price)
                                                        <span
                                                            class="ps-product__price sale">{{ number_format($item->price, 2) }}
                                                            DH</span>
                                                        <span
                                                            class="ps-product__del">{{ number_format($item->old_price, 2) }}
                                                            DH</span>
                                                    @else
                                                        <span
                                                            class="ps-product__price">{{ number_format($item->price, 2) }}
                                                            DH</span>
                                                    @endif
                                                </div>

                                                <div class="ps-product__desc">
                                                    <ul class="ps-product__list">
                                                        @foreach ($item->characteristics->sortBy('position')->take(3) as $c)
                                                            <li>{{ $c->attribute_name }}: {{ $c->value }}</li>
                                                        @endforeach
                                                    </ul>
                                                </div>

                                                <div class="ps-product__actions ps-product__group-mobile">
                                                    <div class="ps-product__quantity">
                                                        <div class="def-number-input number-input safari_only">
                                                            <button class="minus"
                                                                onclick="this.parentNode.querySelector('input').stepDown()">
                                                                <i class="icon-minus"></i>
                                                            </button>
                                                            <input class="quantity" min="1" name="quantity"
                                                                value="1" type="number" />
                                                            <button class="plus"
                                                                onclick="this.parentNode.querySelector('input').stepUp()">
                                                                <i class="icon-plus"></i>
                                                            </button>
                                                        </div>
                                                    </div>

                                                    <div class="ps-product__cart">
                                                        <a href="#" class="ps-btn ps-btn--warning btn-cart"
                                                            data-id="{{ $item->id }}">
                                                            Ajouter au panier
                                                        </a>
                                                    </div>

                                                    <div class="ps-product__item cart" data-toggle="tooltip"
                                                        title="Ajouter au panier">
                                                        <a href="#" class="btn-cart"
                                                            data-id="{{ $item->id }}"><i
                                                                class="fa fa-shopping-basket"></i></a>
                                                    </div>

                                                    <div class="ps-product__item" data-toggle="tooltip" title="Wishlist">
                                                        <a href="#" class="btn-wishlist"
                                                            data-id="{{ $item->id }}"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        @endif

                        <div class="ps-widget--promo"><img src="img/banner-sidebar1.jpg" alt></div>
                    </div>
                </div>
            </div>
        </div>
        @if ($relatedProducts->isNotEmpty())
            <section class="ps-section--also" data-background="{{ asset('assets/img/related-bg.jpg') }}">
                <div class="container">
                    <h3 class="ps-section__title">Les clients ont aussi acheté</h3>
                    <div class="ps-section__carousel">
                        <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000"
                            data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5"
                            data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5"
                            data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">

                            @foreach ($relatedProducts as $item)
                                @php
                                    $mainImg =
                                        $item->getFirstMediaUrl('main_image') ?:
                                        asset('assets/img/default-product.jpg');
                                    $hoverImg = $item->getMedia('gallery')->first()?->getUrl() ?? $mainImg;
                                @endphp

                                <div class="ps-product ps-product--standard">
                                    <div class="ps-product__thumbnail">
                                        <a class="ps-product__image" href="{{ route('product.show', $item->slug) }}">
                                            <figure>
                                                <img src="{{ $mainImg }}" alt="{{ $item->title }}" />
                                                <img src="{{ $hoverImg }}" alt="{{ $item->title }} hover" />
                                            </figure>
                                        </a>

                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" data-toggle="tooltip"
                                                title="Ajouter à la wishlist">
                                                <a href="#" class="btn-wishlist" data-id="{{ $item->id }}">
                                                    <i class="fa fa-heart-o"></i>
                                                </a>
                                            </div>

                                            <div class="ps-product__item" data-toggle="tooltip" title="Aperçu rapide">
                                                <a href="#" class="btn-quickview" data-id="{{ $item->id }}">
                                                    <i class="fa fa-search"></i>
                                                </a>
                                            </div>

                                            <div class="ps-product__item" data-toggle="tooltip"
                                                title="Ajouter au panier">
                                                <a href="#" class="btn-cart" data-id="{{ $item->id }}">
                                                    <i class="fa fa-shopping-basket"></i>
                                                </a>
                                            </div>
                                        </div>

                                        <div class="ps-product__badge">
                                            @if ($item->is_hot)
                                                <div class="ps-badge ps-badge--hot">Hot</div>
                                            @endif
                                            @if ($item->is_occasion)
                                                <div class="ps-badge ps-badge--sale">Occasion</div>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title">
                                            <a href="{{ route('product.show', $item->slug) }}">
                                                {{ \Illuminate\Support\Str::limit($item->title, 70) }}
                                            </a>
                                        </h5>

                                        <div class="ps-product__meta">
                                            @if (!empty($item->old_price) && $item->old_price > $item->price)
                                                <span class="ps-product__price sale">{{ number_format($item->price, 2) }}
                                                    DH</span>
                                                <span class="ps-product__del">{{ number_format($item->old_price, 2) }}
                                                    DH</span>
                                            @else
                                                <span class="ps-product__price">{{ number_format($item->price, 2) }}
                                                    DH</span>
                                            @endif
                                        </div>

                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                @foreach ($item->characteristics->sortBy('position')->take(3) as $c)
                                                    <li>{{ $c->attribute_name }}: {{ $c->value }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </section>
        @endif

    </div>
@endsection
