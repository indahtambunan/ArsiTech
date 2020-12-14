<?php

namespace App\Http\Livewire\Profile\Update;

use App\Models\Pelanggan as ModelsPelanggan;
use Livewire\Component;

class Pelanggan extends Component
{
    public $userId, $email, $nama_depan, $nama_belakang, $jenis_kelamin, $tanggal_lahir, $alamat, $no_hp;

    public function mount()
    {
        $data = ModelsPelanggan::where('user_id', \Auth::user()->id)->first();

        $this->userId           = $data->id;
        $this->email            = \Auth::user()->email;
        $this->nama_depan       = $data->nama_depan;
        $this->nama_belakang    = $data->nama_belakang;
        $this->jenis_kelamin    = $data->jenis_kelamin;
        $this->tanggal_lahir    = $data->tanggal_lahir;
        $this->alamat           = $data->alamat;
        $this->no_hp            = $data->no_hp;
    }

    /**
     * rules
     */
    protected $rules = [
        'email'         => 'required|email|string|max:255|unique:users,id,id',
        'nama_depan'    => 'required|max:255',
        'nama_belakang' => 'required|max:255',
        'jenis_kelamin' => 'required',
        'tanggal_lahir' => 'required',
        'alamat'        => 'required|min:15',
        'no_hp'         => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    /**
     * update function
     */
    public function update()
    {
        $this->validate();

        $user = \Auth::user();
        $pelanggan = ModelsPelanggan::where('id', $this->userId)->first();


        $user->update([
            'email' => $this->email
        ]);

        $pelanggan->update([
            'nama_depan' => $this->nama_depan,
            'nama_belakang' => $this->nama_belakang,
            'jenis_kelamin' => $this->jenis_kelamin,
            'tanggal_lahir' => $this->tanggal_lahir,
            'alamat' => $this->alamat,
            'no_hp' => $this->no_hp,
        ]);

        //flash message
        session()->flash('message', 'Data ' . $this->nama_depan . ' ' . $this->nama_belakang . ' Berhasil Diupdate.');

        //redirect
        return redirect()->route('pelanggan.profil');
    }

    public function render()
    {
        return view('livewire.profile.update.pelanggan');
    }
}
