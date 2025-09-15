@extends('layouts.main')

@section('title', 'Modifier article')
@section('breadcrumb-item', 'Blog')
@section('breadcrumb-item-active', 'Modifier article')

@section('css')
    <!-- Select2 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
@endsection

@section('content')
<div class="container-fluid">
  <form action="{{ route('backoffice.blog_posts.update', $post) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="card mb-4">
      <div class="card-header"><h5>Modifier l’article</h5></div>
      <div class="card-body">

        {{-- Inclure le formulaire --}}
        @include('backoffice.blog_posts._form', ['post' => $post])

      </div>
    </div>

    <div class="text-end">
      <a href="{{ route('backoffice.blog_posts.index') }}" class="btn btn-secondary">Annuler</a>
      <button type="submit" class="btn btn-primary">Mettre à jour</button>
    </div>
  </form>
</div>
@endsection

@section('scripts')
    <!-- Select2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <!-- CKEditor -->
    <script src="{{ asset('build/js/plugins/ckeditor/classic/ckeditor.js') }}"></script>

    <script>
    $(document).ready(function () {
        // Select2 pour catégorie
        $('#blog_category_id').select2({
            placeholder: "Choisir une catégorie",
            allowClear: true
        });

        // Select2 pour tags (possibilité d'ajouter des nouveaux tags)
        $('#tags-select').select2({
            placeholder: "Choisir ou ajouter des tags",
            tags: true,
            tokenSeparators: [',', ' ']
        });

        // Prévisualisation image principale
        document.getElementById('image')?.addEventListener('change', function(e){
            let reader = new FileReader();
            reader.onload = function(e){
                let img = document.getElementById('image-preview');
                if(img){
                    img.setAttribute('src', e.target.result);
                    img.style.display = 'block';
                }
            }
            reader.readAsDataURL(this.files[0]);
        });

        // CKEditor sur le contenu
        ClassicEditor
            .create(document.getElementById('classic-editor'))
            .catch(error => { console.error(error); });
    });
    </script>
@endsection
