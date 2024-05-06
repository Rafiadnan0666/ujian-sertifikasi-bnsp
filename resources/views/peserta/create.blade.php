<!-- resources/views/pesertas/create.blade.php -->

@extends('master.dash')

@section('konten')
    <div class="container">
        <h2>Create Peserta</h2>
   <form method="POST" action="{{ route('peserta.store') }}" enctype="multipart/form-data">

            @csrf
            <div class="form-group">
                <label for="nama">Nama:</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir:</label>
                <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="no_hp">Nomor HP:</label>
                <input type="text" class="form-control" id="no_hp" name="no_hp" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat:</label>
                <textarea class="form-control" id="alamat" name="alamat"></textarea>
            </div>
            <div class="form-group">
                <label for="kursus_id">Kursus:</label>
                <select class="form-control" id="kursus_id" name="kursus_id">
                    @foreach ($kursus as $kursus)
                        <option value="{{ $kursus->id }}">{{ $kursus->nama_matkul }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-4">
                <x-input-label for="profile_picture" :value="__('Profile Picture')" />
              <input id="profile_picture" type="file" class="block mt-1 w-full" name="profile_pictures" accept="image/*">
                <x-input-error :messages="$errors->get('profile_picture')" class="mt-2" />
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection
