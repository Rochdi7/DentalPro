@extends('layouts.main')

@section('title', 'Ajouter un produit')
@section('breadcrumb-item', 'Produits')
@section('breadcrumb-item-active', 'Nouveau produit')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
@endsection

@section('content')
    <form method="POST" id="product-form" action="{{ route('backoffice.products.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="row">
            {{-- Colonne gauche (plus large) --}}
            <div class="col-lg-8">
                {{-- Description --}}
                <div class="card">
                    <div class="card-header">
                        <h5>Description du produit</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Nom du produit</label>
                            <input type="text" name="title" class="form-control" value="{{ old('title') }}" required>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Catégorie principale</label>
                            <select id="parent_category" class="form-select">
                                <option value="">-- Choisir une catégorie --</option>
                                @foreach ($parents as $parent)
                                    <option value="{{ $parent->id }}">{{ $parent->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sous-catégorie</label>
                            <select name="product_category_id" id="child_category" class="form-select" required>
                                <option value="">-- Choisir une sous-catégorie --</option>
                                @foreach ($children as $child)
                                    <option value="{{ $child->id }}" data-parent="{{ $child->parent_id }}"
                                        @selected(old('product_category_id') == $child->id)>
                                        {{ $child->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-0">
                            <label class="form-label">Description</label>
                            <textarea name="description" id="classic-editor" class="form-control" rows="6">{{ old('description') }}</textarea>
                        </div>
                    </div>
                </div>

                {{-- Prix --}}
                <div class="card">
                    <div class="card-header">
                        <h5>Prix</h5>
                    </div>
                    <div class="card-body row">
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Prix (MAD)</label>
                            <input type="number" name="price" class="form-control" step="0.01" min="0"
                                value="{{ old('price') }}" required>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label class="form-label">Prix avant (MAD)</label>
                            <input type="number" name="old_price" class="form-control" step="0.01" min="0"
                                value="{{ old('old_price') }}">
                        </div>
                        <div class="col-md-12">
                            <label class="form-label">SKU</label>
                            <input type="text" name="sku" class="form-control" value="{{ old('sku') }}">
                        </div>
                    </div>
                </div>
            </div>

            {{-- Colonne droite (plus fine) --}}
            <div class="col-lg-4">
                {{-- Statut --}}
                <div class="card">
                    <div class="card-header">
                        <h5>Statut</h5>
                    </div>
                    <div class="card-body">
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="is_published" name="is_published"
                                value="1" {{ old('is_published', true) ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_published">Publié</label>
                        </div>
                        <div class="form-check form-switch mb-2">
                            <input class="form-check-input" type="checkbox" id="is_hot" name="is_hot" value="1"
                                {{ old('is_hot') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_hot">Produit en vedette</label>
                        </div>
                        <div class="form-check form-switch">
                            <input class="form-check-input" type="checkbox" id="is_occasion" name="is_occasion"
                                value="1" {{ old('is_occasion') ? 'checked' : '' }}>
                            <label class="form-check-label" for="is_occasion"> Produit d’occasion</label>
                        </div>
                    </div>
                </div>

                {{-- Tags --}}
                <div class="card">
                    <div class="card-header">
                        <h5>Tags</h5>
                    </div>
                    <div class="card-body">
                        <select name="tags[]" id="tags-select" class="form-select" multiple>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}" @selected(collect(old('tags'))->contains($tag->id))>
                                    {{ $tag->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>


                {{-- Image principale --}}
                <div class="card">
                    <div class="card-header">
                        <h5>Image principale</h5>
                    </div>
                    <div class="card-body">
                        <input type="file" name="main_image" class="form-control" accept="image/*">
                    </div>
                </div>

                {{-- Galerie --}}
                <div class="card">
                    <div class="card-header">
                        <h5>Galerie</h5>
                    </div>
                    <div class="card-body">
                        <input type="file" name="gallery[]" multiple class="form-control" accept="image/*">
                    </div>
                </div>

                {{-- SEO --}}
                <div class="card">
                    <div class="card-header">
                        <h5>SEO</h5>
                    </div>
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control"
                                value="{{ old('meta_title') }}">
                        </div>
                        <div class="mb-0">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" class="form-control" rows="3">{{ old('meta_description') }}</textarea>
                        </div>
                    </div>
                </div>

                {{-- Caractéristiques dynamiques --}}
                @include('backoffice.products.partials._attributes_modal_create')
            </div>

            {{-- Boutons --}}
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body text-end">
                        <button type="submit" class="btn btn-primary">Enregistrer</button>
                        <a href="{{ route('backoffice.products.index') }}" class="btn btn-outline-secondary">Annuler</a>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
    <script src="{{ asset('build/js/plugins/ckeditor/classic/ckeditor.js') }}"></script>

    <script>
        ClassicEditor
            .create(document.querySelector('#classic-editor'))
            .catch(error => {
                console.error(error);
            });

        document.addEventListener("DOMContentLoaded", function() {
            // Fonction générique d'initialisation
            function initChoices(selector, options = {}) {
                const el = document.querySelector(selector);
                if (el) {
                    new Choices(el, Object.assign({
                        searchPlaceholderValue: 'Rechercher...',
                        noResultsText: 'Aucun résultat trouvé',
                        noChoicesText: 'Aucun choix disponible',
                        itemSelectText: 'Cliquer pour sélectionner'
                    }, options));
                }
            }

            // Initialiser chaque select
            initChoices('#parent_category'); // Catégorie principale
            initChoices('#child_category'); // Sous-catégorie
            initChoices('#tags-select', {
                removeItemButton: true
            }); // Tags (multi)
        });
    </script>

    @include('backoffice.products.partials._attributes_modal_script')

@endsection

<style>
    .ck-editor__editable_inline {
        min-height: 350px;
        /* ajuste la hauteur selon ton besoin */
    }
</style>
