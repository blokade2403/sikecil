<?php

namespace App\Models\Apar;

use App\Models\Apar\AparCheck;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apar extends Model
{
    use HasFactory, HasUuids;
    protected $table = 'apars';
    protected $fillable = [
        'kode_qr',
        'lokasi',
        'ukuran',
        'kondisi',
        'expire_date'
    ];

    public function checks()
    {
        return $this->hasMany(AparCheck::class);
    }
}
