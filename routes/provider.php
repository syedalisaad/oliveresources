<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\PermissionController;

// Roles
Route::prefix('role')->group(function () {
    Route::get('list', [RoleController::class, 'ajaxManageable'])->name('role.ajax.manageable');
    Route::get('delete/{id}', [RoleController::class, 'destroy'])->name('role.delete');
    Route::resource('/', RoleController::class)->except(['show']);
});

// Permissions
Route::prefix('permission')->group(function () {
    Route::get('list', [PermissionController::class, 'ajaxManageable'])->name('permission.ajax.manageable');
    Route::get('delete/{id}', [PermissionController::class, 'destroy'])->name('permission.delete');
    Route::resource('/', PermissionController::class)->except(['show']);
});