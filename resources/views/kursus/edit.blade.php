@extends('master.dash')

@section('konten')
    <div class="container">
        <h2>Edit Kursus</h2>
    <form method="POST" action="{{ route('kursus.update', $kursus->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama_matkul">Nama Matkul:</label>
                <input type="text" class="form-control" id="nama_matkul" name="nama_matkul" value="{{ $kursus->nama_matkul }}">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi">{{ $kursus->deskripsi }}</textarea>
            </div>
                <div class="form-group">
                <label for="harga">harga:</label>
                <textarea class="form-control" id="harga" name="harga">{{ $kursus->harga }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
