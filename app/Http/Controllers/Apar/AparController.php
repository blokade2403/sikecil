<?php

namespace App\Http\Controllers\Apar;

use App\Http\Controllers\Controller;
use App\Models\Apar\Apar;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class AparController extends Controller
{
    public function index()
    {
        $apars = Apar::latest()->get();
        return view('apar.index', compact('apars'));
    }

    public function create()
    {
        return view('apar.create');
    }

    public function store(Request $request)
    {
        $apar = Apar::create([
            'kode_qr' => uniqid(),
            'lokasi' => $request->lokasi,
            'ukuran' => $request->ukuran,
            'kondisi' => $request->kondisi,
            'expire_date' => $request->expire_date
        ]);

        return redirect()->route('apar.show', $apar->id);
    }

    public function show($id)
    {
        $apar = Apar::with('checks')->findOrFail($id);

        // generate QR
        $qr = QrCode::size(200)->generate(route('apar.detail.qr', $apar->kode_qr));

        return view('apar.show', compact('apar', 'qr'));
    }

    // halaman hasil scan QR
    public function detailQR($kode)
    {
        $apar = Apar::where('kode_qr', $kode)->firstOrFail();
        return view('apar.detail', compact('apar'));
    }
}
