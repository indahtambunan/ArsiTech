<?php

namespace App\Http\Livewire\Data;

use App\Models\Arsitek as ModelArsitek;
use Livewire\Component;

class Arsitek extends Component
{
    public $data;

    public function mount()
    {
        $this->data = ModelArsitek::all();
    }

    public function detail($id)
    {
        return redirect()->route('arsitek.verif.detail', $id);
    }

    public function render()
    {
        return view('livewire.data.arsitek');
    }
}
