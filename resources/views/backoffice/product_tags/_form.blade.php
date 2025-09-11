@csrf

<div class="row g-3">
    <div class="col-md-6">
        <label class="form-label">Nom du tag *</label>
        <input type="text" name="name"
               class="form-control @error('name') is-invalid @enderror"
               value="{{ old('name', $tag->name ?? '') }}" required>
        <div class="invalid-feedback">
            @error('name') {{ $message }} @else Ce champ est requis. @enderror
        </div>
    </div>

    <div class="col-md-6">
        <label class="form-label">Slug (optionnel)</label>
        <input type="text" name="slug"
               class="form-control @error('slug') is-invalid @enderror"
               value="{{ old('slug', $tag->slug ?? '') }}">
        <div class="invalid-feedback">
            @error('slug') {{ $message }} @else Slug invalide. @enderror
        </div>
    </div>
</div>
