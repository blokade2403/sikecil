<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExerciseProgram extends Model
{
    use HasUuids;

    protected $fillable = [
        'health_check_id',
        'frekuensi',
        'denyut_nadi',
        'durasi',
        'tipe_latihan'
    ];

    public function check()
    {
        return $this->belongsTo(HealthCheck::class);
    }

    public function health()
    {
        return $this->belongsTo(HealthCheck::class);
    }
}
