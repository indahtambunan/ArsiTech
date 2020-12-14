<?php

namespace App\Http\Livewire\Profile;

use App\Models\Pelanggan as ModelsPelanggan;
use Livewire\Component;

class Pelanggan extends Component
{
    public $email, $nik, $ktp, $nama, $jenis_kelamin, $tanggal_lahir, $alamat, $no_hp;

    public function mount()
    {
        $data = ModelsPelanggan::where('user_id', \Auth::user()->id)->first();
        // dd($data->nik);
        // if ($data) {
        $this->email            = \Auth::user()->email;
        $this->nik              = $data->nik;
        $this->ktp              = $data->ktp;
        $this->nama             = $data->nama_depan . ' ' . $data->nama_belakang;
        $this->jenis_kelamin    = $data->jenis_kelamin;
        $this->tanggal_lahir    = $data->tanggal_lahir;
        $this->alamat           = $data->alamat;
        $this->no_hp            = $data->no_hp;
        // }
    }

    public function edit()
    {
        return redirect()->route('pelanggan.edit');
    }

    public function render()
    {
        return view('livewire.profile.pelanggan');
    }
}
