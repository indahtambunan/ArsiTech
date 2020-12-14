<x-table title="Data Pelanggan" id="dt">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Tanggal Lahir</th>
            <th>No Handphone</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        <?php $no=1 ?>
        @foreach ($data as $k)
        <tr>
            <td>{{$no}}</td>
            <td>{{$k->nama_depan . ' ' . $k->nama_belakang}}</td>
            <td>{{$k->jenis_kelamin}}</td>
            <td>{{$k->tanggal_lahir}}</td>
            <td>{{$k->no_hp}}</td>
            {{-- <span class="badge badge-danger">New</span> --}}
            <td>
                @if ($k->user->status == 'terverifikasi')
                <span class="badge badge-success">{{$k->user->status}}</span>
                @else
                <span class="badge badge-danger">{{$k->user->status}}</span>
                @endif
            </td>
            <td>
                @if ($k->user->status == 'belum terverifikasi')
                <x-button.button wire:click="verifikasi({{$k->id}})" color="primary" class="btn-sm">
                    <x-icon type="pencil-alt" />
                    Verifikasi
                </x-button.button>
                @endif
            </td>
            <?php $no++ ?>
        </tr>
        @endforeach
    </tbody>
</x-table>
