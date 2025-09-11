@extends('layouts.main')

@section('title', 'Ajouter une catégorie')
@section('breadcrumb-item', 'Produits')
@section('breadcrumb-item-active', 'Nouvelle catégorie')
@section('page-animation', 'animate__fadeIn')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/animate.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        @if($errors->any())
            <div class="alert alert-danger animate__animated animate__shakeX">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('backoffice.product-categories.store') }}"
              method="POST"
              class="needs-validation animate__animated animate__fadeIn"
              id="category-form"
              novalidate>
            @csrf

            <div id="category-form-card" class="card">
                <div class="card-header">
                    <h5 class="mb-0">Formulaire de catégorie</h5>
                </div>

                <div class="card-body">
                    <div class="row">
                        {{-- Nom --}}
                        <div class="mb-3 col-md-6">
                            <label for="name" class="form-label">Nom de la catégorie *</label>
                            <input type="text" name="name" value="{{ old('name') }}"
                                   class="form-control @error('name') is-invalid @enderror" required>
                            <div class="invalid-feedback">
                                @error('name') {{ $message }} @else Ce champ est requis. @enderror
                            </div>
                        </div>

                        {{-- Position --}}
                        <div class="mb-3 col-md-6">
                            <label for="position" class="form-label">Position</label>
                            <input type="number" name="position" value="{{ old('position', 0) }}"
                                   class="form-control @error('position') is-invalid @enderror">
                            @error('position') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                        </div>

                        {{-- Description --}}
                        <div class="mb-3 col-12">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="description"
                                      class="form-control @error('description') is-invalid @enderror"
                                      rows="3">{{ old('description') }}</textarea>
                            @error('description') <div class="text-danger mt-1">{{ $message }}</div> @enderror
                        </div>

                        {{-- Sous-catégories dynamiques --}}
                        <div class="mb-3 col-12">
                            <label class="form-label">Sous-catégories (facultatif)</label>
                            <div id="subcategories-wrapper"></div>
                            <button type="button" class="btn btn-outline-primary btn-sm mt-2" id="add-subcategory-btn">
                                Ajouter une sous-catégorie
                            </button>
                        </div>
                    </div>
                </div>

                <div class="card-footer text-end">
                    <a href="{{ route('backoffice.product-categories.index') }}"
                       class="btn btn-light"
                       onclick="fadeOutCard(event, this, 'category-form-card')">Annuler</a>
                    <button type="submit" class="btn btn-success">Enregistrer</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    // Ajouter sous-catégorie
    document.getElementById('add-subcategory-btn').addEventListener('click', function () {
        const wrapper = document.getElementById('subcategories-wrapper');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'subcategories[]';
        input.placeholder = 'Nom de la sous-catégorie';
        input.className = 'form-control mb-2';
        wrapper.appendChild(input);
    });

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
    function fadeOutCard(event, link, cardId = 'category-form-card') {
        event.preventDefault();
        const card = document.getElementById(cardId);
        if (!card) return;

        card.classList.remove('animate__fadeIn', 'animate__zoomIn');
        card.classList.add('animate__animated', 'animate__fadeOut');

        setTimeout(() => {
            window.location.href = link.href;
        }, 800);
    }
</script>
@endsection
