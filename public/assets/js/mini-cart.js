document.addEventListener("DOMContentLoaded", function () {
    const CSRF = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    // ---------- Helpers ----------
    function fmt(n) { 
        return (parseFloat(n || 0)).toFixed(2); 
    }

    // Format total to ensure proper display (handles both string and number)
    function formatTotal(total) {
        if (!total) return '0.00 MAD';
        
        // If it's already formatted (contains 'MAD'), return as is
        if (typeof total === 'string' && total.includes('MAD')) {
            return total;
        }
        
        // If it's a number or string number, format it
        const numTotal = parseFloat(total);
        return isNaN(numTotal) ? '0.00 MAD' : `${fmt(numTotal)} MAD`;
    }

    function updateWishlistCount(newCount) {
        // Header badge
        $('.wishlist-count').text(newCount ?? 0);

        // Page title "Ma Wishlist (X)" if present
        const $wlTitle = $('.ps-wishlist__title');
        if ($wlTitle.length) {
            $wlTitle.text(`Ma Wishlist (${newCount ?? 0})`);
        }
    }

    // Remove a product (by id) from the wishlist PAGE (both list & table) and show empty state if needed
    function removeFromWishlistUI(productId, newCount) {
        const $wrap = $('.ps-wishlist__content');
        if (!$wrap.length) return; // not on wishlist page

        // Remove in both views (list + table)
        $wrap.find(`.btn-wishlist[data-id="${productId}"], .js-remove-wishlist[data-id="${productId}"]`).each(function () {
            $(this).closest('tr, li, .ps-product').remove();
        });

        // If empty after removal -> show message
        const stillHasItems = $wrap.find('li').length || $wrap.find('tbody tr').length;
        if (!stillHasItems || (typeof newCount !== 'undefined' && parseInt(newCount, 10) === 0)) {
            const emptyHtml = `
                <div class="alert alert-info">
                    Votre wishlist est vide. <a href="/">Commencer vos achats</a>.
                </div>`;
            $wrap.html(emptyHtml);
        }
    }

    // ---------- Check if we're on cart page ----------
    function isCartPage() {
        return $('.ps-shopping').length > 0 && $('.ps-table--product').length > 0;
    }

    // ---------- SINGLE Mini Cart UI Function ----------
    function updateMiniCartUI(data, options = {}) {
        if (!data) return;

        console.log('Updating mini cart with data:', data);

        // Update count badge
        const itemCount = parseInt(data.count || 0, 10);
        $('.cart-count').text(itemCount);

        // Update items list
        let itemsHtml = '';
        
        // Handle different data structures (items array or html)
        if (data.html) {
            // If backend sends ready HTML, use it
            $('#mini-cart-items').html(data.html);
        } else if (data.items && Array.isArray(data.items) && data.items.length > 0) {
            // Build HTML from items array
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
            $('#mini-cart-items').html(itemsHtml);
        } else if (itemCount === 0) {
            // Show empty message only if count is actually 0
            itemsHtml = `<li class="ps-cart__item text-center"><span>Votre panier est vide.</span></li>`;
            $('#mini-cart-items').html(itemsHtml);
        }

        // Update total with proper formatting
        $('.cart-total').text(formatTotal(data.total));

        // Only open dropdown if not a hover refresh
        if (!options.isHover) {
            $('.ps-cart--mini').addClass('active');
        }
    }

    // ---------- Cart Page UI (FIXED - Don't auto-clear) ----------
    function updateCartPageUI(data, removedId = null, forceUpdate = false) {
        // CRITICAL: Don't update cart page UI unless explicitly requested or item was removed
        if (!forceUpdate && !removedId) {
            console.log('Skipping cart page UI update to prevent auto-clear');
            return;
        }

        // Update title count
        const $title = $('.ps-shopping__title sup');
        if ($title.length && typeof data.count !== 'undefined') {
            $title.text(`(${data.count})`);
        }

        // Update totals (both Sous-total + Total share .ps-shopping__price)
        if (typeof data.total !== 'undefined') {
            const totalText = formatTotal(data.total);
            $('.ps-shopping__box .ps-shopping__row .ps-shopping__price').each(function () {
                $(this).text(totalText);
            });
        }

        // If a product was removed, delete it from BOTH views (desktop row + mobile li)
        if (removedId) {
            $(`.js-remove-cart[data-id="${removedId}"]`).each(function () {
                $(this).closest('tr, li').remove();
            });
        }

        // ONLY show empty state if explicitly forced AND count is 0
        if (forceUpdate) {
            const itemsLen = (data.items?.length || 0);
            if (itemsLen === 0 || (typeof data.count !== 'undefined' && data.count === 0)) {
                const emptyHtml = `
                    <div class="alert alert-info mb-4 js-cart-empty">
                        Votre panier est vide. <a href="/">Continuer vos achats</a>.
                    </div>`;

                const $contentCol = $('.col-12.col-md-7.col-lg-9').first();
                // Remove existing blocks if still present
                $contentCol.find('.ps-shopping__table, .ps-shopping__list').remove();
                // Avoid duplicating the alert
                if (!$contentCol.find('.js-cart-empty').length) {
                    $contentCol.prepend(emptyHtml);
                }
                // Optionally disable footer buttons
                $('.ps-shopping__button .ps-btn').prop('disabled', true);
                return; // nothing else to update
            }

            // If not empty and backend returned per-item info, sync both views
            if (data.items && data.items.length) {
                data.items.forEach(function (item) {
                    // ----- Desktop row -----
                    const $row = $(`.ps-table--product .js-remove-cart[data-id="${item.id}"]`).closest('tr');
                    if ($row.length) {
                        $row.find('.js-cart-qty').val(item.quantity || item.qty);
                        $row.find('.ps-product__subtotal').text(formatTotal(item.subtotal));
                    }

                    // ----- Mobile list item -----
                    const $li = $(`.ps-shopping__list .js-remove-cart[data-id="${item.id}"]`).closest('li');
                    if ($li.length) {
                        $li.find('.js-cart-qty').val(item.quantity || item.qty);
                        $li.find('.ps-product__row.ps-product__subtotal .ps-product__value')
                            .text(formatTotal(item.subtotal));
                    }
                });
            }
        }
    }

    // Central handler for cart responses (FIXED)
    function handleCartResponse(data, justRemovedId = null, options = {}) {
        console.log('Handling cart response:', data);
        
        // Always update mini cart
        updateMiniCartUI(data, options);

        // Only update cart page if we're on cart page AND (item was removed OR explicitly forced)
        if (isCartPage()) {
            const shouldUpdateCartPage = justRemovedId || options.forceCartPageUpdate;
            updateCartPageUI(data, justRemovedId, shouldUpdateCartPage);
        }
    }

    // ---------- IMPROVED Quantity Finding Function ----------
    function findQuantityInput($btn, productId) {
        let qty = 1;
        let $qtyInput = null;

        // Strategy 1: Check if we're in quickview modal
        if ($btn.closest('#popupQuickview').length) {
            console.log('In quickview modal, looking for quantity input');
            $qtyInput = $('#popupQuickview .ps-product__quantity input[name="quantity"]');
            if ($qtyInput.length) {
                console.log('Found quickview quantity input:', $qtyInput.val());
            }
        }

        // Strategy 2: Look for quantity input with matching product-id data attribute
        if (!$qtyInput || !$qtyInput.length) {
            $qtyInput = $(`.ps-product__quantity[data-product-id="${productId}"] input[name="quantity"]`);
            if ($qtyInput.length) {
                console.log('Found quantity input by product-id:', $qtyInput.val());
            }
        }

        // Strategy 3: Look within the same product container
        if (!$qtyInput || !$qtyInput.length) {
            const $productContainer = $btn.closest('.ps-product, .ps-section__product');
            if ($productContainer.length) {
                // Try different quantity input selectors within the product container
                const selectors = [
                    'input[name="quantity"]',
                    '.quantity',
                    '.js-product-qty',
                    '.ps-product__quantity input'
                ];
                
                for (let selector of selectors) {
                    $qtyInput = $productContainer.find(selector).filter(':visible').first();
                    if ($qtyInput && $qtyInput.length) {
                        console.log(`Found quantity input in product container with selector "${selector}":`, $qtyInput.val());
                        break;
                    }
                }
            }
        }

        // Strategy 4: Look for quantity input in the same row/column
        if (!$qtyInput || !$qtyInput.length) {
            const $parent = $btn.closest('.ps-product__actions, .ps-product__group-mobile, .row, .col-12');
            if ($parent.length) {
                $qtyInput = $parent.find('input[name="quantity"], .quantity, .js-product-qty').filter(':visible').first();
                if ($qtyInput.length) {
                    console.log('Found quantity input in same row/column:', $qtyInput.val());
                }
            }
        }

        // Strategy 5: Check if this is a card without quantity selector (home page cards)
        if (!$qtyInput || !$qtyInput.length) {
            // If we're in a product card that doesn't have a visible quantity input, use default qty = 1
            const $card = $btn.closest('.ps-product--standard, .ps-product');
            if ($card.length) {
                // Check if this card has any quantity input at all
                const hasQtyInput = $card.find('input[name="quantity"], .quantity, .js-product-qty').length > 0;
                if (!hasQtyInput) {
                    console.log('Product card without quantity selector detected, using default quantity = 1');
                    return 1; // Return early with default quantity
                }
            }
        }

        // Get the quantity value
        if ($qtyInput && $qtyInput.length) {
            qty = parseInt($qtyInput.val() || '1', 10);
            if (!Number.isFinite(qty) || qty < 1) qty = 1;
        }

        console.log(`Final quantity determined: ${qty}`);
        return { qty, $qtyInput };
    }

    // ---------- Hover Handler (Only for mini cart) ----------
    const cartTrigger = document.getElementById("cart-mini");
    if (cartTrigger && cartTrigger.dataset.miniUrl) {
        let hoverTimeout;
        
        cartTrigger.addEventListener("mouseenter", function () {
            // Clear any existing timeout
            clearTimeout(hoverTimeout);
            
            console.log('Hovering cart, refreshing mini cart...');
            fetch(cartTrigger.dataset.miniUrl)
                .then(res => {
                    if (!res.ok) {
                        throw new Error(`HTTP ${res.status}: ${res.statusText}`);
                    }
                    return res.json();
                })
                .then(data => {
                    console.log('Hover refresh data received:', data);
                    // ONLY update mini cart on hover, never the cart page
                    updateMiniCartUI(data, { isHover: true });
                })
                .catch(err => {
                    console.error('Mini cart hover refresh error:', err);
                });
        });
    }

    // ---------- ENHANCED Add to Cart Handler ----------
    // Remove ALL existing handlers to prevent conflicts
    $(document).off('click.addToCart click.cart', '.btn-cart');
    
    $(document).on('click.addToCart', '.btn-cart', function (e) {
        e.preventDefault();
        e.stopPropagation();
        e.stopImmediatePropagation();

        const $btn = $(this);
        const productId = parseInt($btn.data('id'), 10);
        
        if (!productId) {
            console.warn('No product ID found');
            return false;
        }

        // CRITICAL: Prevent multiple rapid clicks and duplicate processing
        if ($btn.data('busy') || $btn.hasClass('processing') || $btn.prop('disabled')) {
            console.log('Button is busy, ignoring click for product:', productId);
            return false;
        }
        
        // Mark button as busy IMMEDIATELY
        $btn.data('busy', true).addClass('processing').prop('disabled', true);

        // Use improved quantity finding function
        const qtyResult = findQuantityInput($btn, productId);
        let qty, $qtyInput;

        if (typeof qtyResult === 'number') {
            // Simple case: just quantity returned (for cards without quantity selector)
            qty = qtyResult;
            $qtyInput = null;
        } else {
            // Complex case: object with qty and input element returned
            qty = qtyResult.qty;
            $qtyInput = qtyResult.$qtyInput;
        }

        console.log(`Adding product ${productId} with quantity ${qty}`);

        // Disable all cart buttons temporarily
        $('.btn-cart').prop('disabled', true);

        // Make AJAX request
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
            cache: false
        })
        .done(function (response) {
            console.log('Add to cart success for product', productId, ':', response);
            
            // Update cart UI (but don't force cart page update)
            handleCartResponse(response);
            
            // Reset quantity input to 1 after successful add (only if we found an input)
            if ($qtyInput && $qtyInput.length) {
                setTimeout(() => $qtyInput.val(1), 100);
            }
            
            // If we're in quickview modal, close it after successful add
            if ($btn.closest('#popupQuickview').length) {
                setTimeout(() => {
                    $('#popupQuickview').modal('hide');
                }, 1000);
            }
            
            if (response.message) {
                console.log('Success:', response.message);
            }
        })
        .fail(function (xhr, status, error) {
            console.error('Add to cart failed for product', productId, ':', status, error);
            
            let errorMessage = "Erreur lors de l'ajout au panier";
            if (status === 'timeout') {
                errorMessage = "La requête a pris trop de temps. Veuillez réessayer.";
            } else if (xhr.responseJSON && xhr.responseJSON.message) {
                errorMessage = xhr.responseJSON.message;
            }
            
            alert(errorMessage);
        })
        .always(function () {
            // Re-enable all cart buttons after delay
            setTimeout(function() {
                $('.btn-cart').prop('disabled', false).data('busy', false).removeClass('processing');
            }, 1000);
        });
        
        return false;
    });

    // ---------- Wishlist Toggle ----------
    $(document).off('click.wishlist', '.btn-wishlist');
    $(document).on('click.wishlist', '.btn-wishlist', function(e) {
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
            $btn.toggleClass('active', response.added);
            $btn.find('i')
                .toggleClass('fa-heart', response.added)
                .toggleClass('fa-heart-o', !response.added);

            updateWishlistCount(response.count);

            if (!response.added) {
                removeFromWishlistUI(productId, response.count);
            }
        })
        .fail(function() {
            alert('Erreur lors de la mise à jour de la wishlist');
        })
        .always(function() {
            $btn.data('busy', false);
        });
    });

    // ---------- Remove from Wishlist ----------
    $(document).off('click.removeWishlist', '.js-remove-wishlist');
    $(document).on('click.removeWishlist', '.js-remove-wishlist', function(e) {
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
                const $heart = $btn.closest('tr, li, .ps-product').find('.btn-wishlist[data-id="'+productId+'"]');
                $heart.addClass('active').find('i').removeClass('fa-heart-o').addClass('fa-heart');
                updateWishlistCount(response.count);
            }
        })
        .fail(function() {
            alert("Erreur lors de la suppression de la wishlist");
        })
        .always(function() {
            $btn.data('busy', false);
        });
    });

    // ---------- Remove from Cart (FIXED) ----------
    $(document).off('click.removeCart click.cartRemove', '.js-remove-cart');
    $(document).on('click.removeCart', '.js-remove-cart', function (e) {
        e.preventDefault();

        const $btn = $(this);
        const productId = parseInt($btn.data('id'), 10);
        
        if (!productId || $btn.data('busy')) return;
        $btn.data('busy', true);

        $.post("/cart/remove", {
            _token: CSRF,
            product_id: productId
        })
        .done(function (response) {
            // Force cart page update since item was removed
            handleCartResponse(response, productId, { forceCartPageUpdate: true });

            if (response.count === 0) {
                const emptyHtml = `
                    <div class="alert alert-info mb-4 js-cart-empty">
                        Votre panier est vide. <a href="/">Continuer vos achats</a>.
                    </div>`;
                $('.ps-shopping__content .col-12.col-md-7.col-lg-9').html(emptyHtml);
            }
        })
        .fail(function () {
            alert("Erreur lors de la suppression du produit");
        })
        .always(function() {
            $btn.data('busy', false);
        });
    });

    // ---------- Clear Cart (FIXED) ----------
    $(document).off('click.clearCart', '.js-clear-cart');
    $(document).on('click.clearCart', '.js-clear-cart', function (e) {
        e.preventDefault();

        const $btn = $(this);
        const url = $btn.data('url');
        
        if (!url || $btn.data('busy')) return;

        if (!confirm('Êtes-vous sûr de vouloir vider votre panier ?')) return;

        $btn.data('busy', true);

        $.post(url, { _token: CSRF })
        .done(function () {
            // Update mini cart
            $('.cart-count').text('0');
            $('#mini-cart-items').html('<li class="ps-cart__item text-center"><span>Votre panier est vide.</span></li>');
            $('.cart-total').text('0.00 MAD');

            // Update cart page
            const emptyHtml = `
                <div class="alert alert-info mb-4 js-cart-empty">
                    Votre panier est vide. <a href="/">Continuer vos achats</a>.
                </div>`;
            $('.ps-shopping__content .col-12.col-md-7.col-lg-9').html(emptyHtml);
        })
        .fail(function () {
            alert("Erreur lors de la suppression du panier");
        })
        .always(function() {
            $btn.data('busy', false);
        });
    });

    // ---------- Update Cart Quantity ----------
    $(document).off('change.cartQty', '.js-cart-qty');
    $(document).on('change.cartQty', '.js-cart-qty', function() {
        const $input = $(this);
        const productId = $input.data('id') || $input.closest('[data-id]').data('id');
        const newQty = parseInt($input.val(), 10);

        if (!productId || !newQty || newQty < 1 || $input.data('busy')) return;
        $input.data('busy', true);

        $.post('/cart/update', {
            _token: CSRF,
            product_id: productId,
            quantity: newQty
        })
        .done(function(response) {
            // Force cart page update since quantity changed
            handleCartResponse(response, null, { forceCartPageUpdate: true });
        })
        .fail(function() {
            alert('Erreur lors de la mise à jour de la quantité');
            $input.val($input.data('prev-val') || 1);
        })
        .always(function() {
            $input.data('busy', false);
        });
    });

    // Store previous value for quantity inputs
    $(document).on('focus', '.js-cart-qty', function() {
        $(this).data('prev-val', $(this).val());
    });

    // ---------- REMOVED Auto-initialization that was clearing cart page ----------
    // The problematic code has been removed - no auto-loading of mini cart data on page load
    // This was causing the cart page to show empty after 2 seconds

    console.log('MiniCart.js initialized successfully - Cart page auto-clear issue fixed!');
});