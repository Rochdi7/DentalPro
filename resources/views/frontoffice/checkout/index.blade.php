@extends('frontoffice.layouts.app')

@section('title', 'Passer commande')

@section('content')
    <a href="https://wa.me/212702785190?text=Bonjour, je souhaite passer une commande sur DentalPro.ma" class="whatsapp-float"
        target="_blank" title="Contactez-nous sur WhatsApp">
        <i class="fa fa-whatsapp"></i>
    </a>

    <style>
        .whatsapp-float {
            position: fixed;
            bottom: 80px;
            /* default for desktop */
            right: 20px;
            width: 55px;
            height: 55px;
            background-color: #25D366;
            color: #fff;
            border-radius: 50%;
            text-align: center;
            font-size: 28px;
            line-height: 55px;
            z-index: 999;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.25);
            transition: all 0.3s ease;
            animation: bounceWhatsApp 2s infinite;
        }

        .whatsapp-float:hover {
            background-color: #1ebea5;
            text-decoration: none;
            color: #fff;
            animation-play-state: paused;
            /* Pause animation on hover */
        }

        @keyframes bounceWhatsApp {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-8px);
            }

            60% {
                transform: translateY(-4px);
            }
        }

        .whatsapp-float i {
            line-height: inherit;
        }

        /* Mobile-specific adjustment */
        @media (max-width: 768px) {
            .whatsapp-float {
                bottom: 140px;
                /* move higher on mobile */
                right: 15px;
                /* optional: slightly adjust right */
                width: 50px;
                /* optional: slightly smaller */
                height: 50px;
                font-size: 24px;
                line-height: 50px;
            }
        }
    </style>


    <div class="ps-checkout">
        <div class="container">

            {{-- ✅ Message de succès --}}
            @if (session('success'))
                <div class="alert alert-success mt-3">{{ session('success') }}</div>
            @endif

            {{-- ✅ Erreurs globales --}}
            @if ($errors->any())
                <div class="alert alert-danger mt-3">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            {{-- Fil d’Ariane --}}
            <ul class="ps-breadcrumb">
                <li class="ps-breadcrumb__item"><a href="{{ route('frontoffice.home') }}">Accueil</a></li>
                <li class="ps-breadcrumb__item active" aria-current="page">Passer commande</li>
            </ul>

            <h3 class="ps-checkout__title">Passer commande</h3>

            <div class="ps-checkout__content">
                <form action="{{ route('checkout.store') }}" method="POST" novalidate>
                    @csrf
                    <div class="row">

                        {{-- Formulaire de facturation --}}
                        <div class="col-12 col-lg-8">
                            <div class="ps-checkout__form">
                                <h3 class="ps-checkout__heading">Détails de facturation</h3>
                                <div class="row">

                                    {{-- Email --}}
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label for="email">Adresse email *</label>
                                            <input id="email" class="ps-input" type="email" name="email"
                                                value="{{ old('email') }}" required>
                                            @error('email')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Prénom --}}
                                    <div class="col-md-6">
                                        <div class="ps-checkout__group">
                                            <label for="first_name">Prénom *</label>
                                            <input id="first_name" class="ps-input" type="text" name="first_name"
                                                value="{{ old('first_name') }}" required>
                                            @error('first_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Nom --}}
                                    <div class="col-md-6">
                                        <div class="ps-checkout__group">
                                            <label for="last_name">Nom *</label>
                                            <input id="last_name" class="ps-input" type="text" name="last_name"
                                                value="{{ old('last_name') }}" required>
                                            @error('last_name')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Société --}}
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label for="company">Société (optionnel)</label>
                                            <input id="company" class="ps-input" type="text" name="company"
                                                value="{{ old('company') }}">
                                            @error('company')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Adresse --}}
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label for="address_line1">Adresse *</label>
                                            <input id="address_line1" class="ps-input mb-3" type="text"
                                                name="address_line1" placeholder="Numéro et rue"
                                                value="{{ old('address_line1') }}" required>
                                            @error('address_line1')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror

                                            <input id="address_line2" class="ps-input" type="text" name="address_line2"
                                                placeholder="Appartement, étage, etc. (optionnel)"
                                                value="{{ old('address_line2') }}">
                                            @error('address_line2')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Ville --}}
                                    <div class="col-md-6">
                                        <div class="ps-checkout__group">
                                            <label for="city">Ville *</label>
                                            <input id="city" class="ps-input" type="text" name="city"
                                                value="{{ old('city') }}" required>
                                            @error('city')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Code postal --}}
                                    <div class="col-md-6">
                                        <div class="ps-checkout__group">
                                            <label for="postal_code">Code postal *</label>
                                            <input id="postal_code" class="ps-input" type="text" name="postal_code"
                                                value="{{ old('postal_code') }}" required>
                                            @error('postal_code')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Téléphone --}}
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label for="phone">Téléphone *</label>
                                            <input id="phone" class="ps-input" type="text" name="phone"
                                                value="{{ old('phone') }}" required>
                                            @error('phone')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                    {{-- Notes --}}
                                    <div class="col-12">
                                        <div class="ps-checkout__group">
                                            <label for="order_notes">Notes de commande (optionnel)</label>
                                            <textarea id="order_notes" class="ps-textarea" name="order_notes" rows="7">{{ old('order_notes') }}</textarea>
                                            @error('order_notes')
                                                <small class="text-danger">{{ $message }}</small>
                                            @enderror
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        {{-- Récapitulatif de commande --}}
                        <div class="col-12 col-lg-4">
                            <div class="ps-checkout__order">
                                <h3 class="ps-checkout__heading">Votre commande</h3>

                                {{-- Liste des produits --}}
                                @forelse ($cart as $item)
                                    <div class="ps-checkout__row ps-product">
                                        <div>
                                            {{ $item['product']->title ?? 'Produit' }}
                                            x <span>{{ $item['quantity'] }}</span>
                                        </div>
                                        <div>{{ number_format($item['subtotal'], 2, '.', ' ') }} MAD</div>
                                    </div>
                                @empty
                                    <div class="ps-checkout__row">
                                        <div class="text-muted">Votre panier est vide</div>
                                    </div>
                                @endforelse

                                {{-- Total --}}
                                <div class="ps-checkout__row">
                                    <div class="ps-title">Total</div>
                                    <div>{{ number_format($total, 2, '.', ' ') }} MAD</div>
                                </div>

                                {{-- Méthodes de paiement --}}
                                <div class="ps-checkout__payment">
                                    <div class="form-check">
                                        {{-- Paiement à la livraison --}}
                                        <div class="form-check mb-2">
                                            <input class="form-check-input" type="radio" name="payment" value="cod"
                                                id="cod" {{ $total >= 1000 ? 'checked' : 'disabled' }}>
                                            <label class="form-check-label" for="cod">
                                                Paiement à la livraison
                                                @if ($total < 1000)
                                                    <small class="text-muted">(Disponible à partir de 1000 MAD)</small>
                                                @endif
                                            </label>
                                        </div>

                                        {{-- Paiement via WhatsApp --}}
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="payment" id="whatsapp"
                                                onclick="redirectToWhatsApp()" />
                                            <label class="form-check-label" for="whatsapp">
                                                Commander via <i class="fa fa-whatsapp text-success"></i> WhatsApp
                                            </label>
                                        </div>
                                        <script>
                                            function redirectToWhatsApp() {
                                                let message = "Bonjour, je souhaite passer une commande sur votre site.%0A";

                                                @foreach ($cart as $item)
                                                    message += "- {{ $item['product']->title }} x {{ $item['quantity'] }}%0A";
                                                @endforeach

                                                message += "%0ATotal: {{ number_format($total, 2, '.', ' ') }} MAD";

                                                let phone = "212702785190"; // ✅ Change to your actual WhatsApp number
                                                let url = `https://wa.me/${phone}?text=${message}`;

                                                window.location.href = url;
                                            }
                                        </script>


                                    </div>
                                    <p class="ps-note">
                                        Vous pourrez payer en espèces lors de la livraison.
                                    </p>

                                    {{-- Acceptation CGU --}}
                                    <div class="check-faq">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="agree-faq"
                                                name="agree_faq" value="1" required>
                                            <label class="form-check-label" for="agree-faq">
                                                J’ai lu et j’accepte les conditions générales *
                                            </label>
                                        </div>
                                    </div>

                                    {{-- Bouton de confirmation --}}
                                    <button class="ps-btn ps-btn--warning mt-3">
                                        Confirmer la commande
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
