@extends('master.dash')

@section('konten')
    <div class="container">
        <h2>Create Kursus</h2>
        <form method="POST" action="{{ route('kursus.store') }}">
            @csrf
            <div class="form-group">
                <label for="nama_matkul">Nama Matkul:</label>
                <input type="text" class="form-control" id="nama_matkul" name="nama_matkul">
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi:</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi"></textarea>
            </div>
            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="text" class="form-control" id="harga" name="harga">
            </div>
           
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
