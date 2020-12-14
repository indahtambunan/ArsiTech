<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sayembara extends Model
{
    use HasFactory;

    protected $table = 'sayembara';

    protected $fillable = [
        'nama',
        'konsep',
        'status',
        'tanggal',
        'akhir',
        'luas_bangunan',
        'pelanggan_id',
        'status'
    ];

    public function pelanggan()
    {
        return $this->belongsTo('App\Models\Pelanggan');
    }
}
