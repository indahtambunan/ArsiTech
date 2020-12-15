<x-form>
    <x-slot name="title">Data Konsep</x-slot>
    <form wire:submit.prevent="store" method="POST">
        @csrf
        <x-input.input wire:model="nama">
            <x-slot name="label">Nama</x-slot>
        </x-input.input>

        <x-input.input wire:model="harga" placeholder="Harga Per Meter persegi">
            <x-slot name="label">Harga</x-slot>
        </x-input.input>

        <x-button.button type="submit" color="primary" class="float-right">Tambah Data Konsep
        </x-button.button>
    </form>

</x-form>
