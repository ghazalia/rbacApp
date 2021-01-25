<?php

namespace App\Http\Controllers\Rbac;

use App\Http\Controllers\Controller;
use App\Models\Rbac\Permission;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function create()
    {
        $permissions = Permission::get();

        return view('roles.create', ['permissions' => $permissions]);
    }
}
