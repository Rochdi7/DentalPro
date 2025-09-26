@extends('frontoffice.layouts.app')

@section('title', $post->title)

@section('content')

    <div class="ps-post ps-post--sidebar">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item">
                    <a href="{{ route('frontoffice.home') }}">Accueil</a>
                </li>

                @if ($post->category)
                    <li class="ps-breadcrumb__item">
                        <a href="{{ route('frontoffice.blog.categories.show', $post->category->slug) }}">
                            {{ $post->category->name }}
                        </a>
                    </li>
                @endif

                <li class="ps-breadcrumb__item active" aria-current="page">
                    {{ $post->title }}
                </li>
            </ul>

            <div class="ps-post__content">
                <div class="row">
                    <div class="col-12 col-md-9">
                        {{-- Tags (badges) --}}
                        @if ($post->tags->count())
                            <div class="ps-blog__badge">
                                @foreach ($post->tags as $tag)
                                    <span class="ps-badge__item">{{ $tag->name }}</span>
                                @endforeach
                            </div>
                        @endif

                        {{-- Titre du post --}}
                        <h1 class="ps-post__title">{{ $post->title }}</h1>

                        {{-- Meta infos : date + auteur --}}
                        <div class="ps-blog__meta">
                            <span class="ps-blog__date">{{ $post->published_at->translatedFormat('d F Y') }}</span>
                            <a class="ps-blog__author" href="#">
                                {{ $post->author->name ?? 'Administrateur' }}
                            </a>
                        </div>

                        {{-- Image principale --}}
                        <div class="ps-blog__banner">
                            <img src="{{ $post->getFirstMediaUrl('cover', 'thumb') ?: asset('img/blog/default.jpg') }}"
                                alt="{{ $post->title }}">
                        </div>


                        {{-- Contenu du post --}}
                        <div class="ps-post__body">
                            {!! $post->body !!}
                        </div>

                        {{-- Exemple : section produits associés --}}
                        @if (isset($relatedProducts) && $relatedProducts->count())
                            <section class="ps-section--face-mask">
                                <h3 class="ps-section__title">Meilleures ventes en masques</h3>
                                <div class="ps-section__carousel">
                                    <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true"
                                        data-owl-speed="13000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true"
                                        data-owl-item="4" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2"
                                        data-owl-item-lg="4" data-owl-item-xl="4" data-owl-duration="1000"
                                        data-owl-mousedrag="on">

                                        @foreach ($relatedProducts as $product)
                                            <div class="ps-product ps-product--standard">
                                                <div class="ps-product__thumbnail">
                                                    <a class="ps-product__image"
                                                        href="{{ route('product.show', $product->slug) }}">
                                                        <figure>
                                                            @php
                                                                $main =
                                                                    $product->getFirstMediaUrl('main_image') ?:
                                                                    asset('assets/img/default-product.jpg');
                                                                $secondary = optional(
                                                                    $product->getMedia('gallery')->first(),
                                                                )->getUrl();
                                                            @endphp
                                                            <img src="{{ $main }}" alt="{{ $product->title }}">
                                                            @if ($secondary)
                                                                <img src="{{ $secondary }}"
                                                                    alt="{{ $product->title }}">
                                                            @endif
                                                        </figure>
                                                    </a>

                                                    {{-- Badges dynamiques --}}
                                                    <div class="ps-product__badge">
                                                        @if ($product->is_occasion)
                                                            <div class="ps-badge ps-badge--sold">Occasion</div>
                                                        @endif
                                                        @if ($product->is_hot)
                                                            <div class="ps-badge ps-badge--hot">Hot</div>
                                                        @endif
                                                    </div>
                                                </div>

                                                <div class="ps-product__content">
                                                    <h5 class="ps-product__title">
                                                        <a
                                                            href="{{ route('product.show', $product->slug) }}">{{ $product->title }}</a>
                                                    </h5>
                                                    <div class="ps-product__meta">
                                                        <span class="ps-product__price">{{ $product->price }} MAD</span>
                                                        @if ($product->old_price)
                                                            <span class="ps-product__del">{{ $product->old_price }}
                                                                MAD</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </section>
                        @endif
                    </div>

                    <div class="col-12 col-md-3">
                        <div class="ps-widget ps-widget--blog">
                            {{-- 📌 Catégories --}}
                            @if (isset($categories) && $categories->count())
                                <div class="ps-widget__block">
                                    <h4 class="ps-widget__title">Catégories</h4>
                                    <a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                    <div class="ps-widget__content">
                                        <ul class="ps-widget--category">
                                            @foreach ($categories as $category)
                                                <li>
                                                    <a
                                                        href="{{ route('frontoffice.blog.categories.show', $category->slug) }}">
                                                        {{ $category->name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif

                            {{-- 📌 Produits liés --}}
                            @if (isset($relatedProducts) && $relatedProducts->count())
                                <div class="ps-widget__block">
                                    <h4 class="ps-widget__title">Produits associés</h4>
                                    <a class="ps-block-control" href="#"><i class="fa fa-angle-down"></i></a>
                                    <div class="ps-widget__content">
                                        <div class="ps-widget__product">
                                            @foreach ($relatedProducts as $product)
                                                <div class="ps-product ps-product--standard">
                                                    <div class="ps-product__thumbnail">
                                                        <a class="ps-product__image"
                                                            href="{{ route('product.show', $product->slug) }}">
                                                            <figure>
                                                                <img src="{{ $product->getFirstMediaUrl('main_image', 'thumb') ?: asset('img/products/default.jpg') }}"
                                                                    alt="{{ $product->title }}">
                                                            </figure>
                                                        </a>

                                                        {{-- Badges dynamiques --}}
                                                        <div class="ps-product__badge">
                                                            @if ($product->is_occasion)
                                                                <div class="ps-badge ps-badge--sold">Occasion</div>
                                                            @endif
                                                            @if ($product->is_hot)
                                                                <div class="ps-badge ps-badge--hot">Hot</div>
                                                            @endif
                                                        </div>
                                                    </div>

                                                    <div class="ps-product__content">
                                                        <h5 class="ps-product__title">
                                                            <a href="{{ route('product.show', $product->slug) }}">
                                                                {{ $product->title }}
                                                            </a>
                                                        </h5>
                                                        <div class="ps-product__meta">
                                                            <span class="ps-product__price">{{ $product->price }}
                                                                MAD</span>
                                                            @if ($product->old_price)
                                                                <span class="ps-product__del">{{ $product->old_price }}
                                                                    MAD</span>
                                                            @endif
                                                        </div>
                                                        {{-- ❌ Pas de reviews (supprimés) --}}
                                                    </div>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            @endif

                            {{-- 📌 Bannière promo --}}
                            {{-- <div class="ps-widget--promo">
                                <img src="{{ asset('assets/img/banner-sidebar1.jpg') }}" alt="Promotion">
                            </div> --}}

                        </div>
                    </div>

                </div>
            </div>
        </div>
        @if ($relatedPosts->count())
            <section class="ps-section--blog" data-background="{{ asset('assets/img/related-bg.jpg') }}">
                <div class="container">
                    <h3 class="ps-section__title">Articles associés</h3>
                    <div class="ps-section__carousel">
                        <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000"
                            data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="3"
                            data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="2" data-owl-item-lg="3"
                            data-owl-item-xl="3" data-owl-duration="1000" data-owl-mousedrag="on">

                            @foreach ($relatedPosts as $related)
                                <div class="ps-section__item">
                                    <div class="ps-blog--latset">
                                        <div class="ps-blog__thumbnail">
                                            <a href="{{ route('frontoffice.blog.show', $related->slug) }}">
                                                <img src="{{ $related->getFirstMediaUrl('cover', 'thumb') ?: asset('img/blog/default.jpg') }}"
                                                    alt="{{ $related->title }}">
                                            </a>
                                            @if ($related->tags->count())
                                                <div class="ps-blog__badge">
                                                    @foreach ($related->tags as $tag)
                                                        <span class="ps-badge__item">{{ $tag->name }}</span>
                                                    @endforeach
                                                </div>
                                            @endif
                                        </div>
                                        <div class="ps-blog__content">
                                            <div class="ps-blog__meta">
                                                <span
                                                    class="ps-blog__date">{{ $related->published_at->translatedFormat('d F Y') }}</span>
                                                <a class="ps-blog__author" href="#">
                                                    {{ $related->author->name ?? 'Administrateur' }}
                                                </a>
                                            </div>
                                            <a class="ps-blog__title"
                                                href="{{ route('frontoffice.blog.show', $related->slug) }}">
                                                {{ $related->title }}
                                            </a>
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
