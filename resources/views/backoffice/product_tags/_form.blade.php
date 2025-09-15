@csrf

<div class="row g-3">
    <div class="col-md-12">
        <label class="form-label">Tags à créer *</label>
        <textarea name="tags"
                  rows="3"
                  class="form-control @error('tags') is-invalid @enderror"
                  placeholder="Ex: Urgence, Chirurgie, Diagnostic"
                  required>{{ old('tags') }}</textarea>
        <small class="text-muted">Séparez les tags par une virgule. Exemple : <em>Urgence, Chirurgie, Diagnostic</em></small>
        <div class="invalid-feedback">
            @error('tags') {{ $message }} @else Veuillez saisir au moins un tag. @enderror
        </div>
    </div>
</div>
