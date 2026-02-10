<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminAuthController;

use Illuminate\Support\Facades\Auth;

Route::get('/test-admin-middleware', function () {
    return 'Middleware resolved successfully';
})->middleware(['web', 'admin']);

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application.
|
*/

// Frontend Authentication Routes (if needed)
Auth::routes();

// Frontend Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// Stripe Webhook
Route::post('/stripe-webhook', [HomeController::class, 'stripe_webhook'])->name('stripe_webhook');

// Admin Routes

Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AdminAuthController::class, 'login'])->name('authorize.login');

    Route::get('reset', [AdminAuthController::class, 'showResetForm'])->name('reset');
    Route::post('reset', [AdminAuthController::class, 'sendPasswordResetToken'])->name('submit.reset');

    Route::get('reset/new-password/{token}', [AdminAuthController::class, 'getPasswordResetToken'])->name('reset.newpassword');
    Route::post('reset/new-password/{token}', [AdminAuthController::class, 'postResetNewPassword'])->name('reset.savednewpassword');

    Route::get('logout', [AdminAuthController::class, 'logout'])->name('logout');

    Route::middleware('admin')->group(function () {
        require __DIR__ . '/provider.php';
    });
});

// Developer Routes
Route::prefix('dev')->group(function () {
    require __DIR__ . '/dev-commands.php';
});

