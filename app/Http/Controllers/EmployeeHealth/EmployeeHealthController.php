<?php

namespace App\Http\Controllers\EmployeeHealth;

use App\Http\Controllers\Controller;
use App\Models\EmployeeHealth\EmployeeHealth;
use App\Models\SettingUsers\User;
use Illuminate\Http\Request;

class EmployeeHealthController extends Controller
{
    public function index()
    {
        $data = EmployeeHealth::with('user')->get();
        return view('health.index', compact('data'));
    }

    public function create()
    {
        $users = User::all();
        return view('health.create', compact('users'));
    }

    public function store(Request $request)
    {
        $imt = $request->berat_badan / pow(($request->tinggi_badan / 100), 2);

        $kategori = $this->kategoriIMT($imt);

        $health = EmployeeHealth::create([
            'user_id' => $request->user_id,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'imt' => $imt,
            'kategori_imt' => $kategori
        ]);

        return redirect()->route('health.index');
    }

    private function kategoriIMT($imt)
    {
        if ($imt < 17) return 'Sangat Kurus';
        if ($imt < 18.5) return 'Kurus';
        if ($imt < 25) return 'Normal';
        if ($imt < 27) return 'Gemuk';
        return 'Obesitas';
    }
}
