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
        // @TODO: Add option to set the quard_name via the config
        
        $permissions = Config::get('permissions.permissions');
        foreach($permissions as $permission_group) {
            foreach($permission_group as $permission) {
                if(is_array($permission)) {
                    foreach($permission as $p) {
                        try {
                            $perm = Permission::findByName($p);
                        } catch(PermissionDoesNotExist $e) {
                            $perm = new Permission();
                            $perm->name = $p;
                            $perm->guard_name = 'web';
                            $perm->save();
                        }
                    }
                }
            }
        }
        return 0;
    }
}
