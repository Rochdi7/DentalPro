document.addEventListener("DOMContentLoaded", function () {
    const CSRF = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    const $body = $(document.body);
    
    function fmt(n) { 
        return (parseFloat(n || 0)).toFixed(2); 
    }

    function formatTotal(total) {
        if (!total) return '0.00 MAD';
        if (typeof total === 'string' && total.includes('MAD')) return total;
        const numTotal = parseFloat(total);
        return isNaN(numTotal) ? '0.00 MAD' : `${fmt(numTotal)} MAD`;
    }

    function updateWishlistCount(newCount) {
        $('.wishlist-count').text(newCount ?? 0);
        const $wlTitle = $('.ps-wishlist__title');
        if ($wlTitle.length) {
            $wlTitle.text(`Ma Wishlist (${newCount ?? 0})`);
        }
    }

    function removeFromWishlistUI(productId, newCount) {
        const $wrap = $('.ps-wishlist__content');
        if (!$wrap.length) return;

        $wrap.find(`.btn-wishlist[data-id="${productId}"], .js-remove-wishlist[data-id="${productId}"]`).each(function () {
            $(this).closest('tr, li, .ps-product').remove();
        });

        const stillHasItems = $wrap.find('li').length || $wrap.find('tbody tr').length;
        if (!stillHasItems || (typeof newCount !== 'undefined' && parseInt(newCount, 10) === 0)) {
            $wrap.html('<div class="alert alert-info">Votre wishlist est vide. <a href="/">Commencer vos achats</a>.</div>');
        }
    }

    function isCartPage() {
        return $('.ps-shopping').length > 0 && $('.ps-table--product').length > 0;
    }

    function validateResponse(data) {
        if (!data) return null;
        if (typeof data === 'string' && data.trim().startsWith('<!DOCTYPE')) return null;
        if (typeof data === 'string') {
            try {
                return JSON.parse(data);
            } catch (e) {
                return null;
            }
        }
        return data;
    }

    function updateMiniCartUI(data, options = {}) {
        data = validateResponse(data);
        if (!data) return;

        const itemCount = parseInt(data.count || 0, 10);
        $('.cart-count').text(itemCount);

        const $miniCartItems = $('#mini-cart-items');
        
        if (data.html) {
            $miniCartItems.html(data.html);
        } else if (data.items && Array.isArray(data.items) && data.items.length > 0) {
            let itemsHtml = '';
            data.items.forEach(function (item) {
                const name = (item.name ?? '').trim() || '—';
                const price = parseFloat(item.price || 0);
                const quantity = parseInt(item.quantity || item.qty || 1, 10);
                const subtotal = price * quantity;

                itemsHtml += `
                <li class="ps-cart__item" data-id="${item.id}">
                    <div class="ps-product--mini-cart">
                        <a class="ps-product__thumbnail" href="${item.url || '#'}">
                            <img src="${item.image || '/images/placeholder.jpg'}" alt="${name}" />
                        </a>
                        <div class="ps-product__content">
                            <a class="ps-product__name" href="${item.url || '#'}">${name}</a>
                            <p class="ps-product__meta">
                                <span class="ps-product__price d-block">
                                    ${fmt(price)} MAD <small class="text-muted">× ${quantity}</small>
                                </span>
                                <strong class="d-block text-dark">= ${fmt(subtotal)} MAD</strong>
                            </p>
                        </div>
                        <a class="ps-product__remove js-remove-cart" href="javascript:void(0)" data-id="${item.id}">
                            <i class="icon-cross"></i>
                        </a>
                    </div>
                </li>`;
            });
            $miniCartItems.html(itemsHtml);
        } else if (itemCount === 0) {
            $miniCartItems.html('<li class="ps-cart__item text-center"><span>Votre panier est vide.</span></li>');
        }

        $('.cart-total').text(formatTotal(data.total));

        if (!options.isHover) {
            $('.ps-cart--mini').addClass('active');
        }
    }

    function updateCartPageUI(data, removedId = null, forceUpdate = false) {
        data = validateResponse(data);
        if (!data) return;

        if (!forceUpdate && !removedId) return;

        const $title = $('.ps-shopping__title sup');
        if ($title.length && typeof data.count !== 'undefined') {
            $title.text(`(${data.count})`);
        }

        if (typeof data.total !== 'undefined') {
            const totalText = formatTotal(data.total);
            $('.ps-shopping__box .ps-shopping__row .ps-shopping__price').text(totalText);
        }

        if (removedId) {
            $(`.js-remove-cart[data-id="${removedId}"]`).closest('tr, li').remove();
        }

        if (forceUpdate) {
            const itemsLen = (data.items?.length || 0);
            if (itemsLen === 0 || (typeof data.count !== 'undefined' && data.count === 0)) {
                const $contentCol = $('.col-12.col-md-7.col-lg-9').first();
                $contentCol.find('.ps-shopping__table, .ps-shopping__list').remove();
                if (!$contentCol.find('.js-cart-empty').length) {
                    $contentCol.prepend('<div class="alert alert-info mb-4 js-cart-empty">Votre panier est vide. <a href="/">Continuer vos achats</a>.</div>');
                }
                $('.ps-shopping__button .ps-btn').prop('disabled', true);
                return;
            }

            if (data.items && data.items.length) {
                data.items.forEach(function (item) {
                    const $row = $(`.ps-table--product .js-remove-cart[data-id="${item.id}"]`).closest('tr');
                    if ($row.length) {
                        $row.find('.js-cart-qty').val(item.quantity || item.qty);
                        $row.find('.ps-product__subtotal').text(formatTotal(item.subtotal));
                    }

                    const $li = $(`.ps-shopping__list .js-remove-cart[data-id="${item.id}"]`).closest('li');
                    if ($li.length) {
                        $li.find('.js-cart-qty').val(item.quantity || item.qty);
                        $li.find('.ps-product__row.ps-product__subtotal .ps-product__value').text(formatTotal(item.subtotal));
                    }
                });
            }
        }
    }

    function handleCartResponse(data, justRemovedId = null, options = {}) {
        data = validateResponse(data);
        if (!data || (typeof data === 'object' && Object.keys(data).length === 0)) return;
        
        updateMiniCartUI(data, options);

        if (isCartPage()) {
            const shouldUpdateCartPage = justRemovedId || options.forceCartPageUpdate;
            updateCartPageUI(data, justRemovedId, shouldUpdateCartPage);
        }
    }

    function findQuantityInput($btn, productId) {
        let $qtyInput = null;

        if ($btn.closest('#popupQuickview').length) {
            $qtyInput = $('#popupQuickview .ps-product__quantity input[name="quantity"]');
        }

        if (!$qtyInput?.length) {
            $qtyInput = $(`.ps-product__quantity[data-product-id="${productId}"] input[name="quantity"]`);
        }

        if (!$qtyInput?.length) {
            const $productContainer = $btn.closest('.ps-product, .ps-section__product');
            if ($productContainer.length) {
                const selectors = ['input[name="quantity"]', '.quantity', '.js-product-qty', '.ps-product__quantity input'];
                for (let selector of selectors) {
                    $qtyInput = $productContainer.find(selector).filter(':visible').first();
                    if ($qtyInput?.length) break;
                }
            }
        }

        if (!$qtyInput?.length) {
            const $parent = $btn.closest('.ps-product__actions, .ps-product__group-mobile, .row, .col-12');
            if ($parent.length) {
                $qtyInput = $parent.find('input[name="quantity"], .quantity, .js-product-qty').filter(':visible').first();
            }
        }

        if (!$qtyInput?.length) {
            const $card = $btn.closest('.ps-product--standard, .ps-product');
            if ($card.length && !$card.find('input[name="quantity"], .quantity, .js-product-qty').length) {
                return 1;
            }
        }

        let qty = 1;
        if ($qtyInput?.length) {
            qty = parseInt($qtyInput.val() || '1', 10);
            if (!Number.isFinite(qty) || qty < 1) qty = 1;
        }

        return { qty, $qtyInput };
    }

    const cartTrigger = document.getElementById("cart-mini");
    if (cartTrigger?.dataset.miniUrl) {
        let hoverTimeout;
        
        cartTrigger.addEventListener("mouseenter", function () {
            clearTimeout(hoverTimeout);
            
            fetch(cartTrigger.dataset.miniUrl)
                .then(res => {
                    if (!res.ok) throw new Error(`HTTP ${res.status}`);
                    const contentType = res.headers.get('content-type');
                    if (!contentType?.includes('application/json')) throw new Error('Non-JSON response');
                    return res.json();
                })
                .then(data => updateMiniCartUI(data, { isHover: true }))
                .catch(() => {});
        });
    }

    $body.off('click.addToCart').on('click.addToCart', '.btn-cart', function (e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();

        const $btn = $(this);
        const productId = parseInt($btn.data('id'), 10);
        
        if (!productId || $btn.data('busy') || $btn.hasClass('processing') || $btn.prop('disabled')) return false;
        
        $btn.data('busy', true).addClass('processing').prop('disabled', true);

        const qtyResult = findQuantityInput($btn, productId);
        const qty = typeof qtyResult === 'number' ? qtyResult : qtyResult.qty;
        const $qtyInput = typeof qtyResult === 'object' ? qtyResult.$qtyInput : null;

        $('.btn-cart').prop('disabled', true);

        $.ajax({
            url: "/add-to-cart",
            method: "POST",
            data: {
                _token: CSRF,
                product_id: productId,
                quantity: qty,
                action: 'set',
                timestamp: Date.now()
            },
            timeout: 15000,
            cache: false,
            dataType: 'json'
        })
        .done(function (response) {
            handleCartResponse(response);
            
            if ($qtyInput?.length) {
                setTimeout(() => $qtyInput.val(1), 100);
            }
            
            if ($btn.closest('#popupQuickview').length) {
                setTimeout(() => $('#popupQuickview').modal('hide'), 1000);
            }
        })
        .fail(function (xhr, status) {
            let errorMessage = "Erreur lors de l'ajout au panier";
            if (status === 'timeout') {
                errorMessage = "La requête a pris trop de temps. Veuillez réessayer.";
            } else if (xhr.responseJSON?.message) {
                errorMessage = xhr.responseJSON.message;
            }
            alert(errorMessage);
        })
        .always(function () {
            setTimeout(function() {
                $('.btn-cart').prop('disabled', false).data('busy', false).removeClass('processing');
            }, 1000);
        });
        
        return false;
    });

    $body.off('click.wishlist').on('click.wishlist', '.btn-wishlist', function(e) {
        e.preventDefault();
        const $btn = $(this);
        const productId = $btn.data('id');

        if (!productId || $btn.data('busy')) return;
        $btn.data('busy', true);

        $.post("/add-to-wishlist", {
            _token: CSRF,
            product_id: productId
        })
        .done(function(response) {
            $btn.toggleClass('active', response.added)
                .find('i')
                .toggleClass('fa-heart', response.added)
                .toggleClass('fa-heart-o', !response.added);

            updateWishlistCount(response.count);

            if (!response.added) {
                removeFromWishlistUI(productId, response.count);
            }
        })
        .fail(() => alert('Erreur lors de la mise à jour de la wishlist'))
        .always(() => $btn.data('busy', false));
    });

    $body.off('click.removeWishlist').on('click.removeWishlist', '.js-remove-wishlist', function(e) {
        e.preventDefault();
        const $btn = $(this);
        const productId = $btn.data('id');

        if (!productId || $btn.data('busy')) return;
        $btn.data('busy', true);

        $.post("/add-to-wishlist", {
            _token: CSRF,
            product_id: productId
        })
        .done(function(response) {
            if (!response.added) {
                updateWishlistCount(response.count);
                removeFromWishlistUI(productId, response.count);
            } else {
                const $heart = $btn.closest('tr, li, .ps-product').find(`.btn-wishlist[data-id="${productId}"]`);
                $heart.addClass('active').find('i').removeClass('fa-heart-o').addClass('fa-heart');
                updateWishlistCount(response.count);
            }
        })
        .fail(() => alert("Erreur lors de la suppression de la wishlist"))
        .always(() => $btn.data('busy', false));
    });

    $body.off('click.removeCart').on('click.removeCart', '.js-remove-cart', function (e) {
        e.preventDefault();

        const $btn = $(this);
        const productId = parseInt($btn.data('id'), 10);
        
        if (!productId || $btn.data('busy')) return;
        $btn.data('busy', true);

        $.ajax({
            url: "/cart/remove",
            method: "POST",
            data: {
                _token: CSRF,
                product_id: productId
            },
            dataType: 'json'
        })
        .done(function (response) {
            handleCartResponse(response, productId, { forceCartPageUpdate: true });

            if (response.count === 0) {
                $('.ps-shopping__content .col-12.col-md-7.col-lg-9').html(
                    '<div class="alert alert-info mb-4 js-cart-empty">Votre panier est vide. <a href="/">Continuer vos achats</a>.</div>'
                );
            }
        })
        .fail(() => alert("Erreur lors de la suppression du produit"))
        .always(() => $btn.data('busy', false));
    });

    $body.off('click.clearCart').on('click.clearCart', '.js-clear-cart', function (e) {
        e.preventDefault();

        const $btn = $(this);
        const url = $btn.data('url');
        
        if (!url || $btn.data('busy') || !confirm('Êtes-vous sûr de vouloir vider votre panier ?')) return;
        
        $btn.data('busy', true);

        $.post(url, { _token: CSRF })
        .done(function () {
            $('.cart-count').text('0');
            $('#mini-cart-items').html('<li class="ps-cart__item text-center"><span>Votre panier est vide.</span></li>');
            $('.cart-total').text('0.00 MAD');
            $('.ps-shopping__content .col-12.col-md-7.col-lg-9').html(
                '<div class="alert alert-info mb-4 js-cart-empty">Votre panier est vide. <a href="/">Continuer vos achats</a>.</div>'
            );
        })
        .fail(() => alert("Erreur lors de la suppression du panier"))
        .always(() => $btn.data('busy', false));
    });

    if (isCartPage()) {
        const $cartForm = $('.ps-shopping form[action*="/cart/update"]');
        if ($cartForm.length) {
            $cartForm.off('submit.cartUpdate').on('submit.cartUpdate', function (e) {
                e.preventDefault();
                e.stopPropagation();
                e.stopImmediatePropagation();

                const $form = $(this);
                const $updateBtn = $form.find('button[type="submit"]');

                if ($updateBtn.data('busy')) return false;
                $updateBtn.data('busy', true).prop('disabled', true);
                
                let quantities = {};
                $form.find('.js-cart-qty:visible').each(function() {
                    const $input = $(this);
                    const productId = $input.data('id');
                    const qty = parseInt($input.val(), 10);

                    if (productId && qty >= 1) {
                        quantities[productId] = qty;
                    }
                });

                // Force the URL to be correct for AJAX
                const updateUrl = '/cart/update';
                
                $.ajax({
                    url: updateUrl,
                    method: "POST",
                    data: {
                        _token: CSRF,
                        quantities: quantities,
                        ajax: 1  // Extra flag to ensure backend knows this is AJAX
                    },
                    dataType: 'json',
                    headers: {
                        'X-Requested-With': 'XMLHttpRequest',
                        'Accept': 'application/json',
                        'Content-Type': 'application/x-www-form-urlencoded; charset=UTF-8'
                    }
                })
                .done(response => {
                    console.log('Update successful:', response);
                    handleCartResponse(response, null, { forceCartPageUpdate: true });
                })
                .fail((xhr, status, error) => {
                    console.error('Cart update failed:', {
                        status: xhr.status,
                        statusText: xhr.statusText,
                        responseText: xhr.responseText.substring(0, 500) + '...',
                        error: error
                    });
                    
                    let errorMsg = "Erreur lors de la mise à jour du panier.";
                    if (xhr.status === 422) {
                        errorMsg = "Données invalides. Veuillez vérifier les quantités.";
                    } else if (xhr.status === 419) {
                        errorMsg = "Session expirée. Veuillez recharger la page.";
                        setTimeout(() => location.reload(), 2000);
                    } else if (xhr.status === 200 && xhr.responseText.includes('<!DOCTYPE')) {
                        errorMsg = "Erreur de configuration serveur. Rechargement de la page...";
                        setTimeout(() => location.reload(), 2000);
                    }
                    
                    alert(errorMsg);
                })
                .always(() => {
                    setTimeout(() => {
                        $updateBtn.data('busy', false).prop('disabled', false);
                    }, 500);
                });
                
                return false;
            });
        }
    }

    $body.off('change.cartQty').on('change.cartQty', '.js-cart-qty', function() {
        const $input = $(this);
        const productId = $input.data('id') || $input.closest('[data-id]').data('id');
        const newQty = parseInt($input.val(), 10);

        if (!productId || !newQty || newQty < 1 || $input.data('busy')) return;
        $input.data('busy', true);

        $.ajax({
            url: '/cart/update',
            method: 'POST',
            data: {
                _token: CSRF,
                product_id: productId,
                quantity: newQty
            },
            dataType: 'json'
        })
        .done(response => handleCartResponse(response, null, { forceCartPageUpdate: true }))
        .fail(() => {
            alert('Erreur lors de la mise à jour de la quantité');
            $input.val($input.data('prev-val') || 1);
        })
        .always(() => $input.data('busy', false));
    });

    $body.on('focus', '.js-cart-qty', function() {
        $(this).data('prev-val', $(this).val());
    });
});