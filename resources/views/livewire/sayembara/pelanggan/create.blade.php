<x-form>
    <x-slot name="title">Data Sayembara</x-slot>
    <form wire:submit.prevent="store" method="POST">
        @csrf
        <x-input.input wire:model="nama">
            <x-slot name="label">Nama</x-slot>
        </x-input.input>

        <x-input.input wire:model="konsep">
            <x-slot name="label">Konsep</x-slot>
        </x-input.input>

        <x-container class="row">
            <x-container class="col-sm-12 col-md-6">
                <x-input.datepicker wire:model="awal" id="awal" data-date-format="yyyy/mm/dd">
                    <x-slot name="label">Tanggal Mulai</x-slot>
                </x-input.datepicker>
            </x-container>
            <x-container class="col-sm-12 col-md-6">
                <x-input.datepicker wire:model="akhir" id="akhir" data-date-format="yyyy/mm/dd">
                    <x-slot name="label">Tanggal Akhir</x-slot>
                </x-input.datepicker>
            </x-container>
        </x-container>

        <x-input.input wire:model="luas_bangunan">
            <x-slot name="label">Luas Bangunan</x-slot>
        </x-input.input>

        <x-button.button type="submit" color="primary" class="float-right">Tambah Data Sayembara
        </x-button.button>
    </form>

</x-form>

@push('script')
<script>
    $(document).ready(function(){
        $("#awal").datepicker({
            autoclose: true,
        });
        $('#awal').on('change', function(){
            @this.awal = $(this).val()
        });
        $("#akhir").datepicker({
            autoclose: true,
        });
        $('#akhir').on('change', function(){
            @this.akhir = $(this).val()
        });
    });

</script>
@endpush
