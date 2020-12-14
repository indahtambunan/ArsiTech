<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SayembaraController extends Controller
{
    public function create()
    {
        return view('Pelanggan.sayembara.tambah', [
            'title'         => 'sayembara',
            'subtitle'      => 'tambah',
            'active'        => 'sayembara',
        ]);
    }
}
