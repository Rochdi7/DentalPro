document.addEventListener("DOMContentLoaded", function () {
    const CSRF = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');

    // 🔎 Aperçu rapide (Quickview)
    document.querySelectorAll(".btn-quickview").forEach(btn => {
        btn.addEventListener("click", function (e) {
            e.preventDefault();
            const id = this.dataset.id;

            fetch(`/quickview/${id}`)
                .then(res => res.json())
                .then(data => {
                    document.getElementById("quickview-title").textContent = data.title;
                    document.getElementById("quickview-price").textContent = data.price + " MAD";

                    const oldPrice = document.getElementById("quickview-oldprice");
                    if (data.old_price) {
                        oldPrice.textContent = data.old_price + " MAD";
                        oldPrice.classList.remove("d-none");
                    } else {
                        oldPrice.classList.add("d-none");
                    }

                    const skuWrapper = document.getElementById("quickview-sku-wrapper");
                    const sku = document.getElementById("quickview-sku");
                    if (data.sku?.trim()) {
                        sku.textContent = data.sku;
                        skuWrapper.style.display = "list-item";
                    } else {
                        skuWrapper.style.display = "none";
                    }

                    const tags = document.getElementById("quickview-tags");
                    tags.innerHTML = data.tags.length
                        ? data.tags.map(t => `<a href="#">${t}</a>`).join(", ")
                        : '';

                    const badgeContainer = document.getElementById("quickview-badges");
                    let badges = '';
                    if (data.is_occasion) badges += '<div class="ps-badge ps-badge--sale">Occasion</div>';
                    if (data.is_hot) badges += '<div class="ps-badge ps-badge--hot">Populaire</div>';
                    badgeContainer.innerHTML = badges;

                    const charList = document.getElementById("quickview-characteristics");
                    charList.innerHTML = data.characteristics.map(c =>
                        `<li>${c.name} : ${c.value}</li>`
                    ).join('');

                    const galleryImgs = data.gallery.slice(0, 5);
                    const mainImg = `<div class="slide"><img src="${data.main_image}" alt="${data.title}"></div>`;
                    const gallerySlides = galleryImgs.map(img =>
                        `<div class="slide"><img src="${img}" alt="${data.title}"></div>`
                    ).join('');
                    const thumbsSlides = galleryImgs.map(img =>
                        `<div class="slide"><div class="ps-gallery__item"><img src="${img}" alt="${data.title}"></div></div>`
                    ).join('');

                    const mainContainer = document.getElementById("quickview-main");
                    const thumbContainer = document.getElementById("quickview-thumbnails");

                    if (mainContainer && thumbContainer) {
                        if ($(mainContainer).hasClass('slick-initialized')) $(mainContainer).slick('unslick');
                        if ($(thumbContainer).hasClass('slick-initialized')) $(thumbContainer).slick('unslick');

                        mainContainer.innerHTML = mainImg + gallerySlides;
                        thumbContainer.innerHTML = thumbsSlides;

                        $(mainContainer).slick({
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            fade: true,
                            arrows: false,
                            asNavFor: "#quickview-thumbnails"
                        });

                        $(thumbContainer).slick({
                            slidesToShow: 4,
                            slidesToScroll: 1,
                            focusOnSelect: true,
                            arrows: false,
                            asNavFor: "#quickview-main"
                        });
                    }

                    const quickAddBtn = document.querySelector('.btn-quickview-addcart');
                    if (quickAddBtn) quickAddBtn.setAttribute('data-id', data.id);

                    const qtyInput = document.querySelector('#popupQuickview input[name="quantity"]');
                    if (qtyInput) qtyInput.value = 1;

                    const inputWrapper = document.querySelector('#popupQuickview .number-input');
                    if (inputWrapper) {
                        const minus = inputWrapper.querySelector('.minus');
                        const plus = inputWrapper.querySelector('.plus');
                        const input = inputWrapper.querySelector('input[type="number"]');
                        if (minus && plus && input) {
                            minus.addEventListener('click', ev => {
                                ev.preventDefault();
                                ev.stopPropagation();
                                input.stepDown();
                            });
                            plus.addEventListener('click', ev => {
                                ev.preventDefault();
                                ev.stopPropagation();
                                input.stepUp();
                            });
                        }
                    }

                    $('#popupQuickview').modal('show');
                })
                .catch(err => console.error("Quickview Error:", err));
        });
    });

    // 🔁 Ajouter au panier (modale ou fiche produit)
    $(document).off('click.cart').on('click.cart', '.btn-cart, .btn-quickview-addcart', function (e) {
        e.preventDefault();

        const $btn = $(this);
        const productId = parseInt($btn.data('id'), 10);
        if (!productId) return;

        // 🟢 Trouver quantité
        let qty = 1;
        let $qtyInput = $btn.closest('.ps-product, #popupQuickview, .ps-product__actions')
                            .find('input[name="quantity"], .js-product-qty')
                            .filter(':visible')
                            .first();

        if ($qtyInput.length) {
            qty = parseInt($qtyInput.val(), 10);
            if (!Number.isFinite(qty) || qty < 1) qty = 1;
        }

        $btn.addClass('loading');

        fetch("/add-to-cart", {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': CSRF,
            },
            body: JSON.stringify({
                product_id: productId,
                quantity: qty
            })
        })
        .then(res => res.json())
        .then(data => {
            if (typeof handleCartResponse === 'function') {
                handleCartResponse(data);
            }

            // Fermer la modale si besoin
            $('#popupQuickview').modal('hide');
        })
        .catch(err => {
            alert("Erreur lors de l’ajout au panier");
            console.error(err);
        })
        .finally(() => {
            $btn.removeClass('loading');
        });
    });
});