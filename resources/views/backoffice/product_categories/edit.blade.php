@extends('layouts.main')

@section('title', 'Modifier une catégorie')
@section('breadcrumb-item', 'Produits')
@section('breadcrumb-item-active', 'Modifier une catégorie')
@section('page-animation', 'animate__fadeIn')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/animate.min.css') }}">
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        @if(session('success'))
            <div class="alert alert-success animate__animated animate__fadeInDown">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div class="alert alert-danger animate__animated animate__shakeX">
                <strong>Veuillez corriger les erreurs ci-dessous.</strong>
            </div>
        @endif

        <form action="{{ route('backoffice.product-categories.update', $category) }}"
              method="POST"
              class="needs-validation animate__animated animate__fadeIn"
              novalidate>
            @csrf
            @method('PUT')

            <div id="form-container" class="card">
                <div class="card-header">
                    <h5 class="mb-0">Modifier la catégorie</h5>
                </div>

                <div class="card-body">
                    {{-- Partiel de formulaire --}}
                    @include('backoffice.product_categories.form', ['category' => $category])

                    {{-- Sous-catégories existantes --}}
                    <div class="mb-3">
                        <label class="form-label">Sous-catégories existantes</label>
                        <ul class="list-group">
                            @forelse ($category->children as $sub)
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    {{ $sub->name }}
                                    <form action="{{ route('backoffice.product-categories.destroy', $sub->id) }}"
                                          method="POST"
                                          onsubmit="return confirm('Supprimer cette sous-catégorie ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-sm btn-danger">Supprimer</button>
                                    </form>
                                </li>
                            @empty
                                <li class="list-group-item">Aucune sous-catégorie.</li>
                            @endforelse
                        </ul>
                    </div>
                </div>

                <div class="card-footer text-end">
                    <a href="{{ route('backoffice.product-categories.index') }}"
                       class="btn btn-secondary">Annuler</a>
                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.getElementById('add-subcategory-btn').addEventListener('click', function () {
        const wrapper = document.getElementById('subcategories-wrapper');
        const input = document.createElement('input');
        input.type = 'text';
        input.name = 'subcategories[]';
        input.placeholder = 'Nom de la sous-catégorie';
        input.className = 'form-control mb-2';
        wrapper.appendChild(input);
    });

    // Bootstrap validation
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
</script>
@endsection
