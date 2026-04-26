<?php

namespace App\Http\Controllers\Apar;

use App\Http\Controllers\Controller;
use App\Models\Apar\Apar;
use App\Models\Apar\AparCheck;
use Illuminate\Http\Request;

class AparCheckController extends Controller
{
    public function create($apar_id)
    {
        $apar = Apar::findOrFail($apar_id);
        return view('apar_check.create', compact('apar'));
    }

    public function store(Request $request)
    {
        AparCheck::create([
            'apar_id' => $request->apar_id,
            'user_id' => auth()->id(),
            'selang' => $request->selang,
            'pengunci' => $request->pengunci,
            'isi_tabung' => $request->isi_tabung,
            'kondisi_fisik' => $request->kondisi_fisik,
            'catatan' => $request->catatan,
        ]);

        return redirect()->back()->with('success', 'Checklist berhasil disimpan');
    }
}
