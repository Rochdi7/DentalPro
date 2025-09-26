@extends('frontoffice.layouts.app')

@section('content')
    <div class="ps-contact">
        <div class="container">
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ route('frontoffice.home') }}">Accueil</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">Contact</li>
            </ul>
            <div class="ps-contact__content">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="ps-contact__info">
                            <h2 class="ps-contact__title">Comment pouvons-nous vous aider ?</h2>
                            <p class="ps-contact__text">Nous sommes à votre disposition du lundi au samedi !</p>
                            <h3 class="ps-contact__fax">+212 702-785190</h3>
                            <div class="ps-contact__work">
                                Lundi – Vendredi : 9h00 - 20h00<br>
                                Samedi : 11h00 – 15h00
                            </div>
                            <div class="ps-contact__email">
                                <a href="mailto:dentalpro87@gmail.com">dentalpro87@gmail.com</a>
                            </div>
                            <ul class="ps-social">
                                <li>
                                    <a class="ps-social__link facebook"
                                        href="https://www.facebook.com/profile.php?id=61578467351770" target="_blank">
                                        <i class="fa fa-facebook"></i>
                                        <span class="ps-tooltip">Facebook</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="ps-social__link instagram" href="https://www.instagram.com/zs.dentaire/"
                                        target="_blank">
                                        <i class="fab fa-instagram"></i>
                                        <span class="ps-tooltip">Instagram</span>
                                    </a>
                                </li>
                            </ul>

                        </div>
                    </div>
                    <div class="col-12 col-lg-8">
                        <div class="ps-contact__map">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3397.478194332321!2d-8.050485000000002!3d31.620755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zMzHCsDM3JzE0LjciTiA4wrAwMycwMS44Ilc!5e0!3m2!1sen!2sma!4v1757522330478!5m2!1sen!2sma"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>

            <form action="{{ route('frontoffice.contact.send') }}" method="post">
                @csrf
                <div class="ps-form--contact">
                    <h2 class="ps-form__title">Remplissez le formulaire si vous avez des questions</h2>

                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="row">
                        <div class="col-12 col-md-4">
                            <div class="ps-form__group">
                                <input class="form-control ps-form__input" type="text" name="name"
                                    placeholder="Nom et prénom" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-form__group">
                                <input class="form-control ps-form__input" type="email" name="email"
                                    placeholder="Votre e-mail" required>
                            </div>
                        </div>
                        <div class="col-12 col-md-4">
                            <div class="ps-form__group">
                                <input class="form-control ps-form__input" type="text" name="phone"
                                    placeholder="Téléphone">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="ps-form__group">
                                <textarea class="form-control ps-form__textarea" rows="5" name="message" placeholder="Votre message..." required></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="ps-form__submit">
                        <button type="submit" class="ps-btn ps-btn--warning">Envoyer le message</button>
                    </div>
                </div>
            </form>


            <section class="ps-section--instagram">
                <h3 class="ps-section__title">Suivez <strong>@dentalpro.ma</strong> sur Instagram</h3>
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
                                <img src="{{ asset('assets/img/ig/ig2.webp') }}" alt>
                                <span class="ps-image__overlay"><i class="fa fa-instagram"></i></span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <a class="ps-image--transition" href="https://www.instagram.com/zs.dentaire/">
                                <img src="{{ asset('assets/img/ig/ig3.webp') }}" alt>
                                <span class="ps-image__overlay"><i class="fa fa-instagram"></i></span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <a class="ps-image--transition" href="https://www.instagram.com/zs.dentaire/">
                                <img src="{{ asset('assets/img/ig/ig4.webp') }}" alt>
                                <span class="ps-image__overlay"><i class="fa fa-instagram"></i></span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <a class="ps-image--transition" href="https://www.instagram.com/zs.dentaire/">
                                <img src="{{ asset('assets/img/ig/ig5.webp') }}" alt>
                                <span class="ps-image__overlay"><i class="fa fa-instagram"></i></span>
                            </a>
                        </div>
                        <div class="col-6 col-md-4 col-lg-2">
                            <a class="ps-image--transition" href="https://www.instagram.com/zs.dentaire/">
                                <img src="{{ asset('assets/img/ig/ig6.webp') }}" alt>
                                <span class="ps-image__overlay"><i class="fa fa-instagram"></i></span>
                            </a>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endsection
