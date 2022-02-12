<?php

use Bobkosse\Permissions\Http\Controllers\PermissionsController;
use Bobkosse\Permissions\Http\Livewire\UserManagement;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth:sanctum', 'verified']], function() {
    Route::get('permissions', [PermissionsController::class, 'showOverview'])->name('permissions.roles.overview');
    Route::get('permissions/user', UserManagement::class)->name('permissions.users.management');
}); 