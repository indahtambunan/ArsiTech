<?php

namespace App\Http\Livewire\Konsep;

use Livewire\Component;

class Create extends Component
{
    public $nama, $harga;

    protected $rules = [
        'nama'  => 'required',
        'harga' => 'required',
    ];

    public function store()
    {
        # code...
    }

    public function render()
    {
        return view('livewire.konsep.create');
    }
}
