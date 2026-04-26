<?php

namespace App\Models\SettingUsers;

use App\Models\Employee\HealthCheck;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory, HasUuids;
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'user_id',
        'nip',
        'nama',
        'tanggal_lahir',
        'jenis_kelamin',
        'unit_id',
        'position_id'
    ];

    protected $casts = [
        'tanggal_lahir' => 'date',
    ];

    public function getUmurAttribute()
    {
        return Carbon::parse($this->tanggal_lahir)->age;
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function healthChecks()
    {
        return $this->hasMany(HealthCheck::class);
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
