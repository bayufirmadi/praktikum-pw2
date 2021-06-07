@extends('layouts.frontend.main')

@section('content')
<div class="mt-4">
    @csrf
    <form action="{{ route('layanan.ubah',['id'=>$layanan->id]) }}" method="post">
        <div class="form-group">
            <label for="nama_layanan">Nama Layanan</label>
            <input class="form control" type="text" name="nama_layanan" value='{{$layanan->nama_layanan}}'>
        </div>
        <div class="form-group">
            <label for="deskripsi_layanan">Deskripsi Layanan</label>
            <textarea class="form-control" name="deskripsi_layanan" id="" cols="30" rows="10">
            {{$layanan->deskripsi_layanan}}
            </textarea>
        </div>
        <input class="btn btn-primary" type="submit" value="simpan" >
    </form>

</div>
@endsection