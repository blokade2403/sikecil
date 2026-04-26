<?php

namespace App\Models\Hiradc;

use App\Models\SettingUsers\Unit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Hiradc extends Model
{
    use HasFactory;
    protected $table = 'hiradcs';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'unit_id',
        'aktivitas',
        'bahaya',
        'pengendalian',
        'kemungkinan',
        'keparahan',
        'score',
        'peringkat',
        'unit_id',
        'aktivitas',
        'bahaya',
        'pengendalian',
        'kemungkinan',
        'keparahan',
        'score',
        'peringkat',
        'status',
        'approved_by',
        'approved_at'
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            if (!$model->id) {
                $model->id = Str::uuid();
            }
        });
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
}
