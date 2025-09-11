<div class="mb-3">
  <label class="form-label">Titre</label>
  <input type="text" name="title" class="form-control" value="{{ old('title', $post->title ?? '') }}" required>
</div>

<div class="mb-3">
  <label class="form-label">Slug (optionnel)</label>
  <input type="text" name="slug" class="form-control" value="{{ old('slug', $post->slug ?? '') }}">
</div>

<div class="mb-3">
  <label class="form-label">Catégorie</label>
  <select name="blog_category_id" class="form-select">
    <option value="">-- Choisir --</option>
    @foreach ($categories as $cat)
      <option value="{{ $cat->id }}" @selected(old('blog_category_id', $post->blog_category_id ?? '') == $cat->id)>
        {{ $cat->name }}
      </option>
    @endforeach
  </select>
</div>

<div class="mb-3">
  <label class="form-label">Tags</label>
  <select name="tag_ids[]" class="form-select" multiple>
    @foreach ($tags as $tag)
      <option value="{{ $tag->id }}"
        @selected(collect(old('tag_ids', $post?->tags->pluck('id')->toArray() ?? []))->contains($tag->id))>
        {{ $tag->name }}
      </option>
    @endforeach
  </select>
</div>

<div class="mb-3">
  <label class="form-label">Extrait</label>
  <textarea name="excerpt" class="form-control" rows="3">{{ old('excerpt', $post->excerpt ?? '') }}</textarea>
</div>

<div class="mb-3">
  <label class="form-label">Contenu</label>
  <textarea name="body" id="classic-editor" class="form-control" rows="10" required>
    {{ old('body', $post->body ?? '') }}
  </textarea>
</div>

<div class="mb-3">
  <label class="form-label">Vidéo (URL)</label>
  <input type="url" name="video_url" class="form-control" value="{{ old('video_url', $post->video_url ?? '') }}">
</div>

<div class="mb-3">
  <label class="form-label">Fournisseur de vidéo</label>
  <input type="text" name="video_provider" class="form-control" value="{{ old('video_provider', $post->video_provider ?? '') }}">
</div>

<div class="mb-3">
  <label class="form-label">Image principale</label>
  <input type="file" name="cover" class="form-control">

  @if (isset($post) && $post->getFirstMediaUrl('cover'))
    <div class="mt-2">
      <small class="text-muted d-block mb-1">Image actuelle :</small>
      <img src="{{ $post->getFirstMediaUrl('cover', 'thumb') }}" alt="Image principale" style="max-height: 150px;">
    </div>
  @endif
</div>


<div class="mb-3">
  <label class="form-label">Galerie (images multiples)</label>
  <input type="file" name="images[]" class="form-control" multiple>
</div>

<div class="mb-3">
  <label class="form-label">Titre SEO</label>
  <input type="text" name="meta_title" class="form-control" value="{{ old('meta_title', $post->meta_title ?? '') }}">
</div>

<div class="mb-3">
  <label class="form-label">Description SEO</label>
  <textarea name="meta_description" class="form-control" rows="2">{{ old('meta_description', $post->meta_description ?? '') }}</textarea>
</div>

<div class="form-check mb-3">
  <input class="form-check-input" type="checkbox" name="is_published" value="1" id="is_published"
    {{ old('is_published', $post->is_published ?? false) ? 'checked' : '' }}>
  <label class="form-check-label" for="is_published">
    Publier l’article
  </label>
</div>

<div class="mb-3">
  <label class="form-label">Date de publication (optionnel)</label>
  <input type="datetime-local" name="published_at" class="form-control"
    value="{{ old('published_at', isset($post->published_at) ? $post->published_at->format('Y-m-d\TH:i') : '') }}">
</div>

