<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    protected $fillable = [
        'unit',
        'pengirim',
        'penerima',
        'deskripsi',
        'posisi',
        'kurir',
        'catatan',
        'petugas'
    ];

    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'unit', 'no_unit');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'posisi', 'id');
    }

    public function courier()
    {
        return $this->belongsTo(Courier::class, 'kurir', 'id');
    }

    public function handler()
    {
        return $this->belongsTo(Handler::class, 'petugas', 'id');
    }
}
