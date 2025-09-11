<div class="card">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="mb-0">Caractéristiques du produit</h5>
        <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="modal" data-bs-target="#characteristicsModal">
            <i data-feather="edit-3" class="me-1"></i> Gérer
        </button>
    </div>
    <div class="card-body" id="characteristics-preview">
        <p class="text-muted mb-0">Aucune caractéristique n’est disponible.</p>
    </div>
</div>

{{-- Modal --}}
<div class="modal fade" id="characteristicsModal" tabindex="-1" aria-labelledby="characteristicsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-scrollable">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Gérer les caractéristiques</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Fermer"></button>
            </div>

            <div class="modal-body">
                <div id="characteristics-container" class="vstack gap-3">
                    @foreach (old('characteristics', $product->characteristics ?? []) as $i => $char)
                        <div class="border rounded p-3 bg-light characteristic-row" data-existing="1">
                            <div class="row g-3 align-items-end">
                                <div class="col-md-4">
                                    <label class="form-label">Nom</label>
                                    <input type="text" form="product-form" name="characteristics[{{ $i }}][attribute_name]" class="form-control"
                                           value="{{ is_array($char) ? $char['attribute_name'] : $char->attribute_name }}">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label">Valeur</label>
                                    <input type="text" form="product-form" name="characteristics[{{ $i }}][value]" class="form-control"
                                           value="{{ is_array($char) ? $char['value'] : $char->value }}">
                                </div>
                                <div class="col-md-2">
                                    <label class="form-label">Position</label>
                                    <input type="number" form="product-form" name="characteristics[{{ $i }}][position]" class="form-control"
                                           value="{{ is_array($char) ? $char['position'] ?? 0 : $char->position }}" min="0">
                                </div>
                                <div class="col-md-2 d-flex align-items-end">
                                    @if (!empty($char['id']) || (!is_array($char) && $char->id))
                                        <input type="hidden" name="characteristics[{{ $i }}][id]" value="{{ is_array($char) ? $char['id'] : $char->id }}">
                                    @endif
                                    <button type="button" class="btn btn-outline-danger w-100 btn-remove-characteristic" data-id="{{ is_array($char) ? $char['id'] ?? '' : $char->id ?? '' }}" title="Supprimer">
                                        <i data-feather="trash-2"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                {{-- Template --}}
                <template id="characteristic-template">
                    <div class="border rounded p-3 bg-light characteristic-row" data-existing="0">
                        <div class="row g-3 align-items-end">
                            <div class="col-md-4">
                                <label class="form-label">Nom</label>
                                <input type="text" form="product-form" name="characteristics[][attribute_name]" class="form-control" placeholder="Ex: taille">
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Valeur</label>
                                <input type="text" form="product-form" name="characteristics[][value]" class="form-control" placeholder="Ex: M, L, XL">
                            </div>
                            <div class="col-md-2">
                                <label class="form-label">Position</label>
                                <input type="number" form="product-form" name="characteristics[][position]" class="form-control" value="0" min="0">
                            </div>
                            <div class="col-md-2 d-flex align-items-end">
                                <button type="button" class="btn btn-outline-danger w-100 btn-remove-characteristic" title="Supprimer">
                                    <i data-feather="trash-2"></i> Supprimer
                                </button>
                            </div>
                        </div>
                    </div>
                </template>
            </div>

            <div class="modal-footer justify-content-between">
                <input type="hidden" name="_deleted_characteristic_ids" id="deleted-characteristic-ids">
                <button type="button" id="btn-add-characteristic" class="btn btn-outline-secondary">
                    <i data-feather="plus" class="me-1"></i> Ajouter
                </button>
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">
                    <i data-feather="check" class="me-1"></i> Terminer
                </button>
            </div>
        </div>
    </div>
</div>
