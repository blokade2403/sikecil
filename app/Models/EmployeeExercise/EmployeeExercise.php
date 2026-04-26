<?php

namespace App\Models\EmployeeExercise;

use App\Models\EmployeeHealth\EmployeeHealth;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeExercise extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'employee_health_id',
        'nama_latihan',
        'durasi_menit',
        'frekuensi'
    ];

    public function health()
    {
        return $this->belongsTo(EmployeeHealth::class, 'employee_health_id');
    }
}
