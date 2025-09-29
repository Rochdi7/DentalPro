document.addEventListener("DOMContentLoaded", function() {
    // cibler tous les champs de recherche (desktop + mobile)
    const searchInputs = document.querySelectorAll("input[name='q']");

    searchInputs.forEach(input => {
        input.addEventListener("keyup", function() {
            const query = this.value;
            const parent = this.closest(".ps-header__search, .ps-search"); // détecte desktop ou mobile

            const resultsBox = parent.querySelector(".row, .ps-search__result");
            const viewAll = parent.querySelector(".ps-result__viewall");

            if (!resultsBox) return;

            if (query.length < 2) {
                resultsBox.innerHTML = "";
                if (viewAll) viewAll.classList.add("d-none");
                return;
            }

            fetch(`/search/ajax?q=${query}`)
                .then(res => res.json())
                .then(data => {
                    resultsBox.innerHTML = "";

                    if (data.length === 0) {
                        resultsBox.innerHTML = "<p class='p-3'>Aucun produit trouvé</p>";
                        if (viewAll) viewAll.classList.add("d-none");
                        return;
                    }

                    if (viewAll) viewAll.classList.remove("d-none");

                    data.forEach(product => {
                        resultsBox.innerHTML += `
                            <div class="col-12 col-lg-6">
                                <div class="ps-product ps-product--horizontal">
                                    <div class="ps-product__thumbnail">
                                        <a class="ps-product__image" href="/produit/${product.slug}">
                                            <figure><img src="${product.main_image_url}" alt="${product.title}"></figure>
                                        </a>
                                    </div>
                                    <div class="ps-product__content">
                                        <h5 class="ps-product__title">
                                            <a href="/produit/${product.slug}">${product.title}</a>
                                        </h5>
                                        <div class="ps-product__meta">
                                            <span class="ps-product__price">${product.price} MAD</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;
                    });
                });
        });
    });
});
