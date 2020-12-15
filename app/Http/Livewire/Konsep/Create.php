<?php

namespace App\Http\Livewire\Konsep;

use App\Models\Konsep;
use Livewire\Component;

class Create extends Component
{
    public $nama, $harga;

    protected $rules = [
        'nama'  => 'required|string',
        'harga' => 'required|numeric|min:0|not_in:0',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $this->validate();
        Konsep::create([
            'nama'  => $this->nama,
            'harga' => $this->harga,
        ]);
        session()->flash('message', 'Data Konsep ' . $this->nama . ' Berhasil Ditambah.');
        return redirect()->route('konsep.index');
    }

    public function render()
    {
        return view('livewire.konsep.create');
    }
}
