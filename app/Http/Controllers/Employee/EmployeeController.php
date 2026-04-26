<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\SettingUsers\Employee;
use App\Models\SettingUsers\Position;
use App\Models\SettingUsers\Unit;
use App\Models\SettingUsers\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::with(['user'])->latest()->get();
        $users = User::all();
        $units = Unit::all();
        $positions = Position::all();

        return view('master_backend.setting_users.employee.index', compact('users', 'units', 'positions', 'employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('master_backend.setting_users.employee.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nip' => 'required|unique:employees,nip',
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'unit_id' => 'nullable|exists:units,id',
            'position_id' => 'nullable|exists:positions,id',
        ]);

        // Employee::create($request->all());

        Employee::create($request->only([
            'user_id',
            'nip',
            'nama',
            'tanggal_lahir',
            'jenis_kelamin',
            'unit_id',
            'position_id'
        ]));

        return redirect()->route('employees.index')
            ->with('success', 'Data pegawai berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        $employee->load(['user', 'healthChecks']);
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'nip' => 'required|unique:employees,nip,' . $employee->id,
            'nama' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'unit_id' => 'nullable|exists:units,id',
            'position_id' => 'nullable|exists:positions,id',
        ]);

        $employee->update($request->all());

        return redirect()->route('employees.index')
            ->with('success', 'Data pegawai berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Data pegawai berhasil dihapus');
    }
}
