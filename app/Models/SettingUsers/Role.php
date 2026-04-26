<?php

namespace App\Models\SettingUsers;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'roles';

    protected $fillable = [
        'nama_role'
    ];

    // Relasi ke User (many to many)
    public function users()
    {
        return $this->belongsToMany(User::class, 'role_user');
    }
}
