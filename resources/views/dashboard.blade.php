@extends('master.dash')

@section('konten')
    <div class="container">
        <h1>{{ __('Pesertas') }}</h1>
        <div class="row">
            <div class="col-md-12 mb-3">
            </div>
        </div>
        <div class="row">
            <table class="table table-striped table-hover">
                <thead class="thead">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">{{ __('Name') }}</th>
                        <th scope="col">{{ __('Email') }}</th>
                        <th scope="col">{{ __('Tanggal Lahir') }}</th>
                        <th scope="col">{{ __('no_hp') }}</th>
                        <th scope="col">{{ __('Alamat') }}</th>
                        <th scope="col">{{ __('Kursus') }}</th>
                        <th scope="col">{{ __('Actions') }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($peserta as $peserta)
                        <tr>
                            <th>{{ $loop->iteration }}</th>
                            <td>{{ $peserta->nama }}</td>
                            <td>{{ $peserta->email }}</td>
                            <td>{{ $peserta->tgl_lahir }}</td>
                            <td>{{ $peserta->no_hp }}</td>
                            <td>{{ $peserta->alamat }}</td>
                            <td>{{ $peserta->kursus->nama_matkul }}</td>
                            <td>
                                <a href="{{ route('peserta.show', $peserta->id) }}" class="btn btn-primary"><i
                                        class="fa fa-eye"></i></a>
                                @if (Auth::user()->role != 'u')
                                    <a href="{{ route('peserta.edit', $peserta->id) }}" class="btn btn-warning"><i
                                            class="fa fa-pen"></i></a>
                                    <form action="{{ route('peserta.destroy', $peserta->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                                    </form>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    {{-- <div class="container">
        <h1>{{ __('User') }}</h1>
        <table class="table table-striped table-hover">
            <thead class="thead">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">{{ __('Name') }}</th>
                    <th scope="col">{{ __('Email') }}</th>
                    <th scope="col">{{ __('Actions') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $user)
                    <tr>
                        <th>{{ $loop->iteration }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>
                            <a href="{{ route('user.show', $user->id) }}" class="btn btn-primary"><i class="fa fa-eye"></i></a>
                            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning"><i
                                    class="fa fa-pen"></i></a>
                            <form action="{{ route('user.destroy', $user->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div> --}}

    <div class="container">
        <h1>{{ __('Kursus') }}</h1>
        <div class="row">
            <div class="col-md-12 mb-3">
                @if (Auth::user()->role != 'u')
                    <a href="{{ route('kursus.create') }}" class="btn btn-warning">{{ __('Create Kursus') }}</a>
                @endif
            </div>
        </div>
        <div class="row">
            @foreach ($kursus as $course)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">{{ $course->nama_matkul }}</h5>
                            <p class="card-text">{{ $course->deskripsi }}</p>
                            <div class="btn-group" role="group" aria-label="Kursus Actions">
                                <a href="{{ route('kursus.show', $course->id) }}" class="btn me-3 btn-primary"><i
                                        class="fa fa-eye"></i></a>
                                @if (Auth::user()->role != 'u')
                                    <a href="{{ route('kursus.edit', $course->id) }}" class="btn me-3 btn-warning"><i
                                            class="fa fa-pen"></i></a>
                                    <form action="{{ route('kursus.destroy', $course->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn me-3 btn-danger"><i
                                                class="fa fa-trash"></i></button>
                                    </form>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
