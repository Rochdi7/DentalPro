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
use App\Http\Controllers\Backoffice\DashboardController;

// 🔐 Auth routes (login only)
Auth::routes(['register' => false]);

// 🚫 Custom error page for /register
Route::any('/register', function () {
    return response()->view('pages.error-404', [], 404);
})->name('register')->middleware('guest');

// 🖥️ Backoffice routes (require auth + admin)
Route::middleware(['auth', 'admin'])->prefix('backoffice')->name('backoffice.')->group(function () {

    // ✅ Dashboard (controller-based)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // ✅ Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');


    // ✅ Products
    Route::prefix('products')->name('products.')->group(function () {
        Route::get('/', [ProductController::class, 'index'])->name('index');
        Route::get('/create', [ProductController::class, 'create'])->name('create');
        Route::post('/', [ProductController::class, 'store'])->name('store');
        Route::get('/{product}/edit', [ProductController::class, 'edit'])->name('edit');
        Route::put('/{product}', [ProductController::class, 'update'])->name('update');
        Route::delete('/{product}', [ProductController::class, 'destroy'])->name('destroy');
    });

    // ✅ Product categories
    Route::resource('product-categories', ProductCategoryController::class)
        ->names('product-categories')
        ->parameters(['product-categories' => 'product_category']);

    // ✅ Product tags
    Route::resource('product-tags', ProductTagController::class)
        ->names('product-tags');

    // ✅ Blog tags
    Route::resource('blog_tags', BlogTagController::class)
        ->names('blog_tags')
        ->parameters(['blog_tags' => 'blog_tag']);

    // ✅ Blog categories
    Route::resource('blog_categories', BlogCategoryController::class)
        ->names('blog_categories')
        ->parameters(['blog_categories' => 'blog_category']);

    // ✅ Blog posts
    Route::resource('blog_posts', BlogPostController::class)
        ->names('blog_posts')
        ->parameters(['blog_posts' => 'blog_post']);

    // 📄 Fallback static page (About, Contact, etc.)
    Route::get('{routeName}/{name?}', [HomeController::class, 'pageView']);
});
