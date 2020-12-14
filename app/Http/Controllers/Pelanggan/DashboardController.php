<?php

namespace App\Http\Controllers\Pelanggan;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __invoke()
    {
        return view('pelanggan.dashboard', [
            'title'         => 'dashboard',
            'subtitle'      => '',
            'active'        => 'dashboard',
        ]);
    }
}
