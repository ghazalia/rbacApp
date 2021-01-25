<?php

namespace App\Http\Controllers\Rbac;

use App\Http\Controllers\Controller;
use App\Http\Requests\Rbac\StorePermissionRequest;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::get();
        return view('permissions.index', ['permissions' => $permissions]);
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(StorePermissionRequest $request)
    {
        Permission::create(['name' => $request['name'], 'guard_name' => $request['guard_name']]);

        return redirect()
            ->route('permissions.index')
            ->with('success', 'Permission created');
    }
}
