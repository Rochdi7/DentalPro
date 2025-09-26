@extends('frontoffice.layouts.app')

@section('content')
    <div class="ps-about">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ url('/') }}">Accueil</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">À propos</li>
            </ul>

            <section class="ps-banner--round">
                <div class="ps-banner">
                    <div class="ps-banner__block">
                        <div class="ps-banner__content">
                            <div class="ps-logo">
                                <a href="{{ url('/') }}">
                                    <img src="{{ asset('assets/img/logo/logo.webp') }}" alt="DentalPro">
                                </a>
                            </div>

                            <h2 class="ps-banner__title">
                                Des équipements fiables pour des résultats de qualité.
                            </h2>

                            <div class="ps-banner__btn-group">
                                <div class="ps-banner__btn">
                                    <img src="{{ asset('assets/img/icon2.png') }}" alt="Icône DentalPro">
                                    Une expertise locale et fiable
                                </div>
                                <div class="ps-banner__btn">
                                    <img src="{{ asset('assets/img/certificate-gray.png') }}" alt="Certification">
                                    Produits certifiés et de haute qualité
                                </div>
                            </div>
                            <a class="ps-banner__shop bg-yellow" href="#">Découvrir</a>
                        </div>
                        <div class="ps-banner__thumnail">
                            <img class="ps-banner__round" src="{{ asset('assets/img/round5.png') }}" alt="Fond DentalPro">
                            <img class="ps-banner__image" src="{{ asset('assets/img/aboutus/woman-2-scaled.webp') }}"
                                alt="DentalPro Marrakech">
                        </div>
                    </div>
                </div>
            </section>

            <section class="ps-about--info">
                <h2 class="ps-about__title">
                    Votre partenaire de confiance <br> pour l’équipement dentaire à Marrakech
                </h2>
                <p class="ps-about__subtitle">
                    Chez DentalPro, nous mettons notre passion et notre expertise au service des professionnels du secteur
                    dentaire.
                    Nous proposons des solutions fiables, innovantes et adaptées aux besoins de votre cabinet.
                </p>
                <div class="ps-about__extent">
                    <div class="row m-0">
                        <div class="col-12 col-md-4 p-0">
                            <div class="ps-block--about">
                                <div class="ps-block__icon">
                                    <img src="{{ asset('assets/img/award-icon-2.png') }}" alt="Qualité DentalPro">
                                </div>
                                <h4 class="ps-block__title">Qualité certifiée</h4>
                                <div class="ps-block__subtitle">
                                    Des produits conformes aux standards internationaux.
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 p-0">
                            <div class="ps-block--about">
                                <div class="ps-block__icon">
                                    <img src="{{ asset('assets/img/dentistry-icon-2.png') }}" alt="Innovation DentalPro">
                                </div>
                                <h4 class="ps-block__title">Innovation et performance</h4>
                                <div class="ps-block__subtitle">
                                    Des équipements modernes pour améliorer votre pratique.
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-4 p-0">
                            <div class="ps-block--about">
                                <div class="ps-block__icon">
                                    <img src="{{ asset('assets/img/toothbrush-icon-2.png') }}"
                                        alt="Accompagnement DentalPro">
                                </div>
                                <h4 class="ps-block__title">Accompagnement personnalisé</h4>
                                <div class="ps-block__subtitle">
                                    Une équipe basée à Marrakech, à l’écoute de vos besoins.
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </section>
        </div>

        <div class="ps-about__content">
            <section class="ps-about__banner" data-background="{{ asset('assets/img/aboutus/produit.webp') }}">
                <div class="container">
                    <div class="ps-banner">
                        <h2 class="ps-banner__title">Optimisez votre endodontie avec l'Endo Radar Plus</h2>
                        <div class="ps-banner__desc">La précision sans fil et la sécurité intégrée pour des traitements
                            d'exception.</div>
                        <a class="ps-banner__shop" href="{{ route('products.index') }}">Voir nos produits</a>
                    </div>

                </div>
            </section>

            <section class="ps-about__project">
                <div class="container">
                    <h2 class="ps-about__title">DentalPro, votre fournisseur local basé à Marrakech</h2>

                    {{-- Bloc 1 --}}
                    <section class="ps-section--block-grid">
                        <div class="ps-section__thumbnail">
                            <a class="ps-section__image" href="#">
                                <img src="{{ asset('assets/img/aboutus/dentist-with-smile-scaled.webp') }}"
                                    alt="Fournisseurs certifiés">
                            </a>
                        </div>
                        <div class="ps-section__content">
                            <h3 class="ps-section__title">Produits certifiés et fournisseurs de confiance</h3>
                            <div class="ps-section__subtitle">Certifications reconnues (CEE, ISO, etc.)</div>
                            <div class="ps-section__desc">
                                DentalPro vous propose des produits de qualité à des prix compétitifs.
                                Que vous soyez un cabinet dentaire ou une clinique, nous avons les équipements qu’il vous
                                faut.
                                Notre objectif : fiabilité, innovation et accessibilité.
                            </div>
                            <ul class="ps-section__list">
                                <li>Livraison rapide au Maroc</li>
                                <li>Support client local à Marrakech</li>
                                <li>Produits certifiés CEE</li>
                            </ul>
                        </div>
                    </section>

                    {{-- Bloc 2 --}}
                    <section class="ps-section--block-grid row-reverse">
                        <div class="ps-section__thumbnail">
                            <a class="ps-section__image" href="#">
                                <img src="{{ asset('assets/img/aboutus/maintenance.webp') }}" alt="Confiance et expérience">
                            </a>
                        </div>
                        <div class="ps-section__content">
                            <h3 class="ps-section__title">Une expertise locale reconnue par les professionnels</h3>
                            <div class="ps-section__subtitle">Des centaines de clients satisfaits au Maroc</div>
                            <div class="ps-section__desc">
                                Grâce à notre proximité et notre réactivité, DentalPro est devenu un acteur incontournable
                                dans le domaine de l’équipement dentaire à Marrakech.
                                Nous connaissons vos besoins et adaptons nos offres en conséquence.
                            </div>
                            <ul class="ps-section__list">
                                <li>Conseils personnalisés</li>
                                <li>Équipe disponible 7j/7</li>
                                <li>Garantie de satisfaction</li>
                            </ul>
                        </div>
                    </section>

                    {{-- Bloc 3 --}}
                    <section class="ps-section--block-grid">
                        <div class="ps-section__thumbnail">
                            <a class="ps-section__image" href="#">
                                <img src="{{ asset('assets/img/aboutus/businessman-talking-phone.webp') }}"
                                    alt="Matériel fiable">
                            </a>
                        </div>
                        <div class="ps-section__content">
                            <h3 class="ps-section__title">Des outils fiables pour une pratique quotidienne sans stress</h3>
                            <div class="ps-section__subtitle">Un service après-vente à votre écoute</div>
                            <div class="ps-section__desc">
                                Nous sélectionnons nos produits pour leur performance, leur durabilité et leur sécurité.
                                Avec DentalPro, vous bénéficiez d’un accompagnement complet avant et après votre achat.
                            </div>
                            <ul class="ps-section__list">
                                <li>Installation possible sur demande</li>
                                <li>Support WhatsApp direct</li>
                                <li>Documentation technique disponible</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </section>

            {{-- Vidéo ou Bannière statique --}}
            <section class="ps-about--video">
                <div class="ps-banner">
                    <div class="container">
                        <div class="ps-banner__block">
                            <div class="ps-banner__content">
                                <h2 class="ps-banner__title">Avec DentalPro, améliorez vos performances au quotidien</h2>
                                <div class="ps-banner__desc">Des équipements fiables pour des résultats de qualité.</div>
                                <div class="ps-banner__btn-group">
                                    <div class="ps-banner__btn">
                                        <img src="{{ asset('assets/img/icon2.png') }}" alt="Multi-utilisateurs">
                                        Gestion multi-utilisateurs possible
                                    </div>
                                    <div class="ps-banner__btn">
                                        <img src="{{ asset('assets/img/certificate-gray.png') }}" alt="Certificat">
                                        Produits certifiés santé
                                    </div>
                                </div>
                                <a class="ps-banner__shop bg-warning" href="{{ route('products.index') }}">Découvrir</a>
                            </div>

                            <div class="ps-banner__thumnail">
                                {{-- Hidden video for lightgallery --}}
                                <div style="display:none;" id="video1">
                                    <video class="lg-video-object lg-html5" controls preload="none">
                                        <source src="{{ asset('assets/vid/aboutus.mp4') }}" type="video/mp4">
                                        Your browser does not support HTML5 video.
                                    </video>
                                </div>

                                {{-- Poster image --}}
                                <img class="ps-banner__image"
                                    src="{{ asset('assets/img/aboutus/goby-tD3GaS9ysF4-unsplash-1.webp') }}"
                                    alt="Vidéo présentation DentalPro">

                                {{-- Play button for gallery --}}
                                <div id="ps-video-gallery">
                                    <div class="video" data-html="#video1"
                                        data-poster="{{ asset('assets/img/aboutus/goby-tD3GaS9ysF4-unsplash-1.webp') }}">
                                        <a href="#">
                                            <div class="ps-banner__video"><i class="fa fa-play"></i></div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>


            <section class="ps-section--reviews" data-background="{{ asset('assets/img/roundbg.png') }}">
                <h3 class="ps-section__title">
                    <img src="{{ asset('assets/img/quote-icon.png') }}" alt="Citation"> Avis de nos clients
                </h3>
                <div class="ps-section__content">
                    <div class="owl-carousel" data-owl-auto="false" data-owl-loop="true" data-owl-speed="13000"
                        data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5"
                        data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="3" data-owl-item-lg="5"
                        data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">

                        <div class="ps-review">
                            <div class="ps-review__text">Il y a eu une petite erreur dans la commande. En compensation,
                                j’ai reçu la bonne commande et j’ai pu garder l’autre. Service au top !</div>
                            <div class="ps-review__name">Oussama El Ghazali</div>
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
                            <div class="ps-review__text">Commandé vendredi soir, reçu lundi à midi à Marrakech. Traitement
                                ultra rapide, je recommande vivement !</div>
                            <div class="ps-review__name">Samira Boukhari</div>
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
                            <div class="ps-review__text">J’ai tout reçu parfaitement emballé. Matériel conforme à mes
                                attentes. Très bon rapport qualité/prix.</div>
                            <div class="ps-review__name">Rachid Amrani</div>
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
                            <div class="ps-review__text">Rien à dire. Livraison rapide, service client réactif. Je
                                commanderai à nouveau sans hésitation.</div>
                            <div class="ps-review__name">Meriem El Alaoui</div>
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
                            <div class="ps-review__text">Très bonne expérience. L’équipe DentalPro est à l’écoute. Merci
                                pour les conseils et le professionnalisme.</div>
                            <div class="ps-review__name">Karim Bennis</div>
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
                            <div class="ps-review__text">Les produits sont arrivés rapidement et bien protégés. Très
                                satisfaite de la qualité du matériel reçu.</div>
                            <div class="ps-review__name">Nisrine El Fassi</div>
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

        </div>

        <div class="container">

            {{-- Section Newsletter --}}
            <section class="ps-section--newsletter" data-background="{{ asset('assets/img/newsletter-bg.jpg') }}">
                <h3 class="ps-section__title">
                    Inscrivez-vous à notre newsletter et recevez <br>
                    <span style="color:#ff9900;">30 DH</span> de réduction sur votre première commande<br>
                    (dès 300 DH d'achat)
                </h3>
                <div class="ps-section__content">

                    {{-- ✅ Message de succès --}}
                    @if (session('success'))
                        <div class="alert alert-success mt-3 text-center">
                            {{ session('success') }}
                        </div>
                    @endif

                    {{-- ⚠️ Message d’erreur --}}
                    @if ($errors->any())
                        <div class="alert alert-danger mt-3 text-center">
                            {{ $errors->first('email') }}
                        </div>
                    @endif

                    <form action="{{ route('newsletter.subscribe') }}" method="POST">
                        @csrf
                        <div class="ps-form--subscribe">
                            <div class="ps-form__control">
                                <input class="form-control ps-input" type="email" name="email"
                                    placeholder="Entrez votre adresse email" required>
                                <button class="ps-btn ps-btn--warning" type="submit">S'inscrire</button>
                            </div>
                        </div>
                    </form>
                </div>
            </section>


        </div>

    </div>
@endsection
