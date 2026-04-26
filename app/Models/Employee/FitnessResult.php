<?php

namespace App\Models\Employee;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessResult extends Model
{
    use HasUuids;

    protected $fillable = [
        'health_check_id',
        'metode',
        'waktu_tempuh',
        'vo2_max',
        'hasil'
    ];

    public function check()
    {
        return $this->belongsTo(HealthCheck::class);
    }
}
