<?php

namespace Bobkosse\Permissions;

use Bobkosse\Permissions\Services\RolesService\RolesService;
use Bobkosse\Permissions\Services\RolesService\RolesServiceInterface;
use Illuminate\Support\ServiceProvider;

class PermissionsServiceProvider extends ServiceProvider
{
    public function boot() 
    {

    }

    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../src/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../src/views', 'permissions');

        $this->app->singleton(RolesServiceInterface::class, RolesService::class);
    }
}