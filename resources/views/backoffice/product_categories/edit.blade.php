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
                    {{-- Formulaire principal --}}
                    @include('backoffice.product_categories.form', ['category' => $category])

                    {{-- 🔽 Sous-catégories modifiables --}}
                    <div class="mb-4">
                        <label class="form-label">Sous-catégories existantes</label>
                        <div id="existing-subcategories">
                            @forelse ($category->children as $sub)
                                <div class="input-group mb-2">
                                    <input type="text"
                                           class="form-control"
                                           name="existing_subcategories[{{ $sub->id }}]"
                                           value="{{ $sub->name }}"
                                           required>
                                    <button type="button"
                                            class="btn btn-outline-danger"
                                            onclick="removeExistingSubcategory(this, '{{ route('backoffice.product-categories.destroy', $sub->id) }}')">
                                        Supprimer
                                    </button>
                                </div>
                            @empty
                                <p class="text-muted">Aucune sous-catégorie.</p>
                            @endforelse
                        </div>
                    </div>

                    
                </div>

                <div class="card-footer text-end">
                    <a href="{{ route('backoffice.product-categories.index') }}" class="btn btn-secondary">Annuler</a>
                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection

@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const addBtn = document.getElementById('add-subcategory-btn');
        const wrapper = document.getElementById('subcategories-wrapper');

        // ✅ Ajout d'un champ dynamique avec bouton "Supprimer"
        if (addBtn && wrapper) {
            addBtn.addEventListener('click', function () {
                const group = document.createElement('div');
                group.className = 'input-group mb-2';

                const input = document.createElement('input');
                input.type = 'text';
                input.name = 'subcategories[]';
                input.placeholder = 'Nom de la sous-catégorie';
                input.className = 'form-control';
                input.required = true;

                const button = document.createElement('button');
                button.type = 'button';
                button.className = 'btn btn-outline-danger';
                button.textContent = 'Supprimer';
                button.onclick = function () {
                    group.remove();
                };

                group.appendChild(input);
                group.appendChild(button);
                wrapper.appendChild(group);
            });
        }

        // ✅ Suppression d'une sous-catégorie existante via formulaire POST
        window.removeExistingSubcategory = function (button, deleteUrl) {
            if (confirm("Confirmer la suppression de cette sous-catégorie ?")) {
                const form = document.createElement('form');
                form.method = 'POST';
                form.action = deleteUrl;

                const csrf = document.createElement('input');
                csrf.type = 'hidden';
                csrf.name = '_token';
                csrf.value = '{{ csrf_token() }}';

                const method = document.createElement('input');
                method.type = 'hidden';
                method.name = '_method';
                method.value = 'DELETE';

                form.appendChild(csrf);
                form.appendChild(method);
                document.body.appendChild(form);
                form.submit();
            }
        };

        // ✅ Bootstrap validation
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
    });
</script>
@endsection
