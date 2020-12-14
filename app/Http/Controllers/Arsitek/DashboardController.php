<?php

namespace App\Http\Controllers\Arsitek;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('Arsitek.dashboard', [
            'title'         => 'dashboard',
            'subtitle'      => '',
            'active'        => 'dashboard',
        ]);
    }
}
