<?php

use Bobkosse\Permissions\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web', 'auth:sanctum', 'verified']], function() {
    Route::get('permissions', [RolesController::class, 'showOverview'])->name('permissions.roles.overview');
}); 