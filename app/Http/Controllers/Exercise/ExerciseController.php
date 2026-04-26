<?php

namespace App\Http\Controllers\Exercise;

use App\Http\Controllers\Controller;
use App\Models\Employee\ExerciseProgram;
use App\Models\Employee\FitnessResult;
use App\Models\Employee\HealthCheck;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    public function create($id)
    {
        $check = HealthCheck::with(['employee', 'imt', 'fitness'])
            ->findOrFail($id);

        return view('exercise.create', compact('check'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'health_check_id' => 'required',
            'frekuensi' => 'required',
            'denyut_nadi' => 'required',
            'durasi' => 'required|numeric',
            'tipe_latihan' => 'required',
        ]);

        // Simpan program latihan
        ExerciseProgram::create([
            'health_check_id' => $request->health_check_id,
            'frekuensi' => $request->frekuensi,
            'denyut_nadi' => $request->denyut_nadi,
            'durasi' => $request->durasi,
            'tipe_latihan' => $request->tipe_latihan,
        ]);

        // 🔥 OPTIONAL: simpan juga ke fitness result
        FitnessResult::updateOrCreate(
            ['health_check_id' => $request->health_check_id],
            [
                'metode' => 'Program Latihan',
                'vo2_max' => null,
                'hasil' => 'Program dibuat'
            ]
        );

        return redirect()->route('health.index')
            ->with('success', 'Program latihan berhasil ditambahkan');
    }
}
