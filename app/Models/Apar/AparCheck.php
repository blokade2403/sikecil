<?php

namespace App\Models\Apar;

use App\Models\SettingUsers\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AparCheck extends Model
{
    use HasFactory;

    protected $table = 'apar_checks';
    protected $fillable = [
        'apar_id',
        'user_id',
        'selang',
        'pengunci',
        'isi_tabung',
        'kondisi_fisik',
        'catatan'
    ];

    public function apar()
    {
        return $this->belongsTo(Apar::class, 'apar_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
