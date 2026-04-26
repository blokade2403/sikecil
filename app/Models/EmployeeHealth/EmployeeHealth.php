<?php

namespace App\Models\EmployeeHealth;

use App\Models\Employee\HealthCheck;
use App\Models\EmployeeExercise\EmployeeExercise;
use App\Models\SettingUsers\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeHealth extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'user_id',
        'health_check_id',
        'berat_badan',
        'tinggi_badan',
        'imt',
        'kategori_imt'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function exercises()
    {
        return $this->hasMany(EmployeeExercise::class);
    }

    public function check()
    {
        return $this->belongsTo(HealthCheck::class, 'health_check_id');
    }
}
