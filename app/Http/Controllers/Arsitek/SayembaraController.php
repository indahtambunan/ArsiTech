<?php

namespace App\Http\Controllers\Arsitek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SayembaraController extends Controller
{
    public function index()
    {
        return view('Arsitek.sayembara.index', [
            'title'         => 'sayembara',
            'subtitle'      => '',
            'active'        => 'sayembara',
        ]);
    }
}
