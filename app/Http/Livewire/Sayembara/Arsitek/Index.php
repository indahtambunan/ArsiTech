<?php

namespace App\Http\Livewire\Sayembara\Arsitek;

use App\Models\Sayembara;
use Livewire\Component;

class Index extends Component
{
    public $data;

    public function mount()
    {
        $this->data = Sayembara::where('status', 'terverifikasi')->get();
        // dd($this->data[1]);
    }

    public function ikut($id)
    {
        $data = Sayembara::find($id);
        dd('masuk');
        $data->update([
            'status' => 'terverifikasi'
        ]);
        session()->flash('message', 'Data ' . $data->nama_depan . ' ' . $data->nama_belakang . ' telah diverifikasi.');
        return redirect()->route('arsitek.verif.index');
    }

    public function render()
    {
        return view('livewire.sayembara.arsitek.index');
    }
}
