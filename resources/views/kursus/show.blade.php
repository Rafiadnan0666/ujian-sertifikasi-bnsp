@extends('master.dash')

@section('konten')
    <div class="container">
        <h2>Kursus Details</h2>
        <div class="form-group">
            <label for="nama_matkul">Nama Matkul : </label>
            <span>{{ $kursus->nama_matkul }}</span>
        </div>
        <div class="form-group">
            <label for="deskripsi">Deskripsi : </label>
            <span>{{ $kursus->deskripsi }}</span>
        </div>
        <div class="form-group">
            <label for="harga">Harga : </label>
            <span>{{ $kursus->harga }}</span>
        </div>
    </div>
@endsection
