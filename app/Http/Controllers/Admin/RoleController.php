<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('admin.user.role.view',compact('roles'));
    }

    public function show()
    {
        return view('admin.user.role.show');
    }

    public function create()
    {
        $permissions = Permission::all();
        return view('admin.user.role.create',compact('permissions'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'role' => 'required',
            'permissions' => 'required'
        ]);

        $role = Role::create([
            'name' => $request->role,
            'description' => $request->role
        ]);

        foreach($request->permissions as $permission)
        {
            $obj = Permission::findById($permission);
            $role->givePermissionTo($obj);
        }

        return redirect()->route('admin.role')->with('inserted','Role Created');
    }

    public function edit($id)
    {
        $permissions = Permission::all();
        $role = Role::findById($id);
        $rolePermissions = $role->permissions()->pluck('id')->toArray();
        return view('admin.user.role.edit',compact('permissions','role','rolePermissions'));
    }

    public function view($id)
    {
        $role = Role::findById($id);
        $rolePermissions = $role->permissions()->pluck('id')->toArray();
        return view('admin.user.role.viewRole',compact('role','rolePermissions'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'id' => 'required',
            'role' => 'required',
            'permissions' => 'required'
        ]);

        $role = Role::findById($request->id);

        $role->name = $request->role;
        $role->description = $request->description;

        foreach($request->permissions as $permission)
        {
            $obj = Permission::findById($permission);
            $role->givePermissionTo($obj);
        }

        $role->save();

        return redirect()->route('admin.role')->with('updated','Role Updated');
    }
}

