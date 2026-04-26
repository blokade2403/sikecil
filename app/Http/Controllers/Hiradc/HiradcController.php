<?php

namespace App\Http\Controllers\Hiradc;

use App\Http\Controllers\Controller;
use App\Models\Hiradc\Hiradc;
use App\Models\SettingUsers\Unit;
use App\Models\SettingUsers\User;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HiradcController extends Controller
{
    public function index()
    {
        $data = Hiradc::with('unit')->latest()->get();
        $units = Unit::all();

        $total = Hiradc::count();

        $low = Hiradc::where('peringkat', 'Low')->count();
        $medium = Hiradc::where('peringkat', 'Medium')->count();
        $high = Hiradc::where('peringkat', 'High')->count();

        $pending = Hiradc::whereIn('status', ['submitted', 'approved_supervisor'])->count();

        // Data per unit
        $perUnit = Unit::withCount('hiradcs')->get();

        $matrix = [];

        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                $matrix[$i][$j] = $data
                    ->where('kemungkinan', $j)
                    ->where('keparahan', $i)
                    ->count();
            }
        }

        return view('hiradc.index', compact('data', 'matrix', 'units', 'total', 'low', 'medium', 'high', 'pending', 'perUnit'));
    }

    public function dashboard()
    {
        $data = Hiradc::with('unit')->latest()->get();
        $units = Unit::all();
        $total = Hiradc::count();

        $low = Hiradc::where('peringkat', 'Low')->count();
        $medium = Hiradc::where('peringkat', 'Medium')->count();
        $high = Hiradc::where('peringkat', 'High')->count();

        $pending = Hiradc::whereIn('status', ['submitted', 'approved_supervisor'])->count();

        // Data per unit
        $perUnit = Unit::withCount('hiradcs')->get();
        return view('hiradc.dashboard', compact('units', 'total', 'low', 'medium', 'high', 'pending', 'perUnit'));
    }

    public function create()
    {
        $units = Unit::all();
        return view('hiradc.create', compact('units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'unit_id' => 'required',
            'aktivitas' => 'required',
            'bahaya' => 'required',
            'pengendalian' => 'required',
            'kemungkinan' => 'required|integer|min:1|max:5',
            'keparahan' => 'required|integer|min:1|max:5',
        ]);

        $score = $request->kemungkinan * $request->keparahan;

        // menentukan peringkat
        if ($score <= 5) {
            $peringkat = 'Low';
        } elseif ($score <= 15) {
            $peringkat = 'Medium';
        } else {
            $peringkat = 'High';
        }

        Hiradc::create([
            'unit_id' => $request->unit_id,
            'aktivitas' => $request->aktivitas,
            'bahaya' => $request->bahaya,
            'pengendalian' => $request->pengendalian,
            'kemungkinan' => $request->kemungkinan,
            'keparahan' => $request->keparahan,
            'score' => $score,
            'peringkat' => $peringkat,
        ]);

        return redirect()->route('hiradc.index')->with('success', 'Data berhasil disimpan');
    }

    public function matrix()
    {
        $data = Hiradc::all();

        $matrix = [];

        for ($i = 1; $i <= 5; $i++) {
            for ($j = 1; $j <= 5; $j++) {
                $matrix[$i][$j] = $data
                    ->where('kemungkinan', $j)
                    ->where('keparahan', $i)
                    ->count();
            }
        }

        return view('hiradc.matrix', compact('matrix'));
    }

    public function submit($id)
    {
        $hiradc = Hiradc::findOrFail($id);
        $hiradc->update(['status' => 'submitted']);

        return back();
    }

    public function approve($id)
    {
        $user = User::all();
        $hiradc = Hiradc::findOrFail($id);
        /** @var User $user */
        $user = Auth::user();

        // ADMIN bisa approve langsung final
        if ($user->hasRole('Admin')) {
            $hiradc->update([
                'status' => 'approved_k3',
                'approved_k3_by' => $user->id
            ]);
        }

        // SUPERVISOR approve tahap 1
        elseif ($user->hasRole('Supervisor')) {

            if ($hiradc->status != 'submitted') {
                return back()->with('error', 'Belum bisa di-approve supervisor');
            }

            $hiradc->update([
                'status' => 'approved_supervisor',
                'approved_supervisor_by' => $user->id
            ]);
        }

        // K3 approve final
        elseif ($user->hasRole('K3')) {

            if ($hiradc->status != 'approved_supervisor') {
                return back()->with('error', 'Harus disetujui supervisor dulu');
            }

            $hiradc->update([
                'status' => 'approved_k3',
                'approved_k3_by' => $user->id
            ]);
        }

        return back()->with('success', 'Approval berhasil');
    }

    public function reject($id)
    {
        Hiradc::findOrFail($id)->update([
            'status' => 'rejected'
        ]);

        return back();
    }

    public function exportPdf()
    {
        $data = Hiradc::with('unit')->get();

        $pdf = PDF::loadView('hiradc.pdf', compact('data'))
            ->setPaper('A4', 'landscape');

        return $pdf->download('laporan-hiradc.pdf');
    }
}
