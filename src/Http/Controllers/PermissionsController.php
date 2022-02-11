<?php

namespace Bobkosse\Permissions\Http\Controllers;

use App\Http\Controllers\Controller;

class PermissionsController extends Controller
{
    public function showOverview()
    {
        return view('permissions::overview');
    }
}
