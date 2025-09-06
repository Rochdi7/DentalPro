<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontoffice\HomeController;
use App\Http\Controllers\Frontoffice\ProductController;
use App\Http\Controllers\Frontoffice\WishlistController;
use App\Http\Controllers\Frontoffice\CartController;
use App\Http\Controllers\Frontoffice\CheckoutController;
use App\Http\Controllers\Frontoffice\ProductTagController;

// 🏠 Accueil
Route::get('/', [HomeController::class, 'index'])->name('frontoffice.home');
Route::get('/about', fn() => view('about'))->name('frontoffice.about');

// 🛍️ Produits
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
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout.index');


Route::get('/tag/{slug}', [ProductTagController::class, 'show'])->name('front.tag');
