<?php

namespace App\Http\Controllers\SettingUsers;

use App\Http\Controllers\Controller;
use App\Models\SettingUsers\Position;
use App\Models\SettingUsers\Role;
use App\Models\SettingUsers\Unit;
use App\Models\SettingUsers\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with(['position', 'roles', 'unit'])->get();
        $positions = Position::all();
        $roles = Role::all();
        $units = Unit::all();

        return view('master_backend.setting_users.user.index', compact('users', 'positions', 'roles', 'units'), [
            'routePrefix' => 'users',
            'title' => 'Halaman User',
            'title2' => 'User',
        ]);
    }

    public function create()
    {
        $positions = Position::all();
        $roles = Role::all();
        $units = Unit::all();

        return view('master_backend.setting_users.user.create', compact('positions', 'roles', 'units'), [
            'routePrefix' => 'users',
            'title' => 'Halaman User',
            'title2' => 'User',
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:users,nip',
            'nama' => 'required|string|max:255',
            'username' => 'required|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
            'unit_id' => 'required',
            'position_id' => 'required',
            'status_user' => 'required',
            'status_edit' => 'required',
            'roles' => 'required|array',
        ]);

        $user = User::create([
            'nip' => $request->nip,
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'unit_id' => $request->unit_id,
            'position_id' => $request->position_id,
            'status_user' => $request->status_user,
            'status_edit' => $request->status_edit,
        ]);

        $user->roles()->attach($request->roles);

        return redirect()->route('users.index')->with('success', 'User berhasil ditambahkan');
    }

    public function edit($id)
    {
        $user = User::with('roles')->findOrFail($id);
        $positions = Position::all();
        $roles = Role::all();
        $units = Unit::all();

        return view(
            'master_backend.setting_users.user.edit',
            compact('user', 'positions', 'roles', 'units'),
            [
                'routePrefix' => 'users',
                'title' => 'Halaman User',
                'title2' => 'User',
            ],
        );
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $request->validate([
            'nip' => 'required|unique:users,nip,' . $user->id,
            'nama' => 'required|string|max:255',
            'username' => 'required|unique:users,username,' . $user->id,
            'email' => 'required|email|unique:users,email,' . $user->id,
            'password' => 'nullable|min:6',
            'unit_id' => 'required',
            'position_id' => 'required',
            'status_user' => 'required',
            'status_edit' => 'required',
            'roles' => 'required|array',
        ]);

        $data = [
            'nip' => $request->nip,
            'nama' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'unit_id' => $request->unit_id,
            'position_id' => $request->position_id,
            'status_user' => $request->status_user,
            'status_edit' => $request->status_edit,
        ];

        // Update password hanya jika diisi
        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        $user->roles()->sync($request->roles);

        return redirect()->route('users.index')->with('success', 'User berhasil diperbarui');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->route('users.index')->with('success', 'User berhasil dihapus');
    }
}
