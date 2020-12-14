<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function __invoke()
    {
        return view('Pelanggan.profil.index', [
            'title'         => 'profil',
            'subtitle'      => '',
            'active'        => 'profil',
        ]);
    }

    public function edit()
    {
        return view('Pelanggan.profil.ubah', [
            'title'         => 'profil',
            'subtitle'      => 'ubah',
            'active'        => 'profil',
        ]);
    }
}
