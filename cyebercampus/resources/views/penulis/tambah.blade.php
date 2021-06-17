@extends('layouts.backend.main')

@section('content')
<div class="mt-4">
    @csrf
    <form action="{{ route('penulis.tambah') }}" method="post">
        <div class="form-group">
            <label for="nama_layanan">Nama penulis</label>
            <input class="form control" type="text" name="nama_penulis">
        </div>

</div>
@endsection