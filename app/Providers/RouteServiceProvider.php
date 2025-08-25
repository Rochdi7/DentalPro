<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     * Used by some auth scaffolding; we’ll point it at the backoffice dashboard.
     */
    public const HOME = '/backoffice/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        // API rate limiting
        RateLimiter::for('api', function (Request $request) {
            return Limit::perMinute(60)->by($request->user()?->id ?: $request->ip());
        });

        $this->routes(function () {
            // API routes
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            // Web routes
            Route::middleware('web')->group(function () {
                // Keep web.php minimal (usually includes the two files below)
                require base_path('routes/web.php');

                // Explicitly load frontoffice and backoffice route files
                // (safe even if web.php already requires them)
                $frontoffice = base_path('routes/frontoffice.php');
                if (file_exists($frontoffice)) {
                    require $frontoffice;
                }

                $backoffice = base_path('routes/backoffice.php');
                if (file_exists($backoffice)) {
                    require $backoffice;
                }
            });
        });
    }
}
