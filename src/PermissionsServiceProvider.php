<?php

namespace Bobkosse\Permissions;

use Bobkosse\Permissions\Console\Commands\SyncPermissions;
use Bobkosse\Permissions\Http\Livewire\RolesOverview;
use Bobkosse\Permissions\Http\Livewire\UsersModal;
use Bobkosse\Permissions\Http\Livewire\UsersOverview;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class PermissionsServiceProvider extends ServiceProvider
{
    public function boot() 
    {
        Livewire::component('roles-overview', RolesOverview::class);
        Livewire::component('users-overview', UsersOverview::class);
        Livewire::component('user-modal', UsersModal::class);

        if ($this->app->runningInConsole()) {
            $this->publishes([__DIR__.'/../src/config/permissions.php' => config_path('permissions.php')], 'permissions');

            $this->commands([
              SyncPermissions::class,
          ]);
        
          }
    }

    public function register()
    {
        $this->loadRoutesFrom(__DIR__ . '/../src/routes/web.php');
        $this->loadViewsFrom(__DIR__ . '/../src/views', 'permissions');
        $this->mergeConfigFrom(__DIR__.'/../src/config/permissions.php', 'permissions');
    }
}