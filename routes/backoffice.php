<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backoffice\ProfileController;
use Illuminate\Support\Facades\Auth;

// Auth routes (NO register)
Auth::routes(['register' => false]);

// Override /register to show custom error page
Route::any('/register', function () {
    return response()->view('pages.error-404', [], 404);
})->name('register')->middleware('guest');

// Backoffice routes (require authentication + admin)
Route::middleware(['auth', 'admin'])->prefix('backoffice')->group(function () {

    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    })->name('backoffice.dashboard');

    // ✅ Profile routes (My Account) — keep BEFORE the catch‑all
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('/profile/password', [ProfileController::class, 'updatePassword'])->name('profile.updatePassword');

    // Catch‑all page view
    Route::get('{routeName}/{name?}', [HomeController::class, 'pageView']);
});
