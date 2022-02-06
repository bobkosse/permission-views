<?php

use Bobkosse\Permissions\Http\Controllers\RolesController;
use Illuminate\Support\Facades\Route;

Route::prefix('permissions')->group(function() {
    // @todo Create route for 'roles and permission dashboard'
    
    Route::get('roles', [RolesController::class, 'showOverview'])->name('permissions.roles.overview');
}); 