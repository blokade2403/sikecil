<?php

namespace App\Models\Accident;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Illuminate\Testing\Fluent\Concerns\Has;

class AccidentReport extends Model
{
    use HasFactory, HasUuids;
    public $incrementing = false;
    protected $keyType = 'string';
    protected $fillable = [
        'unit_id',
        'user_id',
        'tempat',
        'tanggal',
        'jam',
        'foto',
        'saksi',
        'jumlah_korban',
        'laki_laki',
        'perempuan',
        'nama_korban',
        'umur',
        'cedera',
        'tingkat_cedera',
        'uraian',
        'sumber_kecelakaan',
        'tipe',
        'tindak_lanjut'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->id = Str::uuid();
        });
    }
}
