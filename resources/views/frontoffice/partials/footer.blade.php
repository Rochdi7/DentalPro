<footer class="ps-footer ps-footer--1">
    <div class="ps-footer--top">
        <div class="container">
            <div class="row m-0">
                <div class="col-12 col-sm-4 p-0">
                    <p class="text-center">
                        <a class="ps-footer__link" href="#"><i class="icon-wallet"></i>100% Remboursement garanti</a>
                    </p>
                </div>
                <div class="col-12 col-sm-4 p-0">
                    <p class="text-center">
                        <a class="ps-footer__link" href="#"><i class="icon-bag2"></i>Livraison sans contact</a>
                    </p>
                </div>
                <div class="col-12 col-sm-4 p-0">
                    <p class="text-center">
                        <a class="ps-footer__link" href="#"><i class="icon-truck"></i>Livraison gratuite à partir
                            de 1000&nbsp;DH</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="ps-footer__middle">
            <div class="row">
                <!-- Bloc adresse -->
                <div class="col-12 col-md-7">
                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="ps-footer--address">
                                <div class="ps-logo">
                                    <a href="index.html">
                                        <img src="img/sticky-logo.png" alt>
                                        <img class="logo-white" src="img/logo-white.png" alt>
                                        <img class="logo-black" src="img/logo-black.png" alt>
                                        <img class="logo-white-all" src="img/logo-white1.png" alt>
                                        <img class="logo-green" src="img/logo-green.png" alt>
                                    </a>
                                </div>
                                <div class="ps-footer__title">Notre magasin</div>
                                <p>
                                    Avenue du Rhin, Quartier Tachfine<br>
                                    Marrakech 40000, Maroc
                                </p>
                                <p>
                                    <a target="_blank" href="https://maps.app.goo.gl/39UH3YuYyAjq8Hrj9">
                                        Voir sur la carte
                                    </a>
                                </p>
                                <ul class="ps-social">
                                    <li>
                                        <a class="ps-social__link facebook"
                                            href="https://www.facebook.com/profile.php?id=61578467351770"
                                            target="_blank">
                                            <i class="fa fa-facebook"></i>
                                            <span class="ps-tooltip">Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a class="ps-social__link instagram"
                                            href="https://www.instagram.com/zs.dentaire/" target="_blank">
                                            <i class="fa fa-instagram"></i>
                                            <span class="ps-tooltip">Instagram</span>
                                        </a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <!-- Bloc contact -->
                        <div class="col-12 col-md-8">
                            <div class="ps-footer--contact">
                                <h5 class="ps-footer__title">Besoin d’aide</h5>
                                <div class="ps-footer__fax"><i class="icon-telephone"></i>+212 702-785190</div>
                                <p class="ps-footer__work">Lundi – Vendredi : 9h00 - 20h00<br>Samedi : 11h00 – 15h00</p>
                                <hr>
                                <p>
                                    <a class="ps-footer__email" href="mailto:dentalpro87@gmail.com">
                                        <i class="icon-envelope"></i>dentalpro87@gmail.com
                                    </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Liens rapides -->
                <div class="col-12 col-md-5">
                    <div class="row">
                        <!-- Informations -->
                        <div class="col-6 col-md-4">
                            <div class="ps-footer--block">
                                <h5 class="ps-block__title">Informations</h5>
                                <ul class="ps-block__list">
                                    <li><a href="{{ route('about') }}">À propos de nous</a></li>
                                    <li><a href="{{ route('terms') }}"">Informations de livraison</a></li>
                                    <li><a href="{{ route('privacy') }}">Politique de confidentialité</a></li>
                                    <li><a href="{{ route('products.index') }}">Promotions</a></li>
                                    <li><a href="{{ route('terms') }}">Conditions générales</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Mon compte -->
                        <div class="col-6 col-md-4">
                            <div class="ps-footer--block">
                                <h5 class="ps-block__title">Mon compte</h5>
                                <ul class="ps-block__list">
                                    <li><a href="{{ route('checkout.index') }}">Mes commandes</a></li>
                                    <li><a href="{{ route('cart.index') }}">Panier</a></li>
                                    <li><a href="{{ route('wishlist.index') }}">Liste de souhaits</a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Boutique -->
                        <div class="col-6 col-md-4">
                            <div class="ps-footer--block">
                                <h5 class="ps-block__title">Boutique</h5>
                                <ul class="ps-block__list">
                                    <li><a href="{{ route('about') }}">Partenaires</a></li>
                                    <li><a href="{{ route('products.index') }}">Meilleures ventes</a></li>
                                    <li><a href="{{ route('products.index') }}">Réductions</a></li>
                                    <li><a href="{{ route('products.index') }}">Nouveaux produits</a></li>
                                    <li><a href="{{ route('products.index') }}">Soldes</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- Bas de page -->
        <div class="ps-footer--bottom py-3">
    <div class="container">
        <div class="row align-items-center text-center text-md-start">
            <!-- Left column -->
            <div class="col-12 col-md-6 mb-2 mb-md-0">
                <p class="mb-0 small">
                    Copyright © 2025
                    <strong class="ms-1">DentalPro</strong>. Tous droits réservés.
                    <span class="d-block d-md-inline ms-md-2">
                        Développé par
                        <a href="https://codesommet.com" target="_blank"
                           class="fw-semibold text-primary">CodeSommet</a>
                    </span>
                </p>
            </div>

            <!-- Right column -->
            <div class="col-12 col-md-6 text-md-end">
                <img src="{{ asset('assets/img/footerpayment.webp') }}" alt="Paiements" class="img-fluid me-2" style="max-height:30px;">
                <img src="{{ asset('assets/img/footerpayment.webp') }}" alt="Paiements Light"
                     class="img-fluid payment-light" style="max-height:30px;">
            </div>
        </div>
    </div>
</div>

    </div>
</footer>
</div>
