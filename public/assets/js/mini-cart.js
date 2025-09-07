document.addEventListener("DOMContentLoaded", function () {
    const CSRF = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    // ---------- Helpers ----------
    function fmt(n){ return (parseFloat(n||0)).toFixed(2); }

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
        if (!stillHasItems || (typeof newCount !== 'undefined' && parseInt(newCount,10) === 0)) {
            const emptyHtml = `
                <div class="alert alert-info">
                    Votre wishlist est vide. <a href="/">Commencer vos achats</a>.
                </div>`;
            $wrap.html(emptyHtml);
        }
    }

    // ---------- Mini Cart UI ----------
    function updateMiniCartUI(data) {
    // count badge
    $('.cart-count').text(data.count ?? 0);

    // items list
    let itemsHtml = '';
    if (data.items && data.items.length) {
        data.items.forEach(function (item) {
            const name = (item.name ?? '').trim() || '—'; // fallback if null

            itemsHtml += `
            <li class="ps-cart__item" data-id="${item.id}">
                <div class="ps-product--mini-cart">
                    <a class="ps-product__thumbnail" href="${item.url}">
                        <img src="${item.image}" alt="${name}" />
                    </a>
                    <div class="ps-product__content">
                        <a class="ps-product__name" href="${item.url}">${name}</a>
                        <p class="ps-product__meta">
                            <span class="ps-product__price d-block">
                                ${fmt(item.price)} MAD <small class="text-muted">× ${item.quantity}</small>
                            </span>
                            <strong class="d-block text-dark">= ${fmt(item.price * item.quantity)} MAD</strong>
                        </p>
                    </div>
                    <a class="ps-product__remove js-remove-cart" href="javascript:void(0)" data-id="${item.id}">
                        <i class="icon-cross"></i>
                    </a>
                </div>
            </li>`;
        });
    } else {
        itemsHtml = `<li class="ps-cart__item text-center"><span>Votre panier est vide.</span></li>`;
    }

    // inject in mini cart
    $('#mini-cart-items').html(itemsHtml);

    // total (backend already formatted, but fallback for safety)
    $('.cart-total').text(data.total ?? '0.00 MAD');

    // open mini cart dropdown
    $('.ps-cart--mini').addClass('active');
}


    // ---------- Cart Page UI ----------
    function updateCartPageUI(data, removedId = null) {
        // Update title count
        const $title = $('.ps-shopping__title sup');
        if ($title.length && typeof data.count !== 'undefined') {
            $title.text(`(${data.count})`);
        }

        // Update totals (both Sous-total + Total share .ps-shopping__price)
        if (typeof data.total !== 'undefined') {
            const totalText = `${fmt(data.total)} MAD`;
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

        // If now empty: remove both views and show the empty alert once
        const itemsLen = (data.items?.length || 0);
        if (itemsLen === 0) {
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
                    $row.find('.js-cart-qty').val(item.quantity);
                    $row.find('.ps-product__subtotal').text(`${fmt(item.subtotal)} MAD`);
                }

                // ----- Mobile list item -----
                const $li = $(`.ps-shopping__list .js-remove-cart[data-id="${item.id}"]`).closest('li');
                if ($li.length) {
                    $li.find('.js-cart-qty').val(item.quantity);
                    // Mobile subtotal lives here:
                    $li.find('.ps-product__row.ps-product__subtotal .ps-product__value')
                        .text(`${fmt(item.subtotal)} MAD`);
                }
            });
        }
    }

    function handleCartResponse(data, justRemovedId = null) {
        // Update mini cart always
        updateMiniCartUI(data);

        // If we are on the cart page, update its UI too
        if ($('.ps-table--product').length) {
            updateCartPageUI(data, justRemovedId);
        }
    }

    // ---------- Hover to refresh mini cart ----------
    const cartTrigger = document.getElementById("cart-mini");
    if (cartTrigger && cartTrigger.dataset.miniUrl) {
        cartTrigger.addEventListener("mouseenter", function () {
            fetch(cartTrigger.dataset.miniUrl)
                .then(res => res.json())
                .then(data => {
                    updateMiniCartUI(data);
                });
        });
    }

   // ---------- Add to Cart (single source of truth) ----------
