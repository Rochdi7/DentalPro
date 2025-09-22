<li class="ps-cart__item" data-id="{{ $product->id }}">
    <div class="ps-product--mini-cart">

        {{-- Image produit --}}
        <a class="ps-product__thumbnail" href="{{ route('product.show', $product->slug) }}">
            <img src="{{ $product->getFirstMediaUrl('main_image') ?: asset('assets/img/default-product.jpg') }}"
                 alt="{{ e($product->title) }}" />
        </a>

        {{-- Contenu produit --}}
        <div class="ps-product__content">
            <a class="ps-product__name" href="{{ route('product.show', $product->slug) }}">
                {{ $product->title }}
            </a>

            <p class="ps-product__meta">
                <span class="ps-product__price d-block">
                    {{ number_format((float) $product->price, 2, '.', ' ') }} DH
                    <small class="text-muted">× {{ (int) $item['quantity'] }}</small>
                </span>
                <strong class="d-block text-dark">
                    = {{ number_format((float) $product->price * (int) $item['quantity'], 2, '.', ' ') }} DH
                </strong>
            </p>
        </div>

        {{-- Supprimer du panier --}}
        <a class="ps-product__remove js-remove-cart"
           href="javascript:void(0)"
           data-id="{{ $product->id }}"
           role="button"
           aria-label="Supprimer {{ e($product->title) }} du panier">
            <i class="icon-cross"></i>
        </a>

    </div>
</li>
