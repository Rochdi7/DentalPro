<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontoffice\HomeController;
use App\Http\Controllers\Frontoffice\ProductController;
use App\Http\Controllers\Frontoffice\WishlistController;
use App\Http\Controllers\Frontoffice\CartController;
use App\Http\Controllers\Frontoffice\CheckoutController;
use App\Http\Controllers\Frontoffice\ProductTagController;
use App\Http\Controllers\Frontoffice\BlogController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Frontoffice\NewsletterController;
use App\Http\Controllers\Frontoffice\ContactController;
use App\Http\Controllers\Frontoffice\SearchController;
use App\Http\Controllers\Frontoffice\CategoryController;

// 🏠 Accueil
Route::get('/', [HomeController::class, 'index'])->name('frontoffice.home');

// 🛍️ Produits
Route::get('/produits', [ProductController::class, 'index'])->name('products.index');
Route::get('/produit/{slug}', [ProductController::class, 'show'])->name('product.show');

// 🛒 Panier
Route::get('/panier', [CartController::class, 'index'])->name('cart.index');
Route::post('/cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');
Route::post('/cart/clear', [CartController::class, 'clear'])->name('cart.clear');
Route::post('/cart/update', [CartController::class, 'update'])->name('cart.update');
Route::get('/cart/mini-html', [CartController::class, 'getMiniCartHtml'])->name('cart.mini.html');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.add');

// ❤️ Wishlist
Route::get('/wishlist', [WishlistController::class, 'index'])->name('wishlist.index');
Route::post('/add-to-wishlist', [WishlistController::class, 'addToWishlist'])->name('wishlist.add');
Route::get('/wishlist/items', [WishlistController::class, 'getWishlistData'])->name('wishlist.items');

// 🧾 Checkout
Route::prefix('checkout')->name('checkout.')->group(function () {
    Route::get('/', [CheckoutController::class, 'index'])->name('index');   // Page de commande
    Route::post('/', [CheckoutController::class, 'store'])->name('store'); // Soumission du formulaire
});

// 🔖 Tags produits
Route::get('/tag/{slug}', [ProductTagController::class, 'show'])->name('front.tag');

// 📰 Blog
Route::prefix('blog')->name('frontoffice.blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/categorie/{slug}', [BlogController::class, 'category'])->name('categories.show');
    Route::get('/{slug}', [BlogController::class, 'show'])->name('show');
});

// 📄 Pages statiques
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('frontoffice.contact.send');
Route::get('/conditions-generales', [PageController::class, 'terms'])->name('terms');
Route::get('/politique-confidentialite', [PageController::class, 'privacy'])->name('privacy');

// ✉️ Newsletter
Route::post('/newsletter/subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');

// 🔍 Recherche
Route::get('/search', [SearchController::class, 'index'])->name('frontoffice.search');

// 🗂️ Catégories
Route::get('/categorie/{slug}', [CategoryController::class, 'index'])->name('frontoffice.category');
