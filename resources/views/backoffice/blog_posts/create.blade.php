@extends('layouts.main')

@section('content')
<div class="container-fluid">
  <form action="{{ route('backoffice.blog_posts.store') }}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="card mb-4">
      <div class="card-header"><h5>Nouvel article</h5></div>
      <div class="card-body">

        @include('backoffice.blog_posts._form', ['post' => null])

      </div>
    </div>

    <div class="text-end">
      <a href="{{ route('backoffice.blog_posts.index') }}" class="btn btn-secondary">Annuler</a>
      <button type="submit" class="btn btn-primary">Publier</button>
    </div>
  </form>
</div>
@section('scripts')
  <script src="https://cdn.jsdelivr.net/npm/choices.js/public/assets/scripts/choices.min.js"></script>
  <script src="{{ asset('build/js/plugins/ckeditor/classic/ckeditor.js') }}"></script>

  <script>
    ClassicEditor
      .create(document.querySelector('#classic-editor'))
      .catch(error => {
        console.error(error);
      });

    document.addEventListener("DOMContentLoaded", function () {
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

      initChoices('#blog_category_id'); // Catégorie
      initChoices('#tags-select', { removeItemButton: true }); // Tags multi
    });
  </script>
@endsection

@endsection
