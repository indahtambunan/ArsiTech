<x-form>
    <x-slot name="title">Data {{$nama}}</x-slot>

    {{-- <form wire:submit.prevent="changePass"> --}}
    <x-input.input wire:model="nik" readonly>
        <x-slot name="label">NIK</x-slot>
    </x-input.input>

    <x-input.input wire:model="ktp" readonly>
        <x-slot name="label">KTP</x-slot>
    </x-input.input>

    <x-input.input wire:model="email" type="email" readonly>
        <x-slot name="label">email</x-slot>
    </x-input.input>

    <x-input.input wire:model="nama" readonly>
        <x-slot name="label">Nama</x-slot>
    </x-input.input>

    <x-input.input wire:model="jenis_kelamin" readonly>
        <x-slot name="label">Jenis Kelamin</x-slot>
    </x-input.input>

    <x-input.input wire:model="tanggal_lahir" readonly>
        <x-slot name="label">Tanggal Lahir</x-slot>
    </x-input.input>

    <x-input.textarea value="{{$alamat}}" placeholder="{{$alamat}}" readonly>
        <x-slot name="label">Alamat</x-slot>
    </x-input.textarea>

    <x-input.input wire:model="no_hp" readonly>
        <x-slot name="label">No Handphone</x-slot>
    </x-input.input>

    @if ($status == 'terverifikasi')
    <x-button.button wire:click="back" color="danger" class="float-right">Kembali
    </x-button.button>
    @else
    <x-button.button wire:click="verif" color="primary" class="float-right">Verifikasi
    </x-button.button>
    @endif
    {{-- <x-button.button wire:click="edit" color="primary" class="float-right">Ganti Profil
    </x-button.button> --}}
    {{-- </form> --}}

</x-form>
