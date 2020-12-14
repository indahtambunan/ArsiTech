@extends('layouts.myview')

@section('content')
{{-- {{dd($id)}} --}}
@livewire('verifikasi.arsitek', ['id'=>$id])
@endsection
