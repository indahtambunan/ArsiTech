@extends('layouts.auth')

@section('content')
<div class="card">
    <div class="card-body">
        <p class="login-box-msg">Register a new membership</p>

        <form action="{{ route('register') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="input-group mb-3">
                <input id="nik" type="nik" class="form-control @error('nik') is-invalid @enderror" name="nik"
                    value="{{ old('nik') }}" required autocomplete="nik" autofocus placeholder="NIK">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                @error('nik')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input id="nama_depan" type="nama_depan" class="form-control @error('nama_depan') is-invalid @enderror"
                    name="nama_depan" value="{{ old('nama_depan') }}" required autocomplete="nama_depan" autofocus
                    placeholder="Nama Depan">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                @error('nama_depan')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input id="nama_belakang" type="nama_belakang"
                    class="form-control @error('nama_belakang') is-invalid @enderror" name="nama_belakang"
                    value="{{ old('nama_belakang') }}" required autocomplete="nama_belakang" autofocus
                    placeholder="Nama Belakang">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                @error('nama_belakang')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-envelope"></span>
                    </div>
                </div>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp"
                    value="{{ old('no_hp') }}" required autocomplete="no_hp" autofocus placeholder="Nomor HP">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                @error('no_hp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <div class="input-group date" data-target-input="nearest">
                    <input name="tanggal_lahir" class="form-control @error('tanggal_lahir') is-invalid @enderror"
                        id="tanggal_lahir" data-date-format="yyyy/mm/dd" placeholder="Tanggal Lahir"
                        value="{{ old('tanggal_lahir') }}">
                    <div class="input-group-append" data-target="#tanggal_lahir" data-toggle="datepicker">
                        <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                    </div>
                </div>
                @error('tanggal_lahir')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <select name="jenis_kelamin" id="jenis_kelamin"
                    class="form-control @error('jenis_kelamin') is-invalid @enderror"
                    value="{{ old('jenis_kelamin') }}">
                    <option selected>Pilih Jenis Kelamin</option>
                    <option value="pria">Pria</option>
                    <option value="wanita">Wanita</option>
                </select>
                @error('jenis_kelamin')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="form-group">
                <select name="role" id="role" class="form-control @error('role') is-invalid @enderror"
                    value="{{ old('role') }}">
                    <option selected>Pilih Sebagai</option>
                    <option value="pelanggan">Pelanggan</option>
                    <option value="arsitek">Arsitek</option>
                </select>
                @error('role')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                    name="password" autocomplete="new-password" placeholder="Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                    autocomplete="new-password" placeholder="Confirm Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-lock"></span>
                    </div>
                </div>
            </div>
            <div class="input-group mb-3">
                <textarea class="form-control" rows="2" name="alamat" id="alamat" type="text" placeholder="Alamat ..."
                    value="{{ old('alamat') }}"></textarea>
                @error('alamat')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
            <label>Input Data jika Sebagai Arsitek</label>
            <div class="form-group">
                <div class="custom-file">
                    <input name="ijazah" type="file" class="custom-file-input @error('ijazah') is-invalid @enderror" id="ijazah" value="{{ old('ijazah') }}">
                    <label class="custom-file-label" for="ijazah">File Ijazah</label>
                    @error('ijazah')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            <div class="form-group">
                <div class="custom-file">
                    <input name="ktp" type="file" class="custom-file-input @error('ktp') is-invalid @enderror" id="ktp" value="{{ old('ktp') }}">
                    <label class="custom-file-label" for="ktp">File KTP</label>
                    @error('ktp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

            </div>
            {{-- <div class="input-group mb-3">
                <input id="ktp" type="ktp" class="form-control @error('ktp') is-invalid @enderror" name="ktp"
                    value="{{ old('ktp') }}" required autocomplete="ktp" autofocus placeholder="KTP">
                <div class="input-group-append">
                    <div class="input-group-text">
                        <span class="fas fa-user"></span>
                    </div>
                </div>
                @error('ktp')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div> --}}
            <button type="submit" class="btn btn-primary btn-block mb-3">Register</button>
        </form>
        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
</div><!-- /.card -->
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('plugins/datepicker/datepicker3.css') }}">
@endpush

@push('js')
<script src="{{ asset('plugins/bs-custom-file-input/bs-custom-file-input.min.js') }}"></script>
<script src="{{ asset('plugins/datepicker/bootstrap-datepicker.js') }}"></script>
@endpush

@push('script')
<script>
    $(document).ready(function(){
        $("#tanggal_lahir").datepicker({
            autoclose: true,
        });
    });
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
@endpush
