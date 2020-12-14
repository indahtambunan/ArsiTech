<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat',
        'no_hp',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function sayembara()
    {
        return $this->hasMany('App\Models\Sayembara');
    }
}
