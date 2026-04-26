<?php

namespace App\Models\SettingUsers;

use App\Models\Hiradc\Hiradc;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory, HasUuids;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $table = 'units';

    protected $fillable = [
        'nama_unit'
    ];

    // Relasi ke User
    public function users()
    {
        return $this->hasMany(User::class);
    }

    // Relasi ke Position
    public function positions()
    {
        return $this->hasMany(Position::class);
    }

    public function hiradcs()
    {
        return $this->hasMany(Hiradc::class, 'unit_id');
    }
}
