<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\Employee\ExerciseProgram;
use App\Models\Employee\FitnessResult;
use App\Models\Employee\HealthCheck;
use App\Models\EmployeeHealth\EmployeeHealth;
use App\Models\SettingUsers\Employee;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HealthCheckController extends Controller
{
    public function index()
    {
        $imtStats = DB::table('employee_healths')
            ->select('kategori_imt', DB::raw('count(*) as total'))
            ->groupBy('kategori_imt')
            ->pluck('total', 'kategori_imt');

        $vo2Stats = DB::table('fitness_results')
            ->select('hasil', DB::raw('avg(vo2_max) as avg_vo2'))
            ->groupBy('hasil')
            ->pluck('avg_vo2', 'hasil');

        $employees = Employee::all();
        $imt = DB::table('imt_categories')->get();
        $checks = HealthCheck::with([
            'user.employee.unit',
            'imt',
            'fitness'
        ])->latest()->get();

        return view('health.index', compact('checks', 'employees', 'imt', 'imtStats', 'vo2Stats'), [
            'title' => 'Halaman Pemeriksaan Kesehatan',
            'title2' => 'Pemeriksaan Kesehatan',
            'routePrefix' => 'health'
        ]);
    }

    public function create() {}

    // public function store(Request $request)
    // {
    //     DB::beginTransaction();


    //     try {

    //         $employee = Employee::findOrFail($request->employee_id);
    //         $umur = Carbon::parse($employee->tanggal_lahir)->age;

    //         $check = HealthCheck::create([
    //             'user_id' => $employee->user_id,
    //             'employee_id' => $employee->id, // ✅ TAMBAHKAN INI
    //             'tanggal_pemeriksaan' => $request->tanggal_pemeriksaan,
    //             'umur' => $umur,
    //             'jenis_kelamin' => $employee->jenis_kelamin
    //         ]);


    //         // IMT
    //         $imt = $request->berat / pow(($request->tinggi / 100), 2);

    //         $kategori = DB::table('imt_categories')
    //             ->where('min', '<=', $imt)
    //             ->where('max', '>=', $imt)
    //             ->value('nama');


    //         $employeeHealth = EmployeeHealth::create([
    //             'health_check_id' => $check->id,
    //             'user_id' => $employee->user_id, // ✅ WAJIB
    //             'berat_badan' => $request->berat,
    //             'tinggi_badan' => $request->tinggi,
    //             'imt' => $imt,
    //             'kategori_imt' => $request->kategori_imt
    //         ]);


    //         // VO2 MAX
    //         $vo2 = 132.853 - (0.0769 * $request->berat)
    //             - (0.3877 * $umur)
    //             + (6.315 * ($employee->jenis_kelamin == 'L' ? 1 : 0))
    //             - (3.2649 * $request->waktu);

    //         $hasil = $this->kategoriFitness($vo2);


    //         FitnessResult::create([
    //             'health_check_id' => $check->id,
    //             'metode' => 'Rockport',
    //             'waktu_tempuh' => $request->waktu,
    //             'vo2_max' => $vo2,
    //             'hasil' => $hasil
    //         ]);

    //         // PROGRAM LATIHAN
    //         ExerciseProgram::create([
    //             'health_check_id' => $check->id,
    //             'frekuensi' => $request->frekuensi,
    //             'denyut_nadi' => $request->denyut,
    //             'durasi' => $request->durasi,
    //             'tipe_latihan' => $request->tipe
    //         ]);

    //         // dd($request->all(), $imt, $kategori, $vo2, $hasil);

    //         DB::commit();

    //         return redirect()->route('health.index')->with('success', 'Data berhasil disimpan');
    //     } catch (\Exception $e) {
    //         DB::rollBack();
    //         return back()->with('error', $e->getMessage());
    //     }
    // }

    public function store(Request $request)
    {
        DB::beginTransaction();

        try {

            // VALIDASI (waktu & denyut optional)
            $request->validate([
                'employee_id' => 'required',
                'tanggal_pemeriksaan' => 'required|date',
                'tinggi' => 'required|numeric',
                'berat' => 'required|numeric',
                'waktu' => 'nullable|numeric',
                'denyut' => 'nullable|numeric',
            ]);

            $employee = Employee::findOrFail($request->employee_id);
            $umur = Carbon::parse($employee->tanggal_lahir)->age;

            // =========================
            // SIMPAN HEALTH CHECK
            // =========================
            $check = HealthCheck::create([
                'user_id' => $employee->user_id,
                'employee_id' => $employee->id,
                'tanggal_pemeriksaan' => $request->tanggal_pemeriksaan,
                'umur' => $umur,
                'jenis_kelamin' => $employee->jenis_kelamin
            ]);

            // =========================
            // HITUNG IMT
            // =========================
            $imt = $request->berat / pow(($request->tinggi / 100), 2);

            $kategori = DB::table('imt_categories')
                ->where('min', '<=', $imt)
                ->where('max', '>=', $imt)
                ->value('nama');

            EmployeeHealth::create([
                'health_check_id' => $check->id,
                'user_id' => $employee->user_id,
                'berat_badan' => $request->berat,
                'tinggi_badan' => $request->tinggi,
                'imt' => $imt,
                'kategori_imt' => $request->kategori_imt // ✅ FIX
            ]);

            // =========================
            // VO2 MAX (OPTIONAL)
            // =========================
            $vo2 = null;
            $hasil = null;

            if ($request->filled('waktu')) {
                $vo2 = 132.853 - (0.0769 * $request->berat)
                    - (0.3877 * $umur)
                    + (6.315 * ($employee->jenis_kelamin == 'L' ? 1 : 0))
                    - (3.2649 * $request->waktu);

                $hasil = $this->kategoriFitness($vo2);
            }

            FitnessResult::create([
                'health_check_id' => $check->id,
                'metode' => 'Rockport',
                'waktu_tempuh' => $request->waktu ?? null,
                'vo2_max' => $vo2,
                'hasil' => $hasil
            ]);

            // =========================
            // PROGRAM LATIHAN (OPTIONAL)
            // =========================
            if ($request->filled('denyut') || $request->filled('frekuensi')) {
                ExerciseProgram::create([
                    'health_check_id' => $check->id,
                    'frekuensi' => $request->frekuensi,
                    'denyut_nadi' => $request->denyut,
                    'durasi' => $request->durasi,
                    'tipe_latihan' => $request->tipe
                ]);
            }

            DB::commit();

            return redirect()->route('health.index')
                ->with('success', 'Data berhasil disimpan (bisa dilengkapi nanti)');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', $e->getMessage());
        }
    }

    // 🔹 DETAIL
    public function show($id)
    {
        $data = HealthCheck::with([
            'employee.unit',
            'imt',
            'fitness',
            'exercise'
        ])->findOrFail($id);

        return view('health.show', compact('data'));
    }

    private function generateProgram($vo2, $imt, $umur)
    {
        $fitness = $this->kategoriFitness($vo2);
        $body = $this->kategoriIMT($imt);

        $program = [];

        // 🔥 FREKUENSI DASAR
        $program['frekuensi'] = match ($fitness) {
            'rendah' => '2-3x/minggu',
            'cukup' => '3x/minggu',
            'baik' => '4-5x/minggu',
            default => '5-6x/minggu'
        };

        // 🔥 DURASI (dipengaruhi umur)
        if ($umur > 45) {
            $program['durasi'] = '20-40 menit';
        } else {
            $program['durasi'] = match ($fitness) {
                'rendah' => '20-30 menit',
                'cukup' => '30-40 menit',
                'baik' => '40-60 menit',
                default => '60 menit'
            };
        }

        // 🔥 TIPE LATIHAN (kombinasi IMT + VO2)
        if ($body === 'obesitas') {
            $program['tipe'] = 'Low impact cardio (jalan cepat, sepeda)';
        } elseif ($fitness === 'rendah') {
            $program['tipe'] = 'Aerobik ringan';
        } elseif ($fitness === 'cukup') {
            $program['tipe'] = 'Aerobik + interval ringan';
        } elseif ($fitness === 'baik') {
            $program['tipe'] = 'Interval training + strength';
        } else {
            $program['tipe'] = 'HIIT + endurance';
        }

        // 🔥 ZONA NADI (lebih presisi)
        $maxNadi = 220 - $umur;

        $program['zona'] = match ($fitness) {
            'rendah' => round($maxNadi * 0.5) . '-' . round($maxNadi * 0.6) . ' bpm',
            'cukup' => round($maxNadi * 0.6) . '-' . round($maxNadi * 0.7) . ' bpm',
            'baik' => round($maxNadi * 0.7) . '-' . round($maxNadi * 0.8) . ' bpm',
            default => round($maxNadi * 0.8) . '-' . round($maxNadi * 0.9) . ' bpm',
        };

        // 🔥 PENYESUAIAN IMT
        if ($body === 'obesitas') {
            $program['catatan'] = 'Fokus pembakaran lemak, hindari intensitas tinggi di awal';
        } elseif ($body === 'kurus') {
            $program['catatan'] = 'Tambahkan latihan kekuatan & nutrisi';
        } else {
            $program['catatan'] = 'Pertahankan konsistensi latihan';
        }

        return $program;
    }


    private function getKategoriIMT($imt)
    {
        return DB::table('imt_categories')
            ->where('min', '<=', $imt)
            ->where('max', '>=', $imt)
            ->value('nama');
    }

    private function kategoriFitness($vo2)
    {
        if ($vo2 < 25) return 'Kurang';
        if ($vo2 < 35) return 'Cukup';
        if ($vo2 < 45) return 'Baik';
        return 'Baik Sekali';
    }
}
