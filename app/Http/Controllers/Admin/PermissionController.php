<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('admin.user.permission.view',compact('permissions'));
    }

    public function check()
    {
        $name = $_GET['name'];
        
        try {
            Permission::findByName($name);
            return response()->json(array('status' => 'taken'), 200);
        } catch (PermissionDoesNotExist $exception) {
            return response()->json(array('status' => 'available'), 200);
        }        
    }

    public function store(Request $request)
    {
        $request->validate(['permission_name' => 'required']);

        try {
            Permission::create(['name' => $request->permission_name]);
        } catch (\Throwable $th) {
            return back()->withErrors('Permission Already Exist 👎');
        }
        

        return redirect()->route('admin.permission')->with('success','Permission Added');
    }

    public function delete($id)
    {
        Permission::findById($id)->delete();
        return redirect()->route('admin.permission')->with('deleted','Permission Deleted');
    }
}
