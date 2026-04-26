<?php

namespace App\Models\SettingUsers;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'positions';

    protected $fillable = [
        'nama_jabatan',
        'level_jabatan',
        'parent_id',
        'unit_id'
    ];

    // Relasi ke parent (hierarki jabatan)
    public function parent()
    {
        return $this->belongsTo(Position::class, 'parent_id');
    }

    // Relasi ke child
    public function children()
    {
        return $this->hasMany(Position::class, 'parent_id');
    }

    // Relasi ke Unit
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    // Relasi ke User
    public function users()
    {
        return $this->hasMany(User::class);
    }
}
