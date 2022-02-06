<?php

namespace Bobkosse\Permissions\Services\RolesService;

use Spatie\Permission\Models\Role;

class RolesService implements RolesServiceInterface {
    
    public function getAllRoles() {
        return Role::all();
    }

}