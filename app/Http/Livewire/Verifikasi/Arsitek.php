<?php

namespace App\Http\Livewire\Verifikasi;

use App\Models\Arsitek as ModelsArsitek;
use Livewire\Component;

class Arsitek extends Component
{
    public $arsitekId, $email, $nik, $ktp, $nama, $jenis_kelamin, $tanggal_lahir, $alamat, $no_hp, $status;

    public function mount($id)
    {
        $data = ModelsArsitek::find($id);

        $this->arsitekId        = $data->id;
        $this->email            = $data->user->email;
        $this->nik              = $data->nik;
        $this->ktp              = $data->ktp;
        $this->nama             = $data->nama_depan . ' ' . $data->nama_belakang;
        $this->jenis_kelamin    = $data->jenis_kelamin;
        $this->tanggal_lahir    = $data->tanggal_lahir;
        $this->alamat           = $data->alamat;
        $this->no_hp            = $data->no_hp;
        $this->status           = $data->user->status;
    }

    public function back()
    {
        return redirect()->route('arsitek.verif.index');
    }

    public function verif()
    {
        $data = ModelsArsitek::find($this->arsitekId);
        $data->user->update([
            'status' => 'terverifikasi'
        ]);
        session()->flash('message', 'Data ' . $data->nama_depan . ' ' . $data->nama_belakang . ' telah diverifikasi.');
        return redirect()->route('arsitek.verif.index');
    }

    public function render()
    {
        return view('livewire.verifikasi.arsitek');
    }
}
