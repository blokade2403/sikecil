<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee\FitnessResult;
use App\Models\Employee\HealthCheck;
use App\Models\EmployeeHealth\EmployeeHealth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index(Request $request)
    {

        $query = HealthCheck::with(['employee.unit', 'imt', 'fitness']);

        // 🔹 FILTER UNIT
        if ($request->unit_id) {
            $query->whereHas('employee', function ($q) use ($request) {
                $q->where('unit_id', $request->unit_id);
            });
        }

        // 🔹 FILTER TANGGAL
        if ($request->from && $request->to) {
            $query->whereBetween('tanggal_pemeriksaan', [$request->from, $request->to]);
        }

        $data = $query->get();

        $totalCheck = HealthCheck::count();
        $latest = HealthCheck::with(['employee', 'imt', 'fitness'])
            ->latest()
            ->take(5)
            ->get();

        $checks = HealthCheck::with([
            'user.employee.unit',
            'imt',
            'fitness'
        ])->latest()->get();

        // 🔹 Statistik
        $imtStats = $data->groupBy('imt.kategori_imt')
            ->map(function ($item, $key) {
                return [
                    'label' => $key ?? 'Tidak Ada',
                    'total' => count($item)
                ];
            })->values();

        $fitnessStats = $data->groupBy('fitness.hasil')
            ->map(function ($item, $key) {
                return [
                    'label' => $key ?? 'Tidak Ada',
                    'total' => count($item)
                ];
            })->values();

        $avgVo2 = round($data->avg('fitness.vo2_max'), 2);

        // 🔹 Ranking (TOP FIT)
        $ranking = $data->sortByDesc('fitness.vo2_max')->take(5);

        // 🔹 Obesitas Alert
        $obesitas = $data->filter(function ($d) {
            return strtolower($d->imt->kategori_imt ?? '') === 'obesitas';
        });

        $units = \App\Models\SettingUsers\Unit::all();

        return view('dashboard.index', compact(
            'data',
            'imtStats',
            'fitnessStats',
            'avgVo2',
            'ranking',
            'obesitas',
            'units',
            'checks',
            'totalCheck',
            'latest'
        ));
        // // 🔹 Total Data
        // $totalCheck = HealthCheck::count();

        // // 🔹 Statistik IMT
        // $imtStats = EmployeeHealth::select(
        //     DB::raw('kategori_imt as label'),
        //     DB::raw('count(*) as total')
        // )->groupBy('kategori_imt')->get();

        // // 🔹 Statistik Fitness
        // $fitnessStats = FitnessResult::select(
        //     DB::raw('hasil as label'),
        //     DB::raw('count(*) as total')
        // )->groupBy('hasil')->get();

        // // 🔹 Rata-rata VO2
        // $avgVo2 = round(FitnessResult::avg('vo2_max'), 2);

        // // 🔹 Data terbaru
        // $latest = HealthCheck::with(['employee', 'imt', 'fitness'])
        //     ->latest()
        //     ->take(5)
        //     ->get();

        // $checks = HealthCheck::with([
        //     'user.employee.unit',
        //     'imt',
        //     'fitness'
        // ])->latest()->get();

        // return view('dashboard.index', compact(
        //     'totalCheck',
        //     'imtStats',
        //     'fitnessStats',
        //     'avgVo2',
        //     'latest',
        //     'checks'
        // ));
    }
}
