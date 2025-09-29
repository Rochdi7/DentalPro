<header class="ps-header ps-header--1">
    <div class="ps-noti ps-noti--animated">
        <div class="container text-center">
            <p class="m-0">
                🚚 Livraison gratuite à partir de <strong>1000 MAD</strong> d'achat.
            </p>
        </div>
        <a class="ps-noti__close"><i class="icon-cross"></i></a>
    </div>
    <style>
        .ps-noti--animated {
            animation: slideDown 0.8s ease-out;
        }

        /* Petite pulsation du texte */
        .ps-noti--animated p {
            animation: pulse 2.5s infinite;
        }

        @keyframes slideDown {
            from {
                transform: translateY(-100%);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes pulse {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: 0.7;
            }
        }
    </style>
    <div class="ps-header__top">
        <div class="container">
            <div class="ps-header__text">
                Besoin d’aide ? <strong><a href="tel:+212702785190">+212 702‑785190</a></strong>
            </div>
        </div>
    </div>
    <div class="ps-header__middle">
        <div class="container">
            <div class="ps-logo">
                <a href="{{ route('frontoffice.home') }}">
                    <img src="{{ asset('assets/img/logo/logo.webp') }}" alt="DentalPro Logo" class="main-logo">
                    <img src="{{ asset('assets/img/logo/logo.webp') }}" alt="Sticky Logo" class="sticky-logo">
                </a>
            </div>
            <a class="ps-menu--sticky" href="#"><i class="fa fa-bars"></i></a>

            <div class="ps-header__right">
                <ul class="ps-header__icons">
                    <li>
                        <a class="ps-header__item open-search" href="#"><i class="icon-magnifier"></i></a>
                    </li>

                    <!-- Wishlist -->
                    <li>
                        <a class="ps-header__item" href="{{ route('wishlist.index') }}">
                            <i class="fa fa-heart-o"></i>
                            <span
                                class="badge wishlist-count">{{ session('wishlist') ? count(session('wishlist')) : 0 }}</span>
                        </a>
                    </li>

                    <!-- Cart -->
                    <li>
                        <!-- Cart trigger -->
                        <a class="ps-header__item" href="#" id="cart-mini"
                            data-mini-url="{{ route('cart.mini.html') }}" data-add-url="{{ route('cart.add') }}"
                            data-remove-url="{{ route('cart.remove') }}" data-csrf="{{ csrf_token() }}">
                            <i class="icon-cart-empty"></i>
                            @php
                                $cart = session('cart', []);
                                $cartQty = collect($cart)->sum('quantity');
                            @endphp
                            <span class="badge cart-count">{{ $cartQty }}</span>
                        </a>

                        <div class="ps-cart--mini" id="mini-cart">
                            @php $total = 0; @endphp
                            <ul class="ps-cart__items" id="mini-cart-items">
                                @if (!empty($cart))
                                    @foreach ($cart as $item)
                                        @php
                                            $product = \App\Models\Product::find($item['product_id']);
                                            if ($product) {
                                                $total += $product->price * ($item['quantity'] ?? 1);
                                            }
                                        @endphp

                                        @if ($product)
                                            @include('frontoffice.partials.mini_cart_item', [
                                                'product' => $product,
                                                'item' => $item,
                                            ])
                                        @endif
                                    @endforeach
                                @else
                                    <li class="ps-cart__item text-center">
                                        <span>Votre panier est vide.</span>
                                    </li>
                                @endif
                            </ul>

                            <div class="ps-cart__total">
                                <span>Sous-total </span>
                                <span class="cart-total">{{ number_format($total, 2) }} DH</span>
                            </div>

                            <div class="ps-cart__footer">
                                <a class="ps-btn ps-btn--outline" href="{{ route('cart.index') }}">Voir le panier</a>
                                <a class="ps-btn ps-btn--warning" href="{{ route('checkout.index') }}">Commander</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <script>
                    document.addEventListener('DOMContentLoaded', function() {
                        const cartTrigger = document.getElementById('cart-mini');
                        const miniCart = document.getElementById('mini-cart');
                        let timeout;

                        function openCart() {
                            miniCart.classList.add('open');
                        }

                        function closeCart() {
                            miniCart.classList.remove('open');
                        }

                        cartTrigger.addEventListener('mouseenter', () => {
                            clearTimeout(timeout);
                            openCart();
                        });

                        cartTrigger.addEventListener('mouseleave', () => {
                            timeout = setTimeout(() => {
                                closeCart();
                            }, 200); // délai pour éviter le glitch
                        });

                        miniCart.addEventListener('mouseenter', () => {
                            clearTimeout(timeout); // garde ouvert si souris sur mini-cart
                            openCart();
                        });

                        miniCart.addEventListener('mouseleave', () => {
                            timeout = setTimeout(() => {
                                closeCart();
                            }, 200);
                        });
                    });
                </script>
                <style>
                    #mini-cart {
                        display: none;
                        position: absolute;
                        /* déjà dans le thème normalement */
                        top: 100%;
                        right: 0;
                        z-index: 9999;
                    }

                    #mini-cart.open {
                        display: block;
                    }
                </style>

                <div class="ps-header__search">
                    <form action="{{ route('frontoffice.search') }}" method="GET">
                        <div class="ps-search-table">
                            <div class="input-group">
                                <input class="form-control ps-input" type="text" name="q"
                                    placeholder="Rechercher des produits" value="{{ request('q') }}">

                                <div class="input-group-append">
                                    <a href="#" onclick="this.closest('form').submit(); return false;">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </form>



                    <div class="ps-search--result">
                        <div class="ps-result__content">
                            <div class="row m-0"></div>
                            <div class="ps-result__viewall d-none">
                                <a href="{{ route('products.index') }}">Voir tous les résultats</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
    <div class="ps-navigation">
        <div class="container">
            <div class="ps-navigation__left">
                <nav class="ps-main-menu">
                    <ul class="menu">
                        <li class="fa fa-bars has-mega-menu">
                            <a href="{{ route('frontoffice.home') }}">Accueil</a>
                        </li>
                        <li class="has-mega-menu">
                            <a href="{{ route('about') }}">À propos</a>
                        </li>

                        <li class="has-mega-menu">
                            <a href="{{ route('products.index') }}">
                                Catégories
                                <span class="sub-toggle">
                                    <i class="fa fa-chevron-down"></i>
                                </span>
                            </a>

                            <div class="mega-menu">
                                <div class="container">
                                    <div class="mega-menu__row">

                                        <div class="mega-menu__column">
                                            <h4>Grande Équipements</h4>
                                            <ul class="sub-menu--mega">
                                                <li><a href="#">Unité dentaire</a></li>
                                                <li><a href="#">Stérilisation</a></li>
                                                <li><a href="#">Compresseur / Aspiration</a></li>
                                                <li><a href="#">X-Ray</a></li>
                                                <li><a href="#">Détartrage / Endo</a></li>
                                                <li><a href="#">Scanner 3D</a></li>
                                            </ul>
                                        </div>

                                        <div class="mega-menu__column">
                                            <h4>Consommables</h4>
                                            <ul class="sub-menu--mega">
                                                <li><a href="http://127.0.0.1:8000/produits?category=rotatifs">Rotatifs</a></li>
                                                <li><a href="#">Usage unique</a></li>
                                                <li><a href="#">Restauration</a></li>
                                                <li><a href="#">Fraises et Polissage</a></li>
                                                <li><a href="#">Hygiène et Désinfection</a></li>
                                            </ul>
                                        </div>

                                        <div class="mega-menu__column">
                                            <h4>Accessoires</h4>
                                            <ul class="sub-menu--mega">
                                                <li><a href="#">Bacs et Supports</a></li>
                                                <li><a href="#">Alimentation</a></li>
                                                <li><a href="#">Pièces diverses</a></li>
                                            </ul>
                                        </div>

                                        <div class="mega-menu__column">
                                            <h4>Prothèse Dentaire</h4>
                                            <ul class="sub-menu--mega">
                                                <li><a href="#">Machines</a></li>
                                                <li><a href="#">Pièces de rechange</a></li>
                                                <li><a href="#">Consommables</a></li>
                                            </ul>
                                        </div>

                                        <div class="mega-menu__column">
                                            <h4>Décoration</h4>
                                            <ul class="sub-menu--mega">
                                                <li><a href="#">Tableaux dentaires</a></li>
                                                <li><a href="#">Objets décoratifs</a></li>
                                                <li><a href="#">Stickers</a></li>
                                            </ul>
                                        </div>

                                    </div>

                                    <div class="ps-branch">
                                        <h3 class="ps-branch__title">Nos Marques</h3>
                                        <div class="ps-branch__box">
                                            <div class="ps-branch__item">
                                                <a href="#"><img
                                                        src="{{ asset('assets/img/partners/acteonlogo.png') }}"
                                                        alt="Acteon" /></a>
                                            </div>
                                            <div class="ps-branch__item">
                                                <a href="#"><img
                                                        src="{{ asset('assets/img/partners/3mespelogo.png') }}"
                                                        alt="3M ESPE" /></a>
                                            </div>
                                            <div class="ps-branch__item">
                                                <a href="#"><img
                                                        src="{{ asset('assets/img/partners/anyelogo.png') }}"
                                                        alt="Anye" /></a>
                                            </div>
                                            <div class="ps-branch__item">
                                                <a href="#"><img
                                                        src="{{ asset('assets/img/partners/belmontlogo.png') }}"
                                                        alt="Belmont" /></a>
                                            </div>
                                            <div class="ps-branch__item">
                                                <a href="#"><img
                                                        src="{{ asset('assets/img/partners/woodpeckerlogo.png') }}"
                                                        alt="Woodpecker" /></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="has-mega-menu">
                            <a href="{{ route('products.index') }}">
                                Promotions
                                <span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                            </a>
                            <div class="mega-menu">
                                <div class="container">
                                    <div class="mega-menu__row">

                                        <!-- Liste rapide des promos -->
                                        <div class="mega-menu__column col-12 col-sm-3">
                                            <ul class="sub-menu--mega sub-menu--bold">
                                                <li><a href="{{ route('products.index') }}">Offres du mois</a></li>
                                                <li><a href="{{ route('products.index') }}">Remises sur unités
                                                        dentaires</a></li>
                                                <li><a href="{{ route('products.index') }}">Promos sur
                                                        stérilisation</a></li>
                                                <li><a href="{{ route('products.index') }}">Accessoires en solde</a>
                                                </li>
                                                <li><a href="{{ route('products.index') }}">Bundles et Packs</a></li>
                                                <li><a href="{{ route('products.index') }}">Outlet</a></li>
                                                <li><a href="{{ route('products.index') }}">Voir toutes les
                                                        promotions</a></li>
                                            </ul>
                                        </div>

                                        <!-- Bannières de promo -->
                                        <div class="mega-menu__column col-12 col-sm-5 col-md-6">
                                            <div class="ps-promo">
                                                <div class="ps-promo__item">
                                                    <img class="ps-promo__banner"
                                                        src="{{ asset('assets/img/ads/bg-banner4.webp') }}"
                                                        alt="Promo 1" />
                                                    <div class="ps-promo__content">
                                                        <span class="ps-promo__badge">Nouveau</span>
                                                        <h4 class="mb-20 ps-promo__name">Stérilisez en <br />toute confiance
                                                            -20%</h4>
                                                        <a class="ps-promo__btn"
                                                            href="{{ route('products.index') }}">Découvrir</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="ps-promo">
                                                <div class="ps-promo__item">
                                                    <img class="ps-promo__banner"
                                                        src="{{ asset('assets/img/ads/bg-banner5.webp') }}"
                                                        alt="Promo 2" />
                                                    <div class="ps-promo__content">
                                                        <h4 class="ps-promo__name" style="color: white">Bénéficiez d'un <br />diagnostic gratuit</h4>
                                                        <div class="ps-promo__sale">-15%</div>
                                                        <a class="ps-promo__btn"
                                                            href="{{ route('products.index') }}">Acheter</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Produit mis en avant avec compte à rebours -->
                                        <div class="mega-menu__column col-12 col-sm-4 col-md-3">
                                            <div class="mega-menu__product">

                                                <!-- Countdown -->
                                                <div class="ps-countdown">
                                                    <div class="ps-countdown__content">
                                                        <div class="ps-countdown__block ps-countdown__days">
                                                            <div class="ps-countdown__number"><span
                                                                    class="first-1st">0</span><span
                                                                    class="first">2</span><span
                                                                    class="last">3</span></div>
                                                            <div class="ps-countdown__ref">Jours</div>
                                                        </div>
                                                        <div class="ps-countdown__block ps-countdown__hours">
                                                            <div class="ps-countdown__number"><span
                                                                    class="first">1</span><span
                                                                    class="last">2</span></div>
                                                            <div class="ps-countdown__ref">Heures</div>
                                                        </div>
                                                        <div class="ps-countdown__block ps-countdown__minutes">
                                                            <div class="ps-countdown__number"><span
                                                                    class="first">0</span><span
                                                                    class="last">5</span></div>
                                                            <div class="ps-countdown__ref">Minutes</div>
                                                        </div>
                                                        <div class="ps-countdown__block ps-countdown__seconds">
                                                            <div class="ps-countdown__number"><span
                                                                    class="first">0</span><span
                                                                    class="last">9</span></div>
                                                            <div class="ps-countdown__ref">Secondes</div>
                                                        </div>
                                                    </div>
                                                </div>

                                                @php
                                                    $randomProduct = \App\Models\Product::inRandomOrder()->first();
                                                @endphp

                                                @if ($randomProduct)
                                                    <!-- Produit -->
                                                    <div class="ps-product ps-product--standard">
                                                        <div class="ps-product__thumbnail">
                                                            <a class="ps-product__image"
                                                                href="{{ route('product.show', $randomProduct->slug) }}">
                                                                <figure>
                                                                    <img src="{{ $randomProduct->getFirstMediaUrl('main_image') }}"
                                                                        alt="{{ $randomProduct->title }}" />

                                                                    @php
                                                                        $hoverImage = $randomProduct
                                                                            ->getMedia('gallery')
                                                                            ->first();
                                                                    @endphp

                                                                    @if ($hoverImage)
                                                                        <img src="{{ $hoverImage->getUrl() }}"
                                                                            alt="{{ $randomProduct->title }} - Hover" />
                                                                    @else
                                                                        <img src="{{ $randomProduct->getFirstMediaUrl('main_image') }}"
                                                                            alt="{{ $randomProduct->title }} - Hover" />
                                                                    @endif
                                                                </figure>
                                                            </a>
                                                        </div>

                                                        <div class="ps-product__content">
                                                            <h5 class="ps-product__title">
                                                                <a
                                                                    href="{{ route('product.show', $randomProduct->slug) }}">
                                                                    {{ $randomProduct->title }}
                                                                </a>
                                                            </h5>

                                                            <div class="ps-product__meta">
                                                                <span
                                                                    class="ps-product__price sale">{{ $randomProduct->price }}
                                                                    DH</span>
                                                                @if ($randomProduct->old_price)
                                                                    <span
                                                                        class="ps-product__del">{{ $randomProduct->old_price }}
                                                                        DH</span>
                                                                @endif
                                                            </div>


                                                            <div class="ps-product__desc">
                                                                <ul class="ps-product__list">
                                                                    @foreach ($randomProduct->characteristics->take(3) as $char)
                                                                        <li>{{ $char->attribute_name }} :
                                                                            {{ $char->value }}</li>
                                                                    @endforeach
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endif


                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <style>
                            /* Ensure promo banners fit nicely */
                            .ps-promo__item {
                                position: relative;
                                overflow: hidden;
                                height: 200px;
                                /* set your desired fixed height */
                            }

                            .ps-promo__banner {
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                                /* crop/scale image to fill container without distortion */
                            }
                        </style>
                        <li class="has-mega-menu">
                            <a href="{{ route('products.index') }}">
                                Nos collections
                                <span class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                            </a>
                            <div class="mega-menu">
                                <div class="container">
                                    <div class="mega-menu__row">
                                        <div class="mega-menu__column col-12 col-md-3">
                                            <ul class="sub-menu--mega sub-menu--bold">
                                                <li><a href="{{ route('products.index') }}">Diagnostic</a></li>
                                                <li><a href="{{ route('products.index') }}">Outils et Accessoires</a>
                                                </li>
                                                <li><a href="{{ route('products.index') }}">Bandages</a></li>
                                                <li><a href="{{ route('products.index') }}">Instruments de biopsie</a>
                                                </li>
                                                <li><a href="{{ route('products.index') }}">Lames chirurgicales</a>
                                                </li>
                                                <li><a href="{{ route('products.index') }}">Tensiomètres</a></li>
                                                <li><a href="{{ route('products.index') }}">Capsules</a></li>
                                                <li><a href="{{ route('products.index') }}">Produits dentaires</a>
                                                </li>
                                                <li><a href="{{ route('products.index') }}">Dispositifs médicaux</a>
                                                </li>
                                                <li><a href="{{ route('products.index') }}">Voir tout</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-menu__column col-12 col-md-9">
                                            <div class="product-list">
                                                <div class="row">
                                                    @if (!empty($collectionProducts))
                                                        @foreach ($collectionProducts as $product)
                                                            <div class="col-12 col-sm-6 col-lg-3">
                                                                <div class="ps-product ps-product--standard">
                                                                    <div class="ps-product__thumbnail">
                                                                        <a class="ps-product__image"
                                                                            href="{{ route('product.show', $product->slug) }}">
                                                                            <figure>
                                                                                <img src="{{ $product->getFirstMediaUrl('main_image') ?: asset('assets/img/products/default.jpg') }}"
                                                                                    alt="{{ $product->name }}">
                                                                                @if ($product->getMedia('images')->count() > 1)
                                                                                    <img src="{{ $product->getMedia('images')[1]->getUrl() }}"
                                                                                        alt="{{ $product->name }}">
                                                                                @endif
                                                                            </figure>
                                                                        </a>

                                                                    </div>
                                                                    <div class="ps-product__content">
                                                                        <h5 class="ps-product__title">
                                                                            <a
                                                                                href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a>
                                                                        </h5>
                                                                        <div class="ps-product__meta">
                                                                            <span
                                                                                class="ps-product__price sale">{{ $product->price }}
                                                                                DH</span>
                                                                            @if ($product->old_price)
                                                                                <span
                                                                                    class="ps-product__del">{{ $product->old_price }}
                                                                                    DH</span>
                                                                            @endif
                                                                        </div>
                                                                        <div class="ps-product__rating">
                                                                            <select class="ps-rating"
                                                                                data-read-only="true">
                                                                                <option value="1">1</option>
                                                                                <option value="2">2</option>
                                                                                <option value="3">3</option>
                                                                                <option value="4">4</option>
                                                                                <option value="5"
                                                                                    selected="selected">5</option>
                                                                            </select>
                                                                            <span
                                                                                class="ps-product__review">(Avis)</span>
                                                                        </div>
                                                                        <div class="ps-product__desc">
                                                                            <ul class="ps-product__list">
                                                                                <li>Produit certifié</li>
                                                                                <li>Haute qualité</li>
                                                                                <li>Livraison rapide</li>
                                                                            </ul>
                                                                        </div>
                                                                        <div
                                                                            class="ps-product__actions ps-product__group-mobile">
                                                                            <div class="ps-product__quantity">
                                                                                <div
                                                                                    class="def-number-input number-input safari_only">
                                                                                    <button class="minus"><i
                                                                                            class="icon-minus"></i></button>
                                                                                    <input class="quantity"
                                                                                        min="0" name="quantity"
                                                                                        value="1"
                                                                                        type="number" />
                                                                                    <button class="plus"><i
                                                                                            class="icon-plus"></i></button>
                                                                                </div>
                                                                            </div>
                                                                            <div class="ps-product__cart">
                                                                                <a class="ps-btn ps-btn--warning"
                                                                                    href="#">Ajouter au
                                                                                    panier</a>
                                                                            </div>
                                                                            <div class="ps-product__item cart"
                                                                                title="Ajouter au panier"><a
                                                                                    href="#"><i
                                                                                        class="fa fa-shopping-basket"></i></a>
                                                                            </div>
                                                                            <div class="ps-product__item"
                                                                                title="Favoris"><a href="#"><i
                                                                                        class="fa fa-heart-o"></i></a>
                                                                            </div>

                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endforeach
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>

                        <li class="has-mega-menu"><a href="{{ route('frontoffice.blog.index') }}">Blog</a></li>
                        <li class="has-mega-menu"><a href="{{ route('contact') }}">Contacter Nous</a></li>

                    </ul>
                </nav>
            </div>
            <div class="ps-navigation__right">
                Besoin d’aide ? <strong><a href="tel:+212702785190">+212 702‑785190</a></strong>
            </div>
        </div>
    </div>
</header>
