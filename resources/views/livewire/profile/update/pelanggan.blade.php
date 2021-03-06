<x-form>
    <x-slot name="title">Data {{$nama_depan.' '.$nama_belakang}}</x-slot>

    <form wire:submit.prevent="update" method="POST">
        @method('put')

        <x-input.input wire:model="email" type="email">
            <x-slot name="label">email</x-slot>
        </x-input.input>

        <x-container class="row">
            <x-container class="col-sm-12 col-md-6">
                <x-input.input wire:model="nama_depan">
                    <x-slot name="label">Nama Depan</x-slot>
                </x-input.input>
            </x-container>
            <x-container class="col-sm-12 col-md-6">
                <x-input.input wire:model="nama_belakang">
                    <x-slot name="label">Nama Belakang</x-slot>
                </x-input.input>
            </x-container>
        </x-container>

        <x-input.input wire:model="jenis_kelamin">
            <x-slot name="label">Jenis Kelamin</x-slot>
        </x-input.input>

        <x-input.select data="$kategori" select-type="label" id="kategori" name="kategori">
            <x-slot name="label">Kategori</x-slot>
            <x-slot name="opt">
                @if ($jenis_kelamin == 'pria')
                <option value="pria" selected>Pria</option>
                <option value="wanita">Wanita</option>
                @else
                <option value="wanita" selected>Wanita</option>
                <option value="pria">Pria</option>
                @endif
            </x-slot>
        </x-input.select>

        <x-input.datepicker wire:model="tanggal_lahir" id="tanggal_lahir" data-date-format="yyyy/mm/dd">
            <x-slot name="label">Tanggal Lahir</x-slot>
        </x-input.datepicker>

        <x-input.textarea wire:model="alamat" value="{{$alamat}}" placeholder="{{$alamat}}">
            <x-slot name="label">Alamat</x-slot>
        </x-input.textarea>

        <x-input.input wire:model="no_hp">
            <x-slot name="label">No Handphone</x-slot>
        </x-input.input>

        <x-button.button type="submit" color="primary" class="float-right">Ubah Profil
        </x-button.button>
    </form>

</x-form>

@push('script')
<script>
    $(document).ready(function(){
        $("#tanggal_lahir").datepicker({
            autoclose: true,
        });
        $('#tanggal_lahir').on('change', function(){
            @this.tanggal_lahir = $(this).val()
        });
    });

</script>
@endpush
