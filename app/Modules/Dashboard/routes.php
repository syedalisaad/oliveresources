<?php

use Illuminate\Support\Facades\Route;
use App\Modules\Dashboard\Controllers\Backend\DashboardController as AdminDashboardController;
use App\Modules\Dashboard\Controllers\Frontend\DashboardController as FrontDashboardController;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/
Route::prefix('admin')->name('admin.')->group(function () {

    // ✅ Protected Admin Routes
    Route::middleware('admin')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])
            ->name('dashboard');

        Route::get('/media-manager', [AdminDashboardController::class, 'mediaManager'])
            ->name('media.manager');
    });
});

/*
|--------------------------------------------------------------------------
| Frontend User Routes
|--------------------------------------------------------------------------
*/
Route::prefix('user')->name('front.')->middleware('auth')->group(function () {

    Route::get('/dashboard', [FrontDashboardController::class, 'indexDashboard'])
        ->name('user.dashboard');

});
