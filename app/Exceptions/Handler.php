<?php

namespace App\Exceptions;

use Throwable;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use App\Models\Product;

class Handler extends ExceptionHandler
{
    protected $dontFlash = [
        'current_password',
        'password',
        'password_confirmation',
    ];

    public function register(): void
    {
        $this->reportable(function (Throwable $e) {
            //
        });
    }

    public function render($request, Throwable $exception)
    {
        // Page 404 personnalisée
        if ($exception instanceof NotFoundHttpException) {
            $latestProducts = Product::latest()->take(10)->get();

            return response()->view('frontoffice.errors.404', compact('latestProducts'), 404);
        }

        return parent::render($request, $exception);
    }
}
