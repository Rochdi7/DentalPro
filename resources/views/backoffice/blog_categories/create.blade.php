@extends('layouts.main')

@section('title', 'Créer une catégorie')
@section('breadcrumb-item', 'Blog')
@section('breadcrumb-item-active', 'Nouvelle Catégorie')
@section('page-animation', 'animate__fadeIn')

@section('css')
  <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/animate.min.css') }}">
@endsection

@section('content')
<div class="row">
  <div class="col-md-12">
    {{-- Affichage erreurs --}}
    @if ($errors->any())
      <div class="alert alert-danger animate__animated animate__shakeX">
        <ul class="mb-0">
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form action="{{ route('backoffice.blog_categories.store') }}" method="POST" class="needs-validation" novalidate>
      @csrf

      <div id="blog-category-form-card" class="card animate__animated animate__fadeIn">
        <div class="card-header">
          <h5 class="mb-0">Ajouter une catégorie</h5>
        </div>

        <div class="card-body">
          <div class="mb-3">
            <label for="name" class="form-label">Nom de la catégorie</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror"
                   id="name" name="name" value="{{ old('name') }}" required>
            <div class="invalid-feedback">
              @error('name') {{ $message }} @else Veuillez saisir un nom. @enderror
            </div>
          </div>

          <div class="mb-3">
            <label for="slug" class="form-label">Slug (optionnel)</label>
            <input type="text" class="form-control @error('slug') is-invalid @enderror"
                   id="slug" name="slug" value="{{ old('slug') }}">
            <div class="invalid-feedback">
              @error('slug') {{ $message }} @else Slug invalide. @enderror
            </div>
          </div>

          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control @error('description') is-invalid @enderror"
                      id="description" name="description" rows="3">{{ old('description') }}</textarea>
            <div class="invalid-feedback">
              @error('description') {{ $message }} @else Veuillez entrer une description. @enderror
            </div>
          </div>

          <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" checked>
            <label class="form-check-label" for="is_active">Catégorie active</label>
          </div>
        </div>

        <div class="card-footer text-end">
          <a href="{{ route('backoffice.blog_categories.index') }}"
             class="btn btn-secondary"
             onclick="fadeOutCard(event, this, 'blog-category-form-card')">Annuler</a>
          <button type="submit" class="btn btn-primary">Enregistrer</button>
        </div>
      </div>
    </form>
  </div>
</div>
@endsection

@section('scripts')
<script>
  // Slug auto
  document.getElementById('name').addEventListener('input', function () {
    const name = this.value;
    const slug = name.toLowerCase()
      .normalize('NFD').replace(/[\u0300-\u036f]/g, '')
      .replace(/[^a-z0-9\s-]/g, '')
      .trim().replace(/\s+/g, '-')
      .replace(/-+/g, '-');
    const slugInput = document.getElementById('slug');
    if (!slugInput.value || slugInput.value === slugInput.defaultValue) {
      slugInput.value = slug;
    }
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

  // Animation fadeOut sur Annuler
  function fadeOutCard(event, link, cardId = 'blog-category-form-card') {
    event.preventDefault();
    const card = document.getElementById(cardId);
    if (!card) return;

    card.classList.remove('animate__fadeIn', 'animate__zoomIn', 'animate__rollIn');
    card.classList.add('animate__animated', 'animate__fadeOut');

    setTimeout(() => {
      window.location.href = link.href;
    }, 800);
  }
</script>
@endsection
