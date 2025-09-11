@foreach ($products as $product)
<tr>
    <td class="text-end">{{ $loop->iteration }}</td>
    <td>
        <div class="row">
            <div class="col-auto pe-0">
                <img src="{{ $product->getFirstMediaUrl('main_image', 'thumb') ?: asset('build/images/placeholder.jpg') }}"
                     class="wid-40 rounded" alt="product-image">
            </div>
            <div class="col">
                <h6 class="mb-1">{{ $product->title }}</h6>
                <p class="text-muted f-12 mb-0">{{ Str::limit($product->description, 40) }}</p>
            </div>
        </div>
    </td>
    <td>{{ $product->category->name ?? '-' }}</td>
    <td class="text-end">
        <span class="text-success fw-bold">${{ number_format($product->price, 2) }}</span>
        @if($product->old_price)
            <span class="text-muted text-decoration-line-through f-12 ms-2">${{ number_format($product->old_price, 2) }}</span>
        @endif
    </td>
    <td class="text-center">
        @if($product->is_published)
            <i class="ph-duotone ph-check-circle text-success f-24" title="Published"></i>
        @else
            <i class="ph-duotone ph-x-circle text-danger f-24" title="Draft"></i>
        @endif
    </td>
    <td class="text-center">
        @include('backoffice.products._actions', ['product' => $product])
    </td>
</tr>
@endforeach
