@extends('layouts.main')

@section('title', 'Modifier le produit')
@section('breadcrumb-item', 'Produits')
@section('breadcrumb-item-active', 'Modifier le produit')

@section('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js/public/assets/styles/choices.min.css" />
@endsection

@section('content')
<form method="POST" id="product-form" action="{{ route('backoffice.products.update', $product) }}"
    enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="row">
        {{-- Colonne gauche --}}
        <div class="col-xl-6">
            {{-- Description --}}
            <div class="card mb-3">
                <div class="card-header"><h5>Description du produit</h5></div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Nom du produit</label>
                        <input type="text" name="title" class="form-control"
                            value="{{ old('title', $product->title) }}" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Catégorie</label>
                        <select name="product_category_id" class="form-select" required>
                            <option value="">Sélectionner une catégorie</option>
                            @foreach ($categories as $parent)
                                <option value="{{ $parent->id }}" @selected(old('product_category_id', $product->product_category_id) == $parent->id)>
                                    {{ $parent->name }}
                                </option>
                                @foreach ($parent->children as $child)
                                    <option value="{{ $child->id }}" @selected(old('product_category_id', $product->product_category_id) == $child->id)>
                                        &nbsp;&nbsp;-&nbsp;&nbsp;{{ $child->name }}
                                    </option>
                                @endforeach
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-0">
                        <label class="form-label">Description</label>
                        <textarea name="description" id="classic-editor" class="form-control">{{ old('description', $product->description) }}</textarea>
                    </div>
                </div>
            </div>

            {{-- Tarification --}}
            <div class="card mb-3">
                <div class="card-header"><h5>Tarification</h5></div>
                <div class="card-body row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Prix (MAD)</label>
                        <input type="number" name="price" class="form-control" step="0.01"
                            value="{{ old('price', $product->price) }}" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label class="form-label">Prix avant (MAD)</label>
                        <input type="number" name="old_price" class="form-control" step="0.01"
                            value="{{ old('old_price', $product->old_price) }}">
                    </div>
                    <div class="col-md-12">
                        <label class="form-label">SKU</label>
                        <input type="text" name="sku" class="form-control"
                            value="{{ old('sku', $product->sku) }}">
                    </div>
                </div>
            </div>

            {{-- Statut --}}
            <div class="card mb-3">
                <div class="card-header"><h5>Statut</h5></div>
                <div class="card-body">
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" name="is_published" id="isPublished" value="1"
                            @checked(old('is_published', $product->is_published))>
                        <label class="form-check-label" for="isPublished">Publié</label>
                    </div>
                    <div class="form-check form-switch mb-2">
                        <input class="form-check-input" type="checkbox" name="is_hot" id="isHot" value="1"
                            @checked(old('is_hot', $product->is_hot))>
                        <label class="form-check-label" for="isHot">Produit en vedette</label>
                    </div>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" name="is_occasion" id="isOccasion" value="1"
                            @checked(old('is_occasion', $product->is_occasion))>
                        <label class="form-check-label" for="isOccasion">Produit d’occasion</label>
                    </div>
                </div>
            </div>
        </div>

        {{-- Colonne droite --}}
        <div class="col-xl-6">
            {{-- Tags --}}
            <div class="card mb-3">
                <div class="card-header"><h5>Tags</h5></div>
                <div class="card-body">
                    <select name="tags[]" class="form-select" multiple id="tags-select">
                        @foreach ($tags as $tag)
                            <option value="{{ $tag->id }}"
                                @selected(collect(old('tags', $product->tags->pluck('id')))->contains($tag->id))>
                                {{ $tag->name }}
                            </option>
                        @endforeach
                    </select>
                </div>
            </div>

            {{-- Image principale --}}
            <div class="card mb-3">
                <div class="card-header"><h5>Image principale</h5></div>
                <div class="card-body">
                    @if ($product->hasMedia('main_image'))
                        <div class="mb-3">
                            <img src="{{ $product->getFirstMediaUrl('main_image', 'thumb') }}"
                                class="img-fluid rounded" style="max-height: 150px;">
                        </div>
                    @endif
                    <input type="file" name="main_image" class="form-control">
                </div>
            </div>

            {{-- Galerie --}}
            <div class="card mb-3">
                <div class="card-header"><h5>Galerie</h5></div>
                <div class="card-body">
                    @if ($product->hasMedia('gallery'))
                        <div class="mb-3 d-flex flex-wrap gap-2">
                            @foreach ($product->getMedia('gallery') as $media)
                                <div class="position-relative" style="width: 100px;">
                                    <img src="{{ $media->getUrl('thumb') }}" class="img-fluid rounded border"
                                        style="max-height: 80px; object-fit: cover; width: 100%;">
                                </div>
                            @endforeach
                        </div>
                    @endif
                    <input type="file" name="gallery[]" multiple class="form-control" accept="image/*">
                </div>
            </div>

            {{-- SEO --}}
            <div class="card mb-3">
                <div class="card-header"><h5>SEO</h5></div>
                <div class="card-body">
                    <div class="mb-3">
                        <label class="form-label">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control"
                            value="{{ old('meta_title', $product->meta_title) }}">
                    </div>
                    <div class="mb-0">
                        <label class="form-label">Meta Description</label>
                        <textarea name="meta_description" class="form-control" rows="3">{{ old('meta_description', $product->meta_description) }}</textarea>
                    </div>
                </div>
            </div>

            {{-- Caractéristiques dynamiques --}}
            @include('backoffice.products.partials._attributes_modal_edit', ['product' => $product])
        </div>

        {{-- Boutons --}}
        <div class="col-12">
            <div class="card mb-3">
                <div class="card-body text-end">
                    <button type="submit" class="btn btn-primary">Mettre à jour</button>
                    <a href="{{ route('backoffice.products.index') }}" class="btn btn-outline-secondary">Annuler</a>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
@include('backoffice.products.partials._attributes_modal_script')
<script src="{{ asset('build/js/plugins/ckeditor/classic/ckeditor.js') }}"></script>
<script>
    // Choices.js pour les tags
    new Choices('#tags-select', {
        removeItemButton: true,
        maxItemCount: 10,
        searchResultLimit: 10,
        renderChoiceLimit: 10
    });

    // CKEditor pour description
    ClassicEditor
        .create(document.querySelector('#classic-editor'))
        .then(editor => {
            editor.ui.view.editable.element.style.minHeight = '350px';
        })
        .catch(error => {
            console.error(error);
        });
</script>
@endsection

<style>
    .ck-editor__editable_inline {
        min-height: 350px;
    }
</style>