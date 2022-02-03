<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin','1')->get();
        return view('admin.user.view',compact('users'));
    }

    public function create()
    {
        $roles = Role::all();
        return view('admin.user.create',compact('roles'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=> 'required | unique:users',
            'fname' => 'required',
            'address' => 'required',
            'phone' => 'required',
            'email' => 'required | unique:users',
            'password' => 'required',
            'role' => 'required'
        ]);
        
        $user_id = Str::uuid()->toString();
        $user = new User();
        
        $user->fill($request->all());
        $user->id = $user_id;
        $user->is_admin = '1';
        $user->password = Hash::make($request->password);
        
        $user->save();

        //retrieve intance for role assignment
        $obj = User::where('id',$user_id)->first();
        $role = Role::findById($request->role);
        $obj->assignRole($role->name);

        return redirect()->route('admin.user')->with('inserted','User Created & Role Assigned 👍');
    }

    public function destroy($id)
    {
        dd('suicide prevention');
        User::destroy($id);
        return redirect()->route('admin.user')->with('deleted','User Deleted 👍');
    }
}
