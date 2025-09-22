@if ($products->isEmpty())
    <div class="alert alert-info">Votre wishlist est vide.</div>
@else
    <ul class="ps-wishlist__list">
        @foreach ($products as $product)
            @php
                $image = $product->getFirstMediaUrl('images') ?: asset('img/default-product.jpg');
                $price = number_format($product->price, 2);
            @endphp
            <li>
                <div class="ps-product ps-product--wishlist">
                    <div class="ps-product__remove">
                        <a href="javascript:void(0)" class="btn-wishlist active" data-id="{{ $product->id }}">
                            <i class="icon-cross"></i>
                        </a>
                    </div>
                    <div class="ps-product__thumbnail">
                        <a class="ps-product__image" href="{{ route('product.show', $product->slug) }}">
                            <figure><img src="{{ $image }}" alt="{{ $product->name }}"></figure>
                        </a>
                    </div>
                    <div class="ps-product__content">
                        <h5 class="ps-product__title">
                            <a href="{{ route('product.show', $product->slug) }}">{{ $product->name }}</a>
                        </h5>
                        <div class="ps-product__row">
                            <div class="ps-product__label">Prix :</div>
                            <div class="ps-product__value">
                                <span class="ps-product__price">{{ $price }} MAD</span>
                            </div>
                        </div>
                        <div class="ps-product__row ps-product__stock">
                            <div class="ps-product__label">Stock :</div>
                            <div class="ps-product__value"><span class="ps-product__in-stock">Disponible</span></div>
                        </div>
                        <div class="ps-product__cart">
                            <button class="ps-btn btn-cart" data-id="{{ $product->id }}">Ajouter au panier</button>
                        </div>
                        <div class="ps-product__row ps-product__quantity">
                            <div class="ps-product__label">Quantité :</div>
                            <div class="ps-product__value">1</div>
                        </div>
                        <div class="ps-product__row ps-product__subtotal">
                            <div class="ps-product__label">Sous-total :</div>
                            <div class="ps-product__value">{{ $price }} MAD</div>
                        </div>
                    </div>
                </div>
            </li>
        @endforeach
    </ul>
@endif
