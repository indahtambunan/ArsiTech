<?php

namespace App\Http\Livewire\Sayembara\Pelanggan;

use App\Models\Sayembara;
use Livewire\Component;

class Create extends Component
{
    public $nama, $awal, $akhir, $konsep, $luas_bangunan;

    protected $rules = [
        'nama'          => 'required',
        'awal'          => 'required',
        'akhir'         => 'required',
        'konsep'        => 'required',
        'luas_bangunan' => 'required'
    ];

    // protected $messages = [
    //     'nama.required' => 'Field Nama tidak boleh kosong.',
    //     'nama.unique' => 'Nama Telah digunakan pada Menu yang lain.',
    //     'harga.required' => 'Field Harga tidak boleh kosong.',
    //     'harga.numeric' => 'Field Harga hanya format angka.',
    //     'harga.min' => 'Minimal Harga 0 atau gratis.',
    //     'deskripsi.required' => 'Field Deskripsi tidak boleh kosong.',
    //     'deskripsi.min' => 'Field Deskripsi Minimal 15 karakter.'
    // ];


    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function store()
    {
        $this->validate();

        // dd('masuk');

        Sayembara::create([
            'nama'          => $this->nama,
            'tanggal'       => $this->awal,
            'akhir'         => $this->akhir,
            'konsep'        => $this->konsep,
            'luas_bangunan' => $this->luas_bangunan,
            'pelanggan_id'  => \Auth::user()->pelanggan->id
        ]);

        session()->flash('message', 'Data Sayembara ' . $this->nama . ' Berhasil Ditambah, Menunggu proses Verifikasi.');

        return redirect()->route('pelanggan.dashboard');
    }

    public function render()
    {
        return view('livewire.sayembara.pelanggan.create');
    }
}
