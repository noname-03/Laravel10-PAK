<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('pages.user.index', compact('users'));
    }

    public function create()
    {
        $role = Role::all();
        return view('pages.user.create', compact('role'));
    }

    public function store(Request $request)
    {
        // validation
        $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);

        $input = $request->all();
        $input['password'] = Hash::make($input['password']);
        $user = User::create($input);
        $user->assignRole($request->role);

        return redirect()->route('user.index');
    }

    public function show($id)
    {
        return view('pages.user.show');
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        $role = Role::all();
        return view('pages.user.edit', compact('user', 'role'));
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $input = $request->all();
        if (!empty($input['password'])) {
            $input['password'] = Hash::make($input['password']);
        } else {
            $input = Arr::except($input, array('password'));
        }
        $user->update($input);
        if (!empty($input['role'])) {
            $user->syncRoles($request->input('role'));
        } else {
            $user->removeRole($user->roles->pluck('name')[0]);
        }
        return redirect()->route('user.index');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('user.index');
    }
}