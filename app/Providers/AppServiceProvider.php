<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use App\Models\Product;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Fix for older MySQL versions
        Schema::defaultStringLength(191);

        // Share 'collectionProducts' with all views
        View::composer('*', function ($view) {
            $collectionProducts = Product::where('is_published', true)
                ->with('media') // preload media for images
                ->inRandomOrder()
                ->take(8)
                ->get();

            $view->with('collectionProducts', $collectionProducts);
        });
    }
}
