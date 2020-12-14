<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Arsitek;
use App\Models\Pelanggan;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function pelanggan()
    {
        return view('Admin.verifikasi.pelanggan', [
            'title' => 'verifikasi',
            'subtitle' => 'pelanggan',
            'active' => 'pelanggan'
        ]);
    }

    public function show($id)
    {
        return view('admin.verifikasi.detail', [
            'title' => 'verifikasi',
            'subtitle' => 'arsitek',
            'active' => 'arsitek',
            'id' => $id
        ]);
    }

    public function arsitek()
    {
        return view('Admin.verifikasi.arsitek', [
            'title' => 'verifikasi',
            'subtitle' => 'arsitek',
            'active' => 'arsitek'
        ]);
    }

    public function verifArsitek($id)
    {
        # code...
    }
}
