<?php

namespace App\Http\Livewire\Data;

use App\Models\Pelanggan as ModelPelanggan;
use Livewire\Component;

class Pelanggan extends Component
{
    public $data;

    public function mount()
    {
        $this->data = ModelPelanggan::all();
    }

    public function verifikasi($id)
    {
        $data = ModelPelanggan::find($id);
        $data->user->update([
            'status' => 'terverifikasi'
        ]);
        session()->flash('message', 'Data ' . $data->nama_depan . ' ' . $data->nama_belakang . ' telah diverifikasi.');
        return redirect()->route('pelanggan.verif.index');
    }

    public function render()
    {
        return view('livewire.data.pelanggan');
    }
}
