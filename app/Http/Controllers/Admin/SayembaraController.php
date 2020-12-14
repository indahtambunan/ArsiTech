<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SayembaraController extends Controller
{
    public function index()
    {
        return view('Admin.verifikasi.sayembara', [
            'title' => 'verifikasi',
            'subtitle' => 'sayembara',
            'active' => 'sayembara'
        ]);
    }
}
