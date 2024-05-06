<!-- resources/views/pesertas/edit.blade.php -->

@extends('master.dash')

@section('konten')
    <div class="container">
        <h2>Edit Peserta</h2>
        <form method="POST" action="{{ route('peserta.update', $peserta->id) }}">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" value="{{ $peserta->nama }}" required>
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{ $peserta->tgl_lahir }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ $peserta->email }}" required>
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor HP:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" value="{{ $peserta->no_hp }}" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat">{{ $peserta->alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="kursus_id">Kursus:</label>
                <select class="form-control" id="kursus_id" name="kursus_id">
                    @foreach($kursus as $kursus)
                        <option value="{{ $kursus->id }}" {{ $kursus->id == $peserta->kursus_id ? 'selected' : '' }}>{{ $kursus->nama_matkul }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
