@extends('layouts.main')

@section('title', 'Tags du Blog')
@section('breadcrumb-item', 'Blog')
@section('breadcrumb-item-active', 'Tags')

@section('css')
    <link rel="stylesheet" href="{{ URL::asset('build/css/plugins/style.css') }}">
@endsection

@section('content')

    {{-- Toast (success / error) --}}
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
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">Liste des tags</h5>
                    <a href="{{ route('backoffice.blog_tags.create') }}" class="btn btn-primary">
                        <i class="ti ti-plus me-1"></i> Ajouter un tag
                    </a>
                </div>

                <div class="card-body pt-3">
                  
                    @if($tags->count())
                        <div class="table-responsive">
                            <table class="table table-hover align-middle" id="pc-dt-simple">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Slug</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($tags as $tag)
                                        <tr>
                                            <td><strong>{{ $tag->name }}</strong></td>
                                            <td>{{ $tag->slug }}</td>
                                            <td>
                                                <a href="{{ route('backoffice.blog_tags.edit', $tag) }}" class="avtar avtar-xs btn-link-secondary me-2" title="Modifier">
                                                    <i class="ti ti-edit f-20"></i>
                                                </a>
                                                <form action="{{ route('backoffice.blog_tags.destroy', $tag) }}" method="POST" class="d-inline-block" onsubmit="return confirm('Supprimer ce tag ?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="avtar avtar-xs btn-link-secondary border-0 bg-transparent p-0" title="Supprimer">
                                                        <i class="ti ti-trash f-20"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                        {{-- Pagination --}}
                        <div class="mt-3">
                            {{ $tags->withQueryString()->links() }}
                        </div>
                    @else
                        <p class="text-muted mt-3">Aucun tag trouvé.</p>
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
