@extends('layouts.main')

@section('title', 'Articles du Blog')
@section('breadcrumb-item', 'Blog')
@section('breadcrumb-item-active', 'Articles')

@section('css')
  <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/style.css') }}">
@endsection

@section('content')

  {{-- Toast message --}}
  @if(session('toast') || session('success') || session('error'))
    <div class="position-fixed top-0 end-0 p-3" style="z-index: 99999">
      <div id="liveToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
          <img src="{{ asset('favicon.svg') }}" class="img-fluid me-2" alt="favicon" style="width: 17px">
          <strong class="me-auto">Backoffice</strong>
          <small>Just now</small>
          <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
          {{ session('toast') ?? session('success') ?? session('error') }}
        </div>
      </div>
    </div>
  @endif

  <div class="row">
    <div class="col-12">
      <div class="card table-card">
        <div class="card-header">
          <div class="d-sm-flex align-items-center justify-content-between">
            <h5 class="mb-3 mb-sm-0">Liste des articles</h5>
            <a href="{{ route('backoffice.blog_posts.create') }}" class="btn btn-primary">
              <i class="ti ti-plus me-1"></i> Ajouter un article
            </a>
          </div>
        </div>

        <div class="card-body pt-3">
          {{-- Search --}}
          @if($posts->count())
            <div class="table-responsive">
              <table class="table table-hover align-middle" id="pc-dt-simple">
                <thead>
                  <tr>
                    <th>Titre</th>
                    <th>Catégorie</th>
                    <th>Statut</th>
                    <th>Date de publication</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($posts as $post)
                    <tr>
                      <td>
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0">
                            <img src="{{ URL::asset('build/images/user/avatar-1.jpg') }}" alt="article avatar" class="img-radius wid-40" />
                          </div>
                          <div class="flex-grow-1 ms-3">
                            <h6 class="mb-0">{{ $post->title }}</h6>
                          </div>
                        </div>
                      </td>
                      <td>{{ $post->category?->name ?? '-' }}</td>
                      <td>
                        @if($post->is_published)
                          <span class="badge bg-success">Publié</span>
                        @else
                          <span class="badge bg-secondary">Brouillon</span>
                        @endif
                      </td>
                      <td>{{ $post->published_at?->format('d/m/Y H:i') ?? '-' }}</td>
                      <td>
                        <a href="{{ route('backoffice.blog_posts.edit', $post) }}" class="avtar avtar-xs btn-link-secondary me-2" title="Modifier">
                          <i class="ti ti-edit f-20"></i>
                        </a>
                        <form action="{{ route('backoffice.blog_posts.destroy', $post) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Supprimer cet article ?')">
                          @csrf
                          @method('DELETE')
                          <button class="avtar avtar-xs btn-link-secondary border-0 bg-transparent p-0" title="Supprimer">
                            <i class="ti ti-trash f-20"></i>
                          </button>
                        </form>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          @else
            <p class="text-muted mt-3">Aucun article trouvé.</p>
          @endif
        </div>
      </div>
    </div>
  </div>

@endsection

@section('scripts')
  <script type="module">
    import { DataTable } from "/build/js/plugins/module.js";

    window.dt = new DataTable("#pc-dt-simple", {
      paging: true,
      searching: true,
      lengthChange: true,
      pageLength: 10,
      lengthMenu: [5, 10, 25, 50, 100],
      order: [],
      language: {
        search: "Rechercher:",
        lengthMenu: "Afficher _MENU_ éléments",
        info: "Affichage de _START_ à _END_ sur _TOTAL_ éléments",
        infoEmpty: "Aucun élément à afficher",
        infoFiltered: "(filtré de _MAX_ éléments au total)",
        paginate: { previous: "Précédent", next: "Suivant" },
        zeroRecords: "Aucun résultat trouvé"
      }
    });
  </script>

  <script>
    document.addEventListener("DOMContentLoaded", function () {
      const toastEl = document.getElementById('liveToast');
      if (toastEl) {
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
      }
    });
  </script>
@endsection
