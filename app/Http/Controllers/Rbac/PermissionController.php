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
        $permissions = Permission::all();
        $i = 0;
        return view('permissions.index', ['permissions' => $permissions, 'i' => $i]);
    }

    public function create()
    {
        return view('permissions.create');
    }

    public function store(StorePermissionRequest $request)
    {
        Permission::create(['name' => $request['name']]);

        return redirect()
            ->route('permissions.index')
            ->with('success', 'Permission created');
    }

    public function show(Permission $permission)
    {
        return view('permissions.show', compact("permission"));
    }

    public function edit(Permission $permission)
    {
        return view('permissions.edit', compact("permission"));
    }

    public function update(Permission $permission, StorePermissionRequest $request)
    {
        $permission->name = $request['name'];

        $permission->save();

        return redirect()
            ->route('permissions.index')
            ->with('success', 'Permission Updated');;
    }
}
