<?php

namespace Bobkosse\Permissions\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Config;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Spatie\Permission\Models\Permission;

class SyncPermissions extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'permissions:sync';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync permission in config with database';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $permissions = Config::get('permissions.permissions');
        foreach($permissions as $permission_group) {
            foreach($permission_group as $permission) {
                if(is_array($permission)) {
                    foreach($permission as $p => $guard) {
                        $perm = Permission::whereName($p)->whereGuardName($guard)->first();
                        if(!$perm) {
                            $perm = new Permission();
                            $perm->name = $p;
                            $perm->guard_name = $guard;
                            $perm->save();
                        }
                    }
                }
            }
        }
    
        return 0;
    }
}
