@csrf

<div class="row">
    {{-- Nom de la catégorie --}}
    <div class="mb-3 col-md-6">
        <label for="name" class="form-label">Nom de la catégorie *</label>
        <input type="text"
               name="name"
               value="{{ old('name', $category->name ?? '') }}"
               class="form-control @error('name') is-invalid @enderror"
               required>
        <div class="invalid-feedback">
            @error('name') {{ $message }} @else Ce champ est requis. @enderror
        </div>
    </div>

    {{-- Position --}}
    <div class="mb-3 col-md-6">
        <label for="position" class="form-label">Position</label>
        <input type="number"
               name="position"
               value="{{ old('position', $category->position ?? 0) }}"
               class="form-control @error('position') is-invalid @enderror">
        @error('position')<div class="text-danger mt-1">{{ $message }}</div>@enderror
    </div>

    {{-- Description --}}
    <div class="mb-3 col-12">
        <label for="description" class="form-label">Description</label>
        <textarea name="description"
                  class="form-control @error('description') is-invalid @enderror"
                  rows="3">{{ old('description', $category->description ?? '') }}</textarea>
        @error('description')<div class="text-danger mt-1">{{ $message }}</div>@enderror
    </div>

    {{-- Sous-catégories dynamiques --}}
    <div class="mb-3 col-12">
        <label class="form-label">Sous-catégories (facultatif)</label>
        <div id="subcategories-wrapper">
            @if(old('subcategories'))
                @foreach(old('subcategories') as $sub)
                    <input type="text" name="subcategories[]" class="form-control mb-2" value="{{ $sub }}" placeholder="Nom de la sous-catégorie">
                @endforeach
            @endif
        </div>
        <button type="button" class="btn btn-outline-primary btn-sm mt-2" id="add-subcategory-btn">
            Ajouter une sous-catégorie
        </button>
    </div>
</div>
