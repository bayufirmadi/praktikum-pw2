@extends('layouts.backend.main')

@section('content')
    <h1 class="mt-4">Detail Layanan</h1>
    Nama Layanan : {{ $layanan->nama_layanan }} <br>
    Desktipsi layanan : {{$layanan->deskripsi_layanan}} <br>   
@endsection