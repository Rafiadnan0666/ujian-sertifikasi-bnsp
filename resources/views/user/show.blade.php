@extends('master.dash')

@section('konten')
    <div class="mb-3">
        <label for="email" class="form-label">Email address</label>
        <input type="email" class="form-control" id="email" value="{{ $user->email }}" readonly>
    </div>
    <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" value="{{ $user->name }}" readonly>
    </div>
    <!-- Add other fields as needed -->
@endsection