$(document).off('click.cart', '.btn-cart'); // avoid double-binding
$(document).on('click.cart', '.btn-cart', function (e) {
  e.preventDefault();

  const $btn = $(this);
  const productId = parseInt($btn.data('id'), 10);
  if (!productId) return;

  // 1) PRODUCT DETAILS: find the qty by product-id (sibling block)
  let $qtyInput = $(`.ps-product__quantity[data-product-id="${productId}"]`)
                    .find('.js-product-qty, .js-cart-qty, input[name="quantity"]')
                    .filter(':visible')
                    .first();

  // 2) If not found (home/listing cards), default to 1
  let qty = 1;
  if ($qtyInput.length) {
    qty = parseInt(($qtyInput.val() || '1'), 10);
    if (!Number.isFinite(qty) || qty < 1) qty = 1;
  }

  if ($btn.data('busy')) return; // anti-double-click
  $btn.data('busy', true);

  $.post("/add-to-cart", {
    _token: $('meta[name="csrf-token"]').attr('content'),
    product_id: productId,
    quantity: qty
  })
  .done(function (response) {
    handleCartResponse(response); // your existing function
  })
  .fail(function () {
    alert("Erreur lors de l’ajout au panier");
  })
  .always(function () {
    $btn.data('busy', false);
  });
});


    // ---------- Wishlist toggle (UNIFIED) ----------
    $(document).on('click', '.btn-wishlist', function(e) {
        e.preventDefault();
        const $btn = $(this);
        const productId = $btn.data('id');

        $.post("/add-to-wishlist", {
            _token: CSRF,
            product_id: productId
        }, function(response) {
            // Update heart state
            $btn.toggleClass('active', response.added);
            $btn.find('i')
                .toggleClass('fa-heart', response.added)
                .toggleClass('fa-heart-o', !response.added);

            // Update counters (badge + page title)
            updateWishlistCount(response.count);

            // If on wishlist page and item was removed -> instantly remove
            if (!response.added) {
                removeFromWishlistUI(productId, response.count);
            }
        }).fail(function() {
            alert('Erreur lors de la mise à jour de la wishlist');
        });
    });

    // ---------- Remove from wishlist (cross icon or legacy hook) ----------
    $(document).on('click', '.js-remove-wishlist', function(e) {
        e.preventDefault();
        const $btn = $(this);
        const productId = $btn.data('id');

        $.post("/add-to-wishlist", {
            _token: CSRF,
            product_id: productId
        }, function(response) {
            // If backend reports item is NOT in wishlist anymore
            if (!response.added) {
                // Update counters
                updateWishlistCount(response.count);
                // Remove from UI immediately
                removeFromWishlistUI(productId, response.count);
            } else {
                // (Edge case: if server re-added it, reflect state on any heart inside row)
                const $heart = $btn.closest('tr, li, .ps-product').find('.btn-wishlist[data-id="'+productId+'"]');
                $heart.addClass('active').find('i').removeClass('fa-heart-o').addClass('fa-heart');
                updateWishlistCount(response.count);
            }
        }).fail(function() {
            alert("Erreur lors de la suppression de la wishlist");
        });
    });

   // ---------- Remove from Cart (mini + page panier) ----------
$(document).off('click.cartRemove', '.js-remove-cart');
$(document).on('click.cartRemove', '.js-remove-cart', function (e) {
  e.preventDefault();

  const $btn = $(this);
  const productId = parseInt($btn.data('id'), 10);
  if (!productId) return;

  $.post("/cart/remove", {
    _token: $('meta[name="csrf-token"]').attr('content'),
    product_id: productId
  })
  .done(function (response) {
    // Mise à jour du mini-panier + compteur
    handleCartResponse(response, productId);

    // Supprimer l’élément du DOM si on est sur la page panier
    $btn.closest('tr, li').remove();

    // Si le panier devient vide → afficher le message
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
  });
});

    // ---------- Clear Cart ----------
$(document).off('click.cartClear', '.js-clear-cart');
$(document).on('click.cartClear', '.js-clear-cart', function (e) {
  e.preventDefault();

  const url = $(this).data('url');

  $.post(url, { _token: $('meta[name="csrf-token"]').attr('content') })
  .done(function () {
    // Reset UI
    $('.cart-count').text('0');
    $('#mini-cart-items').html('<li class="ps-cart__item text-center"><span>Votre panier est vide.</span></li>');
    $('.cart-total').text('0.00 MAD');

    const emptyHtml = `
      <div class="alert alert-info mb-4 js-cart-empty">
        Votre panier est vide. <a href="/">Continuer vos achats</a>.
      </div>`;
    $('.ps-shopping__content .col-12.col-md-7.col-lg-9').html(emptyHtml);
  })
  .fail(function () {
    alert("Erreur lors de la suppression du panier");
  });
});

});