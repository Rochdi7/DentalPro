@extends('frontoffice.layouts.app')
@section('title', 'Accueil - DentalPro')
@section('meta_description', 'Bienvenue sur DentalPro, votre boutique en ligne spécialisée dans les outils dentaires.')
@section('meta_keywords', 'dental, outils dentaires, boutique en ligne, ecommerce')

<body>
    @section('content')
        <div class="ps-page">

            <div class="ps-home ps-home--1">
                <section class="ps-section--banner">
                    <div class="ps-section__overlay">
                        <div class="ps-section__loading"></div>
                    </div>
                    <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0"
                        data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1"
                        data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on">

                        <div class="ps-banner" style="background:#DAECFA;">
                            <div class="container container-initial">
                                <div class="ps-banner__block">
                                    <div class="ps-banner__content">
                                        <h2 class="ps-banner__title">Kit de <br /> Blanchiment Candid</h2>
                                        <div class="ps-banner__desc">Offre exclusive cette semaine chez DentalPro !</div>
                                        <div class="ps-banner__price">
                                            <span>159 MAD</span>
                                            <del>299 MAD</del>
                                        </div>
                                        <a class="bg-warning ps-banner__shop" href="#">Acheter maintenant</a>
                                        <div class="ps-banner__persen bg-warning ps-center">-30%</div>
                                    </div>
                                    <div class="ps-banner__thumnail">
                                        <img class="ps-banner__round" src="{{ asset('assets/img/round2.png') }}"
                                            alt="fond rond" />
                                        <img class="ps-banner__image" src="{{ asset('assets/img/ads/test.png') }}"
                                            alt="kit blanchiment" />

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ps-banner" style="background:#F0F2F5;">
                            <div class="container container-initial">
                                <div class="ps-banner__block">
                                    <div class="ps-banner__content">
                                        <h2 class="ps-banner__title">Masque médical<br /> antibactérien</h2>
                                        <div class="ps-banner__desc">Protégez-vous et votre cabinet en quelques secondes.
                                        </div>
                                        <div class="ps-banner__btn-group">
                                            <div class="ps-banner__btn">
                                                <img src="{{ asset('assets/img/icon3.png') }}"
                                                    alt="Anti-bactérien" />Antibactérien
                                            </div>
                                            <div class="ps-banner__btn">
                                                <img src="{{ asset('assets/img/icon4.png') }}" alt="Anti-virus" />Antivirus
                                            </div>
                                        </div>
                                        <a class="bg-warning ps-banner__shop" href="#">Acheter maintenant</a>
                                        <div class="ps-banner__persen bg-yellow ps-top"><small>seulement</small>25 MAD</div>
                                    </div>
                                    <div class="ps-banner__thumnail">
                                        <img class="ps-banner__round" src="{{ asset('assets/img/round5.png') }}"
                                            alt="fond rond" />
                                        <img class="ps-banner__image"
                                            src="{{ asset('assets/img/ads/slide22 (2) (1).png') }}" alt="masque médical" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ps-banner" style="background:#FFCC00;">
                            <div class="container container-initial">
                                <div class="ps-banner__block">
                                    <div class="ps-banner__content">
                                        <h2 class="ps-banner__title">Éliminez les bactéries <br />de votre cabinet</h2>
                                        <div class="ps-banner__desc">Assurez un environnement sain pour vos patients !</div>
                                        <div class="ps-banner__btn-group">
                                            <div class="ps-banner__btn">
                                                <img src="{{ asset('assets/img/icon3.png') }}"
                                                    alt="Anti-bactérien" />Antibactérien
                                            </div>
                                            <div class="ps-banner__btn">
                                                <img src="{{ asset('assets/img/icon4.png') }}" alt="Anti-virus" />Antivirus
                                            </div>
                                        </div>
                                        <a class="bg-white ps-banner__shop" href="#">Acheter maintenant</a>
                                        <div class="ps-banner__persen bg-primary">-25%</div>
                                    </div>
                                    <div class="ps-banner__thumnail">
                                        <img class="ps-banner__round" src="{{ asset('assets/img/round2.png') }}"
                                            alt="fond rond" />
                                        <img class="ps-banner__image"
                                            src="{{ asset('assets/img/ads/Copie de Sans titre (1).png') }}"
                                            alt="bactéries cabinet" />
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </section>


                <div class="ps-home__content">
                    <div class="container">
                        <div class="ps-promo ps-not-padding">
                            <div class="row">
                                <div class="col-12 col-md-4">
                                    <div class="ps-promo__item">
                                        <img class="ps-promo__banner"
                                            src="{{ asset('assets/img/ads/Copie de Sans titre (2).png') }}"
                                            alt="Tableau dentaire" />
                                        <div class="ps-promo__content">
                                            <span class="ps-promo__badge">Nouveau</span>
                                            <h4 class="mb-20 ps-promo__name">Une touche <br> d'art pour  <br>votre cabinet</h4>
                                            <a class="ps-promo__btn" href="category-grid.html">Découvrir</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="ps-promo__item">
                                        <img class="ps-promo__banner"
                                            src="{{ asset('assets/img/ads/Design sans titre (5).png') }}"
                                            alt="T-shirt dentiste" />
                                        <div class="ps-promo__content">
                                            <h4 class="ps-promo__name">Portez votre <br> passion </h4>
                                            <div class="ps-promo__sale">-10%</div>
                                            <a class="ps-promo__btn" href="category-grid.html">Acheter maintenant</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 col-md-4">
                                    <div class="ps-promo__item">
                                        <img class="ps-promo__banner"
                                            src="{{ asset('assets/img/ads/Copie de Copie de Sans titre.png') }}"
                                            alt="Tasse autocollant" />
                                        <div class="ps-promo__content">
                                            <span class="ps-promo__badge" style="background-color: red">forte demande</span>
                                            <h4 class="text-white ps-promo__name">Personnalisez <br>votre quotidien
                                            </h4>
                                            <div class="ps-promo__meta">
                                                {{-- <p class="ps-promo__price" style="font-size: 27px">1 190,00 MAD</p>
                                                <p class="ps-promo__del">1 290,00 MAD</p> --}}
                                            </div>
                                            <a class="ps-promo__btn" href="category-grid.html">Acheter maintenant</a>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>

                    <section class="ps-section--category">
                        <h3 class="ps-section__title">Découvrez les catégories les plus populaires</h3>

                        <div class="ps-category--block">
                            <div class="ps-category__thumbnail">
                                <a class="ps-category__image" href="category-grid.html">
                                    <img src="{{ asset('assets/img/ads/Design sans titre (6).png') }}" alt>
                                </a>
                                <div class="ps-category__content">
                                    <a class="ps-category__name" href="category-grid.html">Instruments</a>
                                    <a class="ps-category__more" href="category-grid.html">Voir plus</a>
                                </div>
                            </div>

                            <div class="ps-category__thumbnail">
                                <a class="ps-category__image" href="category-grid.html">
                                    <img src="{{ asset('assets/img/ads/Design sans titre (7).png') }}" alt>
                                </a>
                                <div class="ps-category__content">
                                    <a class="ps-category__name" href="category-grid.html">Fauteuil dentaire</a>
                                    <a class="ps-category__more" href="category-grid.html">Voir plus</a>
                                </div>
                            </div>

                            <div class="ps-category__thumbnail">
                                <a class="ps-category__image" href="category-grid.html">
                                    <img src="{{ asset('assets/img/ads/Design sans titre (8).png') }}" alt>
                                </a>
                                <div class="ps-category__content">
                                    <a class="ps-category__name" href="category-grid.html">Prothèse dentaire</a>
                                    <a class="ps-category__more" href="category-grid.html">Voir plus</a>
                                </div>
                            </div>

                            <div class="ps-category__thumbnail">
                                <a class="ps-category__image" href="category-grid.html">
                                    <img src="{{ asset('assets/img/ads/Design sans titre (9).png') }}" alt>
                                </a>
                                <div class="ps-category__content">
                                    <a class="ps-category__name" href="category-grid.html">Stérilisation</a>
                                    <a class="ps-category__more" href="category-grid.html">Voir plus</a>
                                </div>
                            </div>

                            <div class="ps-category__thumbnail">
                                <a class="ps-category__image" href="category-grid.html">
                                    <img src="{{ asset('assets/img/ads/Design sans titre (10).png') }}" alt>
                                </a>
                                <div class="ps-category__content">
                                    <a class="ps-category__name" href="category-grid.html">X-ray</a>
                                    <a class="ps-category__more" href="category-grid.html">Voir plus</a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <!-- Grande Équipements -->
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="ps-category__nav">
                                    <div class="ps-category__title">Grande Équipements</div>
                                    <ul class="ps-category__list">
                                        <li><a href="category-grid.html">Unité dentaire</a></li>
                                        <li><a href="category-grid.html">Stérilisation</a></li>
                                        <li><a href="category-grid.html">Compresseur / Aspiration</a></li>
                                        <li><a href="category-grid.html">X-Ray</a></li>
                                        <li><a href="category-grid.html">Détartrage / Endo</a></li>
                                        <li><a href="category-grid.html">Scanner 3D</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Consommables -->
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="ps-category__nav">
                                    <div class="ps-category__title">Consommables</div>
                                    <ul class="ps-category__list">
                                        <li><a href="category-grid.html">Rotatifs</a></li>
                                        <li><a href="category-grid.html">Usage unique</a></li>
                                        <li><a href="category-grid.html">Restauration</a></li>
                                        <li><a href="category-grid.html">Fraises & Polissage</a></li>
                                        <li><a href="category-grid.html">Hygiène & Désinfection</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Accessoires -->
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="ps-category__nav">
                                    <div class="ps-category__title">Accessoires</div>
                                    <ul class="ps-category__list">
                                        <li><a href="category-grid.html">Bacs & Supports</a></li>
                                        <li><a href="category-grid.html">Alimentation</a></li>
                                        <li><a href="category-grid.html">Pièces diverses</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Prothèse Dentaire -->
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="ps-category__nav">
                                    <div class="ps-category__title">Prothèse Dentaire</div>
                                    <ul class="ps-category__list">
                                        <li><a href="category-grid.html">Machines</a></li>
                                        <li><a href="category-grid.html">Pièces de rechange</a></li>
                                        <li><a href="category-grid.html">Consommables</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Décoration -->
                            <div class="col-6 col-md-4 col-lg-2">
                                <div class="ps-category__nav">
                                    <div class="ps-category__title">Décoration</div>
                                    <ul class="ps-category__list">
                                        <li><a href="category-grid.html">Tableaux dentaires</a></li>
                                        <li><a href="category-grid.html">Objets décoratifs</a></li>
                                        <li><a href="category-grid.html">Stickers</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </section>

                    <style>
                        .ps-section--category {
                            margin-left: auto;
                            margin-right: auto;
                            max-width: 1140px;
                        }
                    </style>
                </div>
                <section class="ps-section--latest">
                    <div class="container">
                        <h3 class="ps-section__title">Derniers produits</h3>
                        <div class="ps-section__carousel">
                            <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000"
                                data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5"
                                data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5"
                                data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">

                                @foreach ($products as $product)
                                    <div class="ps-section__product">
                                        <div class="ps-product ps-product--standard">
                                            <div class="ps-product__thumbnail">
                                                <a class="ps-product__image"
                                                    href="{{ route('product.show', $product->slug) }}">
                                                    <figure>
                                                        @php
                                                            $main =
                                                                $product->getFirstMediaUrl('main_image') ?:
                                                                asset('img/default-product.jpg');
                                                            $secondary = optional(
                                                                $product->getMedia('gallery')->first(),
                                                            )->getUrl();
                                                        @endphp
                                                        <img src="{{ $main }}" alt="{{ $product->name }}" />
                                                        @if ($secondary)
                                                            <img src="{{ $secondary }}" alt="{{ $product->name }}" />
                                                        @endif
                                                    </figure>
                                                </a>

                                                <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Wishlist">
                                                        <a href="javascript:void(0)" class="btn-wishlist"
                                                            data-id="{{ $product->id }}"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Aperçu rapide">
                                                        <a href="javascript:void(0)" class="btn-quickview"
                                                            data-id="{{ $product->id }}">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>

                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Ajouter au panier">
                                                        <a href="javascript:void(0)" class="btn-cart"
                                                            data-id="{{ $product->id }}"><i
                                                                class="fa fa-shopping-basket"></i></a>
                                                    </div>
                                                </div>

                                                <div class="ps-product__badge">
                                                    @if ($product->is_occasion)
                                                        <div class="ps-badge ps-badge--sale">Occasion</div>
                                                    @endif
                                                    @if ($product->is_hot)
                                                        <div class="ps-badge ps-badge--hot">Populaire</div>
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
                                                    <span
                                                        class="ps-product__price sale">{{ number_format($product->price, 2) }}
                                                        MAD</span>
                                                    @if ($product->old_price)
                                                        <span
                                                            class="ps-product__del">{{ number_format($product->old_price, 2) }}
                                                            MAD</span>
                                                    @endif
                                                </div>

                                                @if ($product->characteristics && $product->characteristics->count())
                                                    <div class="ps-product__desc">
                                                        <ul class="ps-product__list">
                                                            @foreach ($product->characteristics->take(3) as $char)
                                                                <li>{{ $char->attribute_name }} : {{ $char->value }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <div class="ps-product__actions ps-product__group-mobile">
                                                    <div class="ps-product__quantity">
                                                        <div class="def-number-input number-input safari_only">
                                                            <button class="minus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown(); return false;"><i
                                                                    class="icon-minus"></i></button>
                                                            <input class="quantity" min="1" name="quantity"
                                                                value="1" type="number" />
                                                            <button class="plus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp(); return false;"><i
                                                                    class="icon-plus"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-product__cart">
                                                        <a class="ps-btn ps-btn--warning btn-cart"
                                                            href="javascript:void(0)"
                                                            data-id="{{ $product->id }}">Ajouter au panier</a>
                                                    </div>
                                                    <div class="ps-product__item cart" data-toggle="tooltip"
                                                        data-placement="left" title="Ajouter au panier">
                                                        <a href="javascript:void(0)" class="btn-cart"
                                                            data-id="{{ $product->id }}"><i
                                                                class="fa fa-shopping-basket"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Wishlist">
                                                        <a href="javascript:void(0)" class="btn-wishlist"
                                                            data-id="{{ $product->id }}"><i
                                                                class="fa fa-heart-o"></i></a>
                                                    </div>
                                                    {{-- 🔴 Comparaison supprimée --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </section>

                <div class="container">
                    <div class="ps-delivery" data-background="{{ asset('assets/img/ads/banner-delivery-2.jpg') }}">
                        <div class="ps-delivery__content">
                            <div class="ps-delivery__text">
                                <i class="icon-shield-check"></i>
                                <span><strong>Livraison 100 % sécurisée</strong> offerte à partir de 1000 MAD
                                    d'achat</span>
                            </div>
                            <a class="ps-delivery__more" href="#">En savoir plus</a>
                        </div>
                    </div>

                    <section class="ps-section--deals">
                        <div class="ps-section__header">
                            <h3 class="ps-section__title">Meilleures offres de la semaine !</h3>
                            <div class="ps-countdown">
                                <div class="ps-countdown__content">
                                    <div class="ps-countdown__block ps-countdown__days">
                                        <div class="ps-countdown__number"><span class="first-1st">0</span><span
                                                class="first">0</span><span class="last">0</span></div>
                                        <div class="ps-countdown__ref">Jours</div>
                                    </div>
                                    <div class="ps-countdown__block ps-countdown__hours">
                                        <div class="ps-countdown__number"><span class="first">0</span><span
                                                class="last">0</span></div>
                                        <div class="ps-countdown__ref">Heures</div>
                                    </div>
                                    <div class="ps-countdown__block ps-countdown__minutes">
                                        <div class="ps-countdown__number"><span class="first">0</span><span
                                                class="last">0</span></div>
                                        <div class="ps-countdown__ref">Minutes</div>
                                    </div>
                                    <div class="ps-countdown__block ps-countdown__seconds">
                                        <div class="ps-countdown__number"><span class="first">0</span><span
                                                class="last">0</span></div>
                                        <div class="ps-countdown__ref">Secondes</div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="ps-section__carousel">
                            <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000"
                                data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5"
                                data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5"
                                data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">

                                @foreach ($bestDeals as $product)
                                    <div class="ps-section__product">
                                        <div class="ps-product ps-product--standard">
                                            <div class="ps-product__thumbnail">
                                                <a class="ps-product__image"
                                                    href="{{ route('product.show', $product->slug) }}">
                                                    <figure>
                                                        <img src="{{ $product->getFirstMediaUrl('main_image') ?: asset('img/placeholder.png') }}"
                                                            alt="{{ $product->name }}">
                                                        @if ($product->getMedia('gallery')->first())
                                                            <img src="{{ $product->getMedia('gallery')->first()->getUrl() }}"
                                                                alt="{{ $product->name }}">
                                                        @endif
                                                    </figure>
                                                </a>

                                                <div class="ps-product__actions">
                                                    <div class="ps-product__item" data-toggle="tooltip" title="Wishlist">
                                                        <a href="javascript:void(0)"
                                                            class="btn-wishlist {{ in_array($product->id, session('wishlist', [])) ? 'active' : '' }}"
                                                            data-id="{{ $product->id }}">
                                                            <i
                                                                class="fa fa-heart{{ in_array($product->id, session('wishlist', [])) ? '' : '-o' }}"></i>
                                                        </a>
                                                    </div>

                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        data-placement="left" title="Aperçu rapide">
                                                        <a href="javascript:void(0)" class="btn-quickview"
                                                            data-id="{{ $product->id }}">
                                                            <i class="fa fa-search"></i>
                                                        </a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip"
                                                        title="Ajouter au panier">
                                                        <a href="javascript:void(0)" class="btn-cart"
                                                            data-id="{{ $product->id }}">
                                                            <i class="fa fa-shopping-basket"></i>
                                                        </a>
                                                    </div>
                                                </div>

                                                @if ($product->discount_percentage)
                                                    <div class="ps-product__percent">
                                                        -{{ $product->discount_percentage }}%</div>
                                                @endif
                                            </div>

                                            <div class="ps-product__content">
                                                <h5 class="ps-product__title">
                                                    <a href="{{ route('product.show', $product->slug) }}">
                                                        {{ \Illuminate\Support\Str::limit($product->title, 70) }}
                                                    </a>
                                                </h5>

                                                <div class="ps-product__meta">
                                                    <span
                                                        class="ps-product__price sale">{{ number_format($product->price, 2) }}
                                                        MAD</span>
                                                    @if ($product->old_price)
                                                        <span
                                                            class="ps-product__del">{{ number_format($product->old_price, 2) }}
                                                            MAD</span>
                                                    @endif
                                                </div>

                                                <div class="ps-product__footer">Stock disponible
                                                    <span>{{ rand(2, 20) }}</span>
                                                </div>

                                                @if ($product->characteristics && $product->characteristics->count())
                                                    <div class="ps-product__desc">
                                                        <ul class="ps-product__list">
                                                            @foreach ($product->characteristics->take(3) as $char)
                                                                <li>{{ $char->attribute_name }} : {{ $char->value }}
                                                                </li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif

                                                <div class="ps-product__actions ps-product__group-mobile">
                                                    <div class="ps-product__quantity">
                                                        <div class="def-number-input number-input safari_only">
                                                            <button class="minus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepDown(); return false;"><i
                                                                    class="icon-minus"></i></button>
                                                            <input class="quantity" min="1" name="quantity"
                                                                value="1" type="number" />
                                                            <button class="plus"
                                                                onclick="this.parentNode.querySelector('input[type=number]').stepUp(); return false;"><i
                                                                    class="icon-plus"></i></button>
                                                        </div>
                                                    </div>
                                                    <div class="ps-product__cart">
                                                        <a href="javascript:void(0)"
                                                            class="ps-btn ps-btn--warning btn-cart"
                                                            data-id="{{ $product->id }}">Ajouter au panier</a>
                                                    </div>
                                                    <div class="ps-product__item cart" data-toggle="tooltip"
                                                        title="Ajouter au panier">
                                                        <a href="javascript:void(0)" class="btn-cart"
                                                            data-id="{{ $product->id }}"><i
                                                                class="fa fa-shopping-basket"></i></a>
                                                    </div>
                                                    <div class="ps-product__item" data-toggle="tooltip" title="Wishlist">
                                                        <a href="javascript:void(0)"
                                                            class="btn-wishlist {{ in_array($product->id, session('wishlist', [])) ? 'active' : '' }}"
                                                            data-id="{{ $product->id }}">
                                                            <i
                                                                class="fa fa-heart{{ in_array($product->id, session('wishlist', [])) ? '' : '-o' }}"></i>
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </section>

                    <section class="ps-section--sellers">
                        <h3 class="ps-section__title">Top 5 des meilleures ventes :</h3>
                        <div class="ps-section__tab">
                            <ul class="nav nav-tabs" id="bestsellerTab" role="tablist">
                                @foreach ($categories->take(3) as $category)
                                    <li class="nav-item" role="presentation">
                                        <a class="nav-link {{ $loop->first ? 'active' : '' }}"
                                            id="{{ Str::slug($category->name) }}-tab" data-toggle="tab"
                                            href="#{{ Str::slug($category->name) }}" role="tab"
                                            aria-controls="{{ Str::slug($category->name) }}"
                                            aria-selected="{{ $loop->first ? 'true' : 'false' }}">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>

                            <div class="tab-content" id="bestsellerTabContent">
                                @foreach ($categories->take(3) as $category)
                                    <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}"
                                        id="{{ Str::slug($category->name) }}" role="tabpanel"
                                        aria-labelledby="{{ Str::slug($category->name) }}-tab">

                                        @php
                                            // Fetch the products once
                                            $productsForCategory = $category->allProducts()->take(5)->get();
                                            // Determine if the carousel should loop
                                            $loopEnabled = $productsForCategory->count() > 1;
                                        @endphp

                                        {{-- The carousel div is always present to keep the CSS, but its behavior is controlled --}}
                                        <div class="owl-carousel" data-owl-auto="false"
                                            data-owl-loop="{{ $loopEnabled ? 'true' : 'false' }}" data-owl-speed="13000"
                                            data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5"
                                            data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3"
                                            data-owl-item-lg="5" data-owl-item-xl="5" data-owl-duration="1000"
                                            data-owl-mousedrag="on">

                                            @foreach ($productsForCategory as $product)
                                                <div class="ps-section__product">
                                                    <div class="ps-product ps-product--standard">
                                                        <div class="ps-product__thumbnail">
                                                            <a class="ps-product__image"
                                                                href="{{ route('product.show', $product->slug) }}">
                                                                <figure>
                                                                    <img src="{{ $product->getFirstMediaUrl('main_image') ?: asset('img/default-product.jpg') }}"
                                                                        alt="{{ $product->name ?? 'Produit' }}" />
                                                                    @if ($product->getMedia('gallery')->first())
                                                                        <img src="{{ $product->getMedia('gallery')->first()->getUrl() }}"
                                                                            alt="{{ $product->name }}" />
                                                                    @endif
                                                                </figure>
                                                            </a>
                                                            <div class="ps-product__badge">
                                                                @if ($product->price < $product->old_price)
                                                                    <div class="ps-badge ps-badge--sale">Occasion</div>
                                                                @endif
                                                                @if ($product->is_hot)
                                                                    <div class="ps-badge ps-badge--hot">Hot</div>
                                                                @endif
                                                            </div>
                                                            <div class="ps-product__actions">
                                                                <div class="ps-product__item" data-toggle="tooltip"
                                                                    data-placement="left" title="Wishlist">
                                                                    <a href="javascript:void(0)" class="btn-wishlist"
                                                                        data-id="{{ $product->id }}"><i
                                                                            class="fa fa-heart-o"></i></a>
                                                                </div>
                                                                <div class="ps-product__item" data-toggle="tooltip"
                                                                    data-placement="left" title="Aperçu rapide">
                                                                    <a href="javascript:void(0)" class="btn-quickview"
                                                                        data-id="{{ $product->id }}">
                                                                        <i class="fa fa-search"></i>
                                                                    </a>
                                                                </div>

                                                                <div class="ps-product__item" data-toggle="tooltip"
                                                                    data-placement="left" title="Ajouter au panier">
                                                                    <a href="javascript:void(0)" class="btn-cart"
                                                                        data-id="{{ $product->id }}"><i
                                                                            class="fa fa-shopping-basket"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="ps-product__content">
                                                            <h5 class="ps-product__title">
                                                                <a href="{{ route('product.show', $product->slug) }}">
                                                                    {{ \Illuminate\Support\Str::limit($product->title, 70) }}
                                                                </a>
                                                            </h5>
                                                            <div class="ps-product__meta">
                                                                <span class="ps-product__price sale">
                                                                    {{ number_format($product->price, 2) }} MAD
                                                                </span>
                                                                @if ($product->old_price)
                                                                    <span class="ps-product__del">
                                                                        {{ number_format($product->old_price, 2) }} MAD
                                                                    </span>
                                                                @endif
                                                            </div>

                                                            @if ($product->characteristics && $product->characteristics->count())
                                                                <div class="ps-product__desc">
                                                                    <ul class="ps-product__list">
                                                                        @foreach ($product->characteristics->take(3) as $char)
                                                                            <li>{{ $char->attribute_name }} :
                                                                                {{ $char->value }}</li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                            @endif

                                                            <div class="ps-product__actions ps-product__group-mobile">
                                                                <div class="ps-product__quantity">
                                                                    <div class="def-number-input number-input safari_only">
                                                                        <button class="minus"
                                                                            onclick="this.parentNode.querySelector('input[type=number]').stepDown(); return false;"><i
                                                                                class="icon-minus"></i></button>
                                                                        <input class="quantity" min="1"
                                                                            name="quantity" value="1"
                                                                            type="number" />
                                                                        <button class="plus"
                                                                            onclick="this.parentNode.querySelector('input[type=number]').stepUp(); return false;"><i
                                                                                class="icon-plus"></i></button>
                                                                    </div>
                                                                </div>

                                                                <div class="ps-product__cart">
                                                                    <a href="javascript:void(0)"
                                                                        class="ps-btn ps-btn--warning btn-cart"
                                                                        data-id="{{ $product->id }}">Ajouter au
                                                                        panier</a>
                                                                </div>

                                                                <div class="ps-product__item cart" data-toggle="tooltip"
                                                                    data-placement="left" title="Ajouter au panier">
                                                                    <a href="javascript:void(0)" class="btn-cart"
                                                                        data-id="{{ $product->id }}">
                                                                        <i class="fa fa-shopping-basket"></i>
                                                                    </a>
                                                                </div>

                                                                <div class="ps-product__item" data-toggle="tooltip"
                                                                    data-placement="left" title="Favoris">
                                                                    <a href="javascript:void(0)"
                                                                        class="btn-wishlist {{ in_array($product->id, session('wishlist', [])) ? 'active' : '' }}"
                                                                        data-id="{{ $product->id }}">
                                                                        <i
                                                                            class="fa fa-heart{{ in_array($product->id, session('wishlist', [])) ? '' : '-o' }}"></i>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </section>


                    <div class="ps-promo">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="ps-promo__item">
                                    <img class="ps-promo__banner" src="{{ asset('assets/img/ads/Design sans titre (11).png') }}"
                                        alt="alt" />
                                    <div class="ps-promo__content">
                                        <span class="ps-promo__badge">Nouveau</span>
                                        <h4 class="mb-20 ps-promo__name">Éliminez les bactéries<br />de votre cabinet
                                        </h4>
                                        <a class="ps-promo__btn" href="category-grid.html">Découvrir</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="ps-promo__item">
                                    <img class="ps-promo__banner" src="{{ asset('assets/img/ads/bg-banner5.jpg') }}"
                                        alt="alt" />
                                    <div class="ps-promo__content">
                                        <h4 class="ps-promo__name">Kit de blanchiment<br />Candid</h4>
                                        <div class="ps-promo__sale">-10%</div>
                                        <a class="ps-promo__btn" href="category-grid.html">Acheter maintenant</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <section class="ps-section--featured">
                        <h3 class="ps-section__title">Produits en vedette</h3>
                        <div class="ps-section__content">
                            <div class="row m-0">
                                @foreach ($featuredProducts as $product)
                                    <div class="col-6 col-md-4 col-lg-2dot4 p-0">
                                        <div class="ps-section__product">
                                            <div class="ps-product ps-product--standard">
                                                <div class="ps-product__thumbnail">
                                                    <a class="ps-product__image"
                                                        href="{{ route('product.show', $product->slug) }}">
                                                        <figure>
                                                            <img src="{{ $product->getFirstMediaUrl('main_image') ?: asset('img/default-product.jpg') }}"
                                                                alt="{{ $product->name }}" />
                                                            @if ($product->getMedia('gallery')->first())
                                                                <img src="{{ $product->getMedia('gallery')->first()->getUrl() }}"
                                                                    alt="{{ $product->name }}" />
                                                            @endif
                                                        </figure>
                                                    </a>

                                                    <div class="ps-product__actions">
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            title="Ajouter aux favoris">
                                                            <a href="javascript:void(0)"
                                                                class="btn-wishlist {{ in_array($product->id, session('wishlist', [])) ? 'active' : '' }}"
                                                                data-id="{{ $product->id }}">
                                                                <i
                                                                    class="fa fa-heart{{ in_array($product->id, session('wishlist', [])) ? '' : '-o' }}"></i>
                                                            </a>
                                                        </div>

                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            data-placement="left" title="Aperçu rapide">
                                                            <a href="javascript:void(0)" class="btn-quickview"
                                                                data-id="{{ $product->id }}">
                                                                <i class="fa fa-search"></i>
                                                            </a>
                                                        </div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            title="Ajouter au panier">
                                                            <a href="javascript:void(0)" class="btn-cart"
                                                                data-id="{{ $product->id }}">
                                                                <i class="fa fa-shopping-basket"></i>
                                                            </a>
                                                        </div>
                                                    </div>

                                                    {{-- ✅ Badges --}}
                                                    <div class="ps-product__badge">
                                                        @if ($product->is_occasion)
                                                            <div class="ps-badge ps-badge--sale">Occasion</div>
                                                        @endif
                                                        @if ($product->is_hot)
                                                            <div class="ps-badge ps-badge--hot">Populaire</div>
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
                                                        <span class="ps-product__price sale">
                                                            {{ number_format($product->price, 2) }} MAD
                                                        </span>
                                                        @if ($product->old_price)
                                                            <span class="ps-product__del">
                                                                {{ number_format($product->old_price, 2) }} MAD
                                                            </span>
                                                        @endif
                                                    </div>

                                                    @if ($product->characteristics->count())
                                                        <div class="ps-product__desc">
                                                            <ul class="ps-product__list">
                                                                @foreach ($product->characteristics->take(3) as $char)
                                                                    <li>{{ $char->attribute_name }} :
                                                                        {{ $char->value }}</li>
                                                                @endforeach
                                                            </ul>
                                                        </div>
                                                    @endif

                                                    <div class="ps-product__actions ps-product__group-mobile">
                                                        <div class="ps-product__quantity">
                                                            <div class="def-number-input number-input safari_only">
                                                                <button class="minus"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepDown(); return false;"><i
                                                                        class="icon-minus"></i></button>
                                                                <input class="quantity" min="1" name="quantity"
                                                                    value="1" type="number" />
                                                                <button class="plus"
                                                                    onclick="this.parentNode.querySelector('input[type=number]').stepUp(); return false;"><i
                                                                        class="icon-plus"></i></button>
                                                            </div>
                                                        </div>
                                                        <div class="ps-product__cart">
                                                            <a class="ps-btn ps-btn--warning btn-cart"
                                                                href="javascript:void(0)" data-id="{{ $product->id }}">
                                                                Ajouter au panier
                                                            </a>
                                                        </div>
                                                        <div class="ps-product__item cart" data-toggle="tooltip"
                                                            title="Ajouter au panier">
                                                            <a href="javascript:void(0)" class="btn-cart"
                                                                data-id="{{ $product->id }}">
                                                                <i class="fa fa-shopping-basket"></i>
                                                            </a>
                                                        </div>
                                                        <div class="ps-product__item" data-toggle="tooltip"
                                                            title="Favoris">
                                                            <a href="javascript:void(0)"
                                                                class="btn-wishlist {{ in_array($product->id, session('wishlist', [])) ? 'active' : '' }}"
                                                                data-id="{{ $product->id }}">
                                                                <i
                                                                    class="fa fa-heart{{ in_array($product->id, session('wishlist', [])) ? '' : '-o' }}"></i>
                                                            </a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <div class="ps-shop__more"><a href="#">Voir tous les produits</a></div>
                        </div>
                    </section>

                </div>
                <section class="ps-section--reviews" data-background="{{ asset('assets/img/roundbg.png') }}">
                    <h3 class="ps-section__title">
                        <img src="{{ asset('assets/img/quote-icon.png') }}" alt> Avis récents
                    </h3>
                    <div class="ps-section__content">
                        <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000"
                            data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5"
                            data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="3" data-owl-item-lg="5"
                            data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">

                            <div class="ps-review">
                                <div class="ps-review__text">Il y avait une petite erreur dans la commande. En retour,
                                    j'ai reçu la bonne commande et j'ai pu garder l'autre gratuitement.</div>
                                <div class="ps-review__name">Yasmine El Amrani</div>
                                <div class="ps-review__review">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ps-review">
                                <div class="ps-review__text">J'ai passé commande vendredi soir et lundi à midi le colis
                                    était chez moi. Service très rapide de DentalPro, merci !</div>
                                <div class="ps-review__name">Ahmed Benhaddou</div>
                                <div class="ps-review__review">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ps-review">
                                <div class="ps-review__text">Livraison express ! Je suis impressionnée par la rapidité
                                    et la qualité des outils dentaires reçus.</div>
                                <div class="ps-review__name">Fatima Zahra Idrissi</div>
                                <div class="ps-review__review">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ps-review">
                                <div class="ps-review__text">Tout est parfait. Je recommande vivement DentalPro à mes
                                    collègues dentistes.</div>
                                <div class="ps-review__name">Dr. Rachid El Fassi</div>
                                <div class="ps-review__review">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ps-review">
                                <div class="ps-review__text">Ma première commande chez DentalPro, et sûrement pas la
                                    dernière ! Très satisfait.</div>
                                <div class="ps-review__name">Omar Belkacem</div>
                                <div class="ps-review__review">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>

                            <div class="ps-review">
                                <div class="ps-review__text">Des produits de qualité, une livraison rapide et un
                                    service client réactif. Merci DentalPro !</div>
                                <div class="ps-review__name">Soukaina Meziane</div>
                                <div class="ps-review__review">
                                    <select class="ps-rating" data-read-only="true">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4" selected="selected">4</option>
                                        <option value="5">5</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>


                <div class="container">
                    <section class="ps-section--instagram">
                        <h3 class="ps-section__title">Suivez <strong>@DentalPro </strong>sur Instagram</h3>
                        <div class="ps-section__content">
                            <div class="row m-0">
                                <div class="col-6 col-md-4 col-lg-2">
                                    <a class="ps-image--transition" href="https://www.instagram.com/zs.dentaire/">
                                        <img src="{{ asset('assets/img/ig/ig1.webp') }}" alt>
                                        <span class="ps-image__overlay"><i class="fa fa-instagram"></i></span>
                                    </a>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <a class="ps-image--transition" href="https://www.instagram.com/zs.dentaire/">
                                        <img src="{{ asset('assets/img/ig/2.webp') }}" alt>
                                        <span class="ps-image__overlay"><i class="fa fa-instagram"></i></span>
                                    </a>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <a class="ps-image--transition" href="https://www.instagram.com/zs.dentaire/">
                                        <img src="{{ asset('assets/img/ig/3.webp') }}" alt>
                                        <span class="ps-image__overlay"><i class="fa fa-instagram"></i></span>
                                    </a>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <a class="ps-image--transition" href="https://www.instagram.com/zs.dentaire/">
                                        <img src="{{ asset('assets/img/ig/4.webp') }}" alt>
                                        <span class="ps-image__overlay"><i class="fa fa-instagram"></i></span>
                                    </a>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <a class="ps-image--transition" href="https://www.instagram.com/zs.dentaire/">
                                        <img src="{{ asset('assets/img/ig/5.webp') }}" alt>
                                        <span class="ps-image__overlay"><i class="fa fa-instagram"></i></span>
                                    </a>
                                </div>
                                <div class="col-6 col-md-4 col-lg-2">
                                    <a class="ps-image--transition" href="https://www.instagram.com/zs.dentaire/">
                                        <img src="{{ asset('assets/img/ig/6.webp') }}" alt>
                                        <span class="ps-image__overlay"><i class="fa fa-instagram"></i></span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </section>

                    <section class="ps-section--newsletter"
                        data-background="{{ asset('assets/img/newsletter-bg.jpg') }}">
                        <h3 class="ps-section__title">
                            Inscrivez-vous à notre newsletter et recevez <br>
                            <span style="color:#ff9900;">30 DH</span> de réduction sur votre première commande<br>
                            (dès 300 DH d'achat)
                        </h3>
                        <div class="ps-section__content">
                            <form action="{{ route('newsletter.subscribe') }}" method="POST">
                                @csrf
                                <div class="ps-form--subscribe">
                                    <div class="ps-form__control">
                                        <input class="form-control ps-input" type="email" name="email"
                                            placeholder="Entrez votre adresse e-mail" required>
                                        <button type="submit" class="ps-btn ps-btn--warning">S’inscrire</button>
                                    </div>
                                </div>
                            </form>

                            {{-- ✅ Message succès --}}
                            @if (session('success'))
                                <div class="alert alert-success mt-3">
                                    {{ session('success') }}
                                </div>
                            @endif

                            {{-- ⚠️ Message erreur --}}
                            @error('email')
                                <div class="alert alert-danger mt-3">{{ $message }}</div>
                            @enderror
                        </div>
                    </section>

                </div>

            </div>
        </div>

    @endsection
</body>
