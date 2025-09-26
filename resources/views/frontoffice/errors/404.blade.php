@extends('frontoffice.layouts.app')

@section('title', 'Page introuvable')

@section('content')

    <div class="ps-page--notfound">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item">
                    <a href="{{ route('frontoffice.home') }}">Accueil</a>
                </li>
                <li class="ps-breadcrumb__item active" aria-current="page">Erreur 404</li>
            </ul>

            <div class="ps-page__content">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-5">
                        <img src="{{ asset('assets/img/cartoon-doctor.webp') }}" alt="Médecin dessin animé">
                    </div>
                    <div class="col-12 col-md-6 col-lg-7">
                        <h1 class="ps-page__name">404</h1>
                        <h5>Cette page a probablement été déplacée...</h5>
                        <p>Retournez à la page d'accueil ou découvrez nos offres.</p>
                        <div>
                            <a class="ps-btn ps-btn--primary" href="{{ route('frontoffice.home') }}">Retour à l'accueil</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section class="ps-section--latest">
            <div class="container">
                <h3 class="ps-section__title">Derniers produits</h3>
                <div class="ps-section__carousel">
                    <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000"
                        data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2"
                        data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="5" data-owl-item-xl="5"
                        data-owl-duration="1000" data-owl-mousedrag="on">

                        @foreach ($latestProducts as $product)
                            <div class="ps-section__product">
                                <div class="ps-product ps-product--standard">
                                    <div class="ps-product__thumbnail">
                                        <a class="ps-product__image" href="{{ route('product.show', $product->slug) }}">
                                            <figure>
                                                <img src="{{ $product->getFirstMediaUrl('main_image') ?: asset('assets/img/products/default.jpg') }}"
                                                    alt="{{ $product->title }}">
                                                @if ($product->getMedia('images')->count() > 1)
                                                    <img src="{{ $product->getMedia('images')[1]->getUrl() }}"
                                                        alt="{{ $product->title }}">
                                                @endif
                                            </figure>
                                        </a>

                                        <div class="ps-product__actions">
                                            <div class="ps-product__item" title="Favoris">
                                                <a href="#"><i class="fa fa-heart-o"></i></a>
                                            </div>
                                            
                                            <div class="ps-product__item" title="Vue rapide">
                                                <a href="#" data-toggle="modal" data-target="#popupQuickview"><i
                                                        class="fa fa-search"></i></a>
                                            </div>
                                            <div class="ps-product__item" title="Ajouter au panier">
                                                <a href="#" data-toggle="modal" data-target="#popupAddcart"><i
                                                        class="fa fa-shopping-basket"></i></a>
                                            </div>
                                        </div>

                                        @if ($product->is_occasion)
                                            <div class="ps-product__badge">
                                                <div class="ps-badge ps-badge--hot">Occasion</div>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title">
                                            <a href="{{ route('product.show', $product->slug) }}">{{ $product->title }}</a>
                                        </h5>
                                        <div class="ps-product__meta">
                                            <span class="ps-product__price sale">{{ $product->price }} DH</span>
                                            @if ($product->old_price)
                                                <span class="ps-product__del">{{ $product->old_price }} DH</span>
                                            @endif
                                        </div>
                                       
                                        <div class="ps-product__desc">
                                            <ul class="ps-product__list">
                                                <li>Produit certifié</li>
                                                <li>Qualité professionnelle</li>
                                                <li>Livraison rapide</li>
                                            </ul>
                                        </div>
                                        <div class="ps-product__actions ps-product__group-mobile">
                                            <div class="ps-product__quantity">
                                                <div class="def-number-input number-input safari_only">
                                                    <button class="minus"><i class="icon-minus"></i></button>
                                                    <input class="quantity" min="1" name="quantity" value="1"
                                                        type="number" />
                                                    <button class="plus"><i class="icon-plus"></i></button>
                                                </div>
                                            </div>
                                            <div class="ps-product__cart">
                                                <a class="ps-btn ps-btn--warning" href="#" data-toggle="modal"
                                                    data-target="#popupAddcart">Ajouter</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </section>

    </div>

@endsection
