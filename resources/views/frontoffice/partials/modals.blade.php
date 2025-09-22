<div class="ps-search">
    <div class="ps-search__content ps-search--mobile">
        <a class="ps-search__close" href="#" id="close-search">
            <i class="icon-cross"></i>
        </a>
        <h3>Rechercher</h3>

        <form action="{{ route('frontoffice.search') }}" method="GET">
            <div class="ps-search-table">
                <div class="input-group">
                    <input class="form-control ps-input" type="text" name="q" placeholder="Rechercher des produits">
                    <div class="input-group-append">
                        <a href="#" onclick="this.closest('form').submit(); return false;">
                            <i class="fa fa-search"></i>
                        </a>
                    </div>
                </div>
            </div>
        </form>

        <div class="ps-search__result">
            <!-- résultats AJAX ici -->
            <div class="ps-result__content"></div>

            <div class="ps-result__viewall d-none">
                <a href="{{ route('frontoffice.search') }}">Voir tous les résultats</a>
            </div>
        </div>
    </div>
</div>

 <div class="ps-navigation--footer">
     <div class="ps-nav__item">
         <a href="#" id="open-menu"><i class="icon-menu"></i></a>
         <a href="#" id="close-menu"><i class="icon-cross"></i></a>
     </div>

     <div class="ps-nav__item">
         <a href="{{ route('frontoffice.home') }}"><i class="icon-home2"></i></a>
     </div>

     {{-- ✅ Wishlist --}}
     <div class="ps-nav__item">
         <a href="{{ route('wishlist.index') }}">
             <i class="fa fa-heart{{ session('wishlist') && count(session('wishlist')) > 0 ? '' : '-o' }}"
                 style="{{ session('wishlist') && count(session('wishlist')) > 0 ? 'color:red;' : '' }}"></i>
             <span class="badge wishlist-count">
                 {{ session('wishlist') ? count(session('wishlist')) : 0 }}
             </span>
         </a>
     </div>

     {{-- ✅ Cart --}}
     <div class="ps-nav__item">
         <a href="{{ route('cart.index') }}">
             <i class="icon-cart-empty"></i>
             <span class="badge cart-count">
                 {{ session('cart') ? count(session('cart')) : 0 }}
             </span>
         </a>
     </div>
 </div>

 <div class="ps-menu--slidebar">
     <div class="ps-menu__content">
         <ul class="menu--mobile">
             <li class="menu-item-has-children"><a href="#">Products</a><span class="sub-toggle"><i
                         class="fa fa-chevron-down"></i></span>
                 <ul class="sub-menu">
                     <li><a href="#">Wound Care</a><span class="sub-toggle"><i
                                 class="fa fa-chevron-down"></i></span>
                         <ul class="sub-menu">
                             <li><a href="category-list.html">Bandages</a></li>
                             <li><a href="category-list.html">Gypsum foundations</a></li>
                             <li><a href="category-list.html">Patches and tapes</a></li>
                         </ul>
                     </li>
                     <li><a href="#">Higiene</a><span class="sub-toggle"><i
                                 class="fa fa-chevron-down"></i></span>
                         <ul class="sub-menu">
                             <li><a href="category-list.html">Disposable products</a></li>
                             <li><a href="category-list.html">Face masks</a></li>
                             <li><a href="category-list.html">Gloves</a></li>
                         </ul>
                     </li>
                     <li><a href="#">Laboratory</a><span class="sub-toggle"><i
                                 class="fa fa-chevron-down"></i></span>
                         <ul class="sub-menu">
                             <li><a href="category-list.html">Devices</a></li>
                             <li><a href="category-list.html">Diagnostic tests</a></li>
                         </ul>
                     </li>
                 </ul>
             </li>
             <li class="menu-item-has-children"><a href="#">Home Medical Supplies</a><span
                     class="sub-toggle"><i class="fa fa-chevron-down"></i></span>
                 <ul class="sub-menu">
                     <li><a href="category-list.html">Diagnosis</a></li>
                     <li><a href="category-list.html">Accessories Tools</a></li>
                     <li><a href="category-list.html">Bandages</a></li>
                 </ul>
             </li>
             <li class="menu-item-has-children"><a href="#">Homepages</a><span class="sub-toggle"><i
                         class="fa fa-chevron-down"></i></span>
                 <ul class="sub-menu">
                     <li><a href="index.html">Home 01</a></li>
                     <li><a href="home2.html">Home 02</a></li>
                     <li><a href="home3.html">Home 03</a></li>
                     <li><a href="home4.html">Home 04</a></li>
                     <li><a href="home5.html">Home 05</a></li>
                     <li><a href="home6.html">Home 06</a></li>
                     <li><a href="home7.html">Home 07</a></li>
                     <li><a href="home8.html">Home 08</a></li>
                     <li><a href="home9.html">Home 09</a></li>
                     <li><a href="home10.html">Home 10</a></li>
                     <li><a href="home11.html">Home 11</a></li>
                     <li><a href="home12.html">Home 12</a></li>
                     <li><a href="home13.html">Home 13</a></li>
                     <li><a href="home14.html">Home 14</a></li>
                     <li><a href="home15.html">Home 15</a></li>
                 </ul>
             </li>
             <li class="menu-item-has-children"><a href="category-list.html">Shop</a></li>
             <li class="menu-item-has-children"><a href="#">Pages</a><span class="sub-toggle"><i
                         class="fa fa-chevron-down"></i></span>
                 <ul class="sub-menu">
                     <li><a href="#">Category</a><span class="sub-toggle"><i
                                 class="fa fa-chevron-down"></i></span>
                         <ul class="sub-menu">
                             <li><a href="category-grid.html">Grid</a></li>
                             <li><a href="category-grid-detail.html">Grid with details</a></li>
                             <li><a href="category-grid-green.html">Grid with header green</a></li>
                             <li><a href="category-grid-dark.html">Grid with header dark</a></li>
                             <li><a href="category-grid-separate.html">Grid separate</a></li>
                             <li><a href="category-list.html">List</a></li>
                         </ul>
                     </li>
                     <li><a href="#">Product</a><span class="sub-toggle"><i
                                 class="fa fa-chevron-down"></i></span>
                         <ul class="sub-menu">
                             <li><a href="product1.html">Layout 01</a></li>
                             <li><a href="product2.html">Layout 02</a></li>
                             <li><a href="product3.html">Layout 03</a></li>
                             <li><a href="product4.html">Layout 04</a></li>
                             <li><a href="product5.html">Layout 05</a></li>
                             <li><a href="product6.html">Layout 06</a></li>
                             <li><a href="product7.html">Layout 07</a></li>
                         </ul>
                     </li>
                     <li><a href="#">Pages</a><span class="sub-toggle"><i
                                 class="fa fa-chevron-down"></i></span>
                         <ul class="sub-menu">
                             <li><a href="404.html">404</a></li>
                             <li><a href="about-us.html">About us</a></li>
                             <li><a href="my-account.html">My Account</a></li>
                             <li><a href="coming-soon.html">Coming soon</a></li>
                             <li><a href="blog-post1.html">Blog post 1</a></li>
                             <li><a href="blog-post2.html">Blog post 2</a></li>
                         </ul>
                     </li>
                 </ul>
             </li>
             <li class="menu-item-has-children"><a href="#">Collection</a><span class="sub-toggle"><i
                         class="fa fa-chevron-down"></i></span>
                 <ul class="sub-menu">
                     <li><a href="category-list.html">Face masks</a></li>
                     <li><a href="category-list.html">Dental</a></li>
                     <li><a href="category-list.html">Micrscope</a></li>
                 </ul>
             </li>
             <li class="menu-item-has-children"><a href="blog-sidebar1.html">Blog</a></li>
             <li class="menu-item-has-children"><a href="contact-us.html">Contact</a></li>
         </ul>
     </div>
    <div class="ps-menu__footer">
    <div class="ps-menu__item">
        <div class="ps-menu__contact">
            Besoin d’aide ? <strong><a href="tel:+212702785190">+212 702‑785190</a></strong>
        </div>
    </div>

    <div class="ps-menu__item" style="margin-top:10px; text-align:center; font-size:12px; color:#999;">
        Développé par <a href="#" target="_blank" style="color:#999; text-decoration:underline;">CodeSommet</a>
    </div>
