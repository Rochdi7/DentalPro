<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backoffice\ProfileController;
use App\Http\Controllers\Backoffice\ProductController;
use App\Http\Controllers\Backoffice\ProductCategoryController;
use App\Http\Controllers\Backoffice\ProductTagController;
use App\Http\Controllers\Backoffice\BlogTagController;
use App\Http\Controllers\Backoffice\BlogCategoryController;
use App\Http\Controllers\Backoffice\BlogPostController;

// Auth routes (NO register)
Auth::routes(['register' => false]);

// Override /register to show custom error page
Route::any('/register', function () {
    return response()->view('pages.error-404', [], 404);
})->name('register')->middleware('guest');

// Backoffice routes (require authentication + admin)
Route::middleware(['auth', 'admin'])->prefix('backoffice')->name('backoffice.')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('dashboard');

    // ✅ Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('backoffice.profile.update');
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('backoffice.profile.updatePassword');

    // ✅ Product routes
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/', [ProductController::class, 'store'])->name('store');
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('/{product}', [ProductController::class, 'update'])->name('update');
        Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
    });

    // ✅ Product categories & tags
    Route::resource('product-categories', ProductCategoryController::class)
        ->names('product-categories')
        ->parameters(['product-categories' => 'product_category']);

    Route::resource('product-tags', ProductTagController::class)
        ->names('product-tags');

    // ✅ Blog tags (uses blog_tags for route name and URL)
    Route::resource('blog_tags', BlogTagController::class)
        ->names('blog_tags')
        ->parameters(['blog_tags' => 'blog_tag']);

    // ✅ Blog categories (you can rename to blog_categories for consistency)
    Route::resource('blog_categories', BlogCategoryController::class)
        ->names('blog_categories')
        ->parameters(['blog_categories' => 'blog_category']);

    // ✅ Blog posts
    Route::resource('blog_posts', BlogPostController::class)
        ->names('blog_posts')
        ->parameters(['blog_posts' => 'blog_post']);

    // Catch-all page route (static fallback pages)
    Route::get('{routeName}/{name?}', [HomeController::class, 'pageView']);
});
