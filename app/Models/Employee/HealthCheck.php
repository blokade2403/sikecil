<?php

namespace App\Models\Employee;

use App\Models\EmployeeHealth\EmployeeHealth;
use App\Models\SettingUsers\Employee;
use App\Models\SettingUsers\User;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HealthCheck extends Model
{
    use HasFactory, HasUuids;

    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'user_id', // ✅ WAJIB
        'tanggal_pemeriksaan',
        'umur',
        'jenis_kelamin'
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function imt()
    {
        return $this->hasOne(EmployeeHealth::class);
    }


    public function exercise()
    {
        return $this->hasOne(ExerciseProgram::class);
    }


    public function fitness()
    {
        return $this->hasOne(FitnessResult::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
