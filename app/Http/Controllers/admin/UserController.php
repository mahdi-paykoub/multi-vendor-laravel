<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin.user.all', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
        User::create($validData);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $validData = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);
        $user->update($validData);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back();
    }

    public function setUserRole($user_id)
    {
        $roles = Role::all();
        $permissions = Permission::all();

        return view('admin.user.set_user_role', compact('roles', 'permissions' , 'user_id'));
    }

    public function addUserRole(Request $request, User $user)
    {
        $data = $request->validate([
            'permissions' => ['required', 'array'],
            'roles' => ['required', 'array'],
        ]);
        $user->permissions()->sync($data['permissions']);
        $user->roles()->sync($data['roles']);

        return back();
    }
}