</div>

 </div>
 <button class="btn scroll-top"><i class="fa fa-angle-double-up"></i></button>
 <div class="ps-preloader" id="preloader">
     <div class="ps-preloader-section ps-preloader-left"></div>
     <div class="ps-preloader-section ps-preloader-right"></div>
 </div>


 <div class="modal fade" id="popupQuickview" data-backdrop="static" data-keyboard="false" tabindex="-1"
     aria-hidden="true">
     <div class="modal-dialog modal-xl modal-dialog-centered ps-quickview">
         <div class="modal-content">
             <div class="modal-body">
                 <div class="wrap-modal-slider container-fluid ps-quickview__body">
                     <button class="close ps-quickview__close" type="button" data-dismiss="modal"
                         aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                     </button>

                     <div class="ps-product--detail">
                         <div class="row">
                             <div class="col-12 col-xl-6">
                                 <div class="ps-product--gallery">
                                     <!-- Main image slider -->
                                     <div class="ps-product__thumbnail" id="quickview-main">
                                         {{-- Injected by JS --}}
                                     </div>

                                     <!-- Thumbnail slider -->
                                     <div class="ps-gallery--image mt-4" id="quickview-thumbnails">
                                         {{-- Injected by JS --}}
                                     </div>
                                 </div>
                             </div>
                             <style>
                                 #popupQuickview .ps-product--gallery {
                                     display: flex !important;
                                     flex-direction: column !important;
                                     align-items: center !important;
                                 }

                                 #popupQuickview #quickview-main {
                                     margin-bottom: 10px !important;
                                     width: 100% !important;
                                 }

                                 #popupQuickview #quickview-thumbnails {
                                     margin-top: 0 !important;
                                     order: 2 !important;
                                     width: 100% !important;
                                     text-align: center !important;
                                 }

                                 #popupQuickview #quickview-thumbnails .slick-track {
                                     display: flex !important;
                                     justify-content: center !important;
                                 }
                             </style>
                             <div class="col-12 col-xl-6">
                                 <div class="ps-product__info">
                                     <div id="quickview-badges" class="ps-product__badge"></div>
                                     <div class="ps-product__branch">DentalPro</div>
                                     <div class="ps-product__title" id="quickview-title"></div>
                                     {{-- <div class="ps-product__rating">
                                         <select class="ps-rating" data-read-only="true">
                                             <option value="1">1</option>
                                             <option value="2">2</option>
                                             <option value="3">3</option>
                                             <option value="4">4</option>
                                             <option value="5">5</option>
                                         </select>
                                         <span class="ps-product__review">(0 Avis)</span>
                                     </div> --}}

                                     <div class="ps-product__meta">
                                         <span class="ps-product__price" id="quickview-price"></span>
                                         <del class="ps-product__del d-none" id="quickview-oldprice"></del>
                                     </div>

                                     <div class="ps-product__quantity" data-product-id="">
                                         <h6>Quantité</h6>
                                         <div class="d-md-flex align-items-center">
                                             <div class="def-number-input number-input safari_only">
                                                 <button type="button" class="minus">
                                                     <i class="icon-minus"></i>
                                                 </button>

                                                 <input class="quantity js-product-qty" min="1"
                                                     name="quantity" value="1" type="number" />

                                                 <button type="button" class="plus">
                                                     <i class="icon-plus"></i>
                                                 </button>
                                             </div>

                                             <a class="ps-btn ps-btn--warning btn-cart btn-quickview-addcart"
                                                 href="javascript:void(0)" data-id="">
                                                 Ajouter au panier
                                             </a>
                                         </div>
                                     </div>


                                     <div class="ps-product__type">
                                         <ul class="ps-product__list">
                                             <li>
                                                 <span class="ps-list__title">Tags: </span>
                                                 <span id="quickview-tags"></span>
                                             </li>
                                             <li id="quickview-sku-wrapper">
                                                 <span class="ps-list__title">SKU: </span>
                                                 <span id="quickview-sku"></span>
                                             </li>
                                             <li>
                                                 <span class="ps-list__title">Caractéristiques: </span>
                                                 <ul id="quickview-characteristics" class="ps-product__list mb-0">
                                                 </ul>
                                             </li>
                                         </ul>
                                     </div>

                                 </div> <!-- end .ps-product__info -->
                             </div> <!-- end col -->
                         </div> <!-- end row -->
                     </div> <!-- end .ps-product--detail -->
                 </div>
             </div>
         </div>
     </div>
 </div>
