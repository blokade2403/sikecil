<?php

namespace App\Models\SettingUsers;

use App\Models\SettingUsers\Role;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory, HasUuids;

    protected $table = 'users';

    protected $fillable = [
        'unit_id',
        'position_id',
        'username',
        'nama',
        'nip',
        'email',
        'password',
        'status_user',
        'status_edit'
    ];

    protected $hidden = [
        'password',
    ];

    // Relasi ke Unit
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }

    // Relasi ke Position
    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'role_user');
    }

    // public function roles()
    // {
    //     return $this->belongsToMany(Role::class, 'role_user', 'user_id', 'role_id');
    // }

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function hasRole($roleName)
    {
        return $this->roles()->where('nama_role', $roleName)->exists();
    }
}
