@extends('layouts.main')

@section('title', 'Créer un tag')
@section('breadcrumb-item', 'Produits')
@section('breadcrumb-item-active', 'Créer un tag')
@section('page-animation', 'animate__fadeIn')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/animate.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        @if($errors->any())
            <div class="alert alert-danger animate__animated animate__shakeX">
                <strong>Veuillez corriger les erreurs ci-dessous.</strong>
            </div>
        @endif

        <form action="{{ route('backoffice.product-tags.store') }}" method="POST" class="needs-validation animate__animated animate__fadeIn" id="product-tag-form" novalidate>
            <div id="form-container" class="card">
                <div class="card-header">
                    <h5 class="mb-0">Créer un tag</h5>
                </div>
                <div class="card-body">
                    @include('backoffice.product_tags._form', ['tag' => null])
                </div>
                <div class="card-footer text-end">
                    <a href="{{ route('backoffice.product-tags.index') }}"
                       class="btn btn-light"
                       onclick="fadeOutCard(event, this, 'form-container')">Annuler</a>
                    <button type="submit" class="btn btn-primary">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Slug auto-généré depuis le nom
    const nameInput = document.querySelector('input[name="name"]');
    const slugInput = document.querySelector('input[name="slug"]');

    if (nameInput && slugInput) {
        nameInput.addEventListener('input', () => {
            const slug = nameInput.value.toLowerCase()
                .normalize('NFD').replace(/[\u0300-\u036f]/g, '')
                .replace(/[^a-z0-9\s-]/g, '')
                .trim().replace(/\s+/g, '-')
                .replace(/-+/g, '-');
            if (!slugInput.value || slugInput.value === slugInput.defaultValue) {
                slugInput.value = slug;
            }
        });
    }

    // Validation Bootstrap
    (function () {
        'use strict';
        window.addEventListener('load', function () {
            const forms = document.getElementsByClassName('needs-validation');
            Array.prototype.forEach.call(forms, function (form) {
                form.addEventListener('submit', function (event) {
                    if (!form.checkValidity()) {
                        event.preventDefault();
                        event.stopPropagation();
                    }
                    form.classList.add('was-validated');
                }, false);
            });
        }, false);
    })();

    // Animation fadeOut sur annulation
    function fadeOutCard(event, link, cardId = 'form-container') {
        event.preventDefault();
        const card = document.getElementById(cardId);
        if (!card) return;
        card.classList.remove('animate__fadeIn', 'animate__rollIn', 'animate__zoomIn');
        card.classList.add('animate__animated', 'animate__fadeOut');

        setTimeout(() => {
            window.location.href = link.href;
        }, 800);
    }
</script>
@endsection
