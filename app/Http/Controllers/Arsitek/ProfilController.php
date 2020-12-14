<?php

namespace App\Http\Controllers\Arsitek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function __invoke()
    {
        return view('Arsitek.profil.index', [
            'title'         => 'profil',
            'subtitle'      => '',
            'active'        => 'profil',
        ]);
    }

    public function edit()
    {
        return view('Arsitek.profil.ubah', [
            'title'         => 'profil',
            'subtitle'      => 'ubah',
            'active'        => 'profil',
        ]);
    }
}
