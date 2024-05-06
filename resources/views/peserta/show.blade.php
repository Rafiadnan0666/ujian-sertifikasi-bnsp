@extends('master.dash')

@section('konten')
    <div class="mb-3">
        <label for="nama" class="form-label">{{ __('Nama') }}</label>
        <input type="text" class="form-control" id="nama" value="{{ $peserta->nama }}" readonly>
    </div>
    <div class="mb-3">
        <label for="tgl_lahir" class="form-label">{{ __('Tanggal Lahir') }}</label>
        <input type="text" class="form-control" id="tgl_lahir" value="{{ $peserta->tgl_lahir }}" readonly>
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">{{ __('Email') }}</label>
        <input type="email" class="form-control" id="email" value="{{ $peserta->email }}" readonly>
    </div>
    <div class="mb-3">
        <label for="no_hp" class="form-label">{{ __('Nomor HP') }}</label>
        <input type="text" class="form-control" id="no_hp" value="{{ $peserta->no_hp }}" readonly>
    </div>
    <div class="mb-3">
        <label for="alamat" class="form-label">{{ __('Alamat') }}</label>
        <textarea class="form-control" id="alamat" readonly>{{ $peserta->alamat }}</textarea>
    </div>
    <div class="mb-3">
        <label for="kursus" class="form-label">{{ __('Kursus') }}</label>
        <input type="text" class="form-control" id="kursus" value="{{ $peserta->kursus->nama_matkul }}" readonly>
    </div>
    
@endsection
