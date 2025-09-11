<div class="prod-action-links">
    <ul class="list-inline me-auto mb-0">
        <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Edit">
            <a href="{{ route('backoffice.products.edit', $product) }}"
               class="avtar avtar-xs btn-link-success btn-pc-default">
                <i class="ti ti-edit-circle f-18"></i>
            </a>
        </li>
        <li class="list-inline-item align-bottom" data-bs-toggle="tooltip" title="Delete">
            <form action="{{ route('backoffice.products.destroy', $product) }}" method="POST" onsubmit="return confirm('Delete this product?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="avtar avtar-xs btn-link-danger btn-pc-default">
                    <i class="ti ti-trash f-18"></i>
                </button>
            </form>
        </li>
    </ul>
</div>
