<?php

namespace App\Http\Controllers\Accident;

use App\Http\Controllers\Controller;
use App\Models\Accident\AccidentReport;
use App\Models\SettingUsers\Unit;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AccidentReportController extends Controller
{
    public function index()
    {
        $data = AccidentReport::latest()->get();
        return view('accident.index', compact('data'));
    }

    public function create()
    {
        $units = Unit::all();
        return view('accident.create', compact('units'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'tempat' => 'required',
            'tanggal' => 'required|date',
            'jam' => 'required',
            'jumlah_korban' => 'required|integer',
            'tipe' => 'required',
            'foto' => 'nullable|image|mimes:jpg,png,jpeg|max:2048'
        ]);

        // HANDLE UPLOAD
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('uploads/accidents'), $filename);

            $fotoPath = 'uploads/accidents/' . $filename;
        } else {
            $fotoPath = null;
        }

        // SIMPAN DATA
        AccidentReport::create([
            'unit_id' => auth()->user()->employee->unit_id ?? null,
            'user_id' => auth()->id(),
            'tempat' => $request->tempat,
            'tanggal' => $request->tanggal,
            'jam' => $request->jam,
            'foto' => $fotoPath,
            'saksi' => $request->saksi,
            'jumlah_korban' => $request->jumlah_korban,
            'laki_laki' => $request->laki_laki,
            'perempuan' => $request->perempuan,
            'nama_korban' => $request->nama_korban,
            'umur' => $request->umur,
            'cedera' => $request->cedera,
            'tingkat_cedera' => $request->tingkat_cedera,
            'uraian' => $request->uraian,
            'sumber_kecelakaan' => $request->sumber_kecelakaan,
            'tipe' => $request->tipe,
            'tindak_lanjut' => $request->tindak_lanjut,
        ]);

        return redirect()
            ->route('accident.index')
            ->with('success', 'Laporan berhasil disimpan');
    }

    // EXPORT PDF
    public function pdf($id)
    {
        $data = AccidentReport::findOrFail($id);

        $pdf = Pdf::loadView('accident.pdf', compact('data'))
            ->setPaper('A4');

        return $pdf->download('laporan-kecelakaan.pdf');
    }
}
