<?php

namespace Bobkosse\Permissions\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Bobkosse\Permissions\Services\RolesService\RolesServiceInterface;

class RolesController extends Controller
{
    private $rolesService;

    public function __construct(RolesServiceInterface $rolesService)
    {
        $this->rolesService = $rolesService;        
    }
    
    public function showOverview()
    {
        $roles = $this->rolesService->getAllRoles();
        return view('permissions::roles.overview', compact('roles'));
    }
}
