@extends('layouts.app')

@section('content')
    <h1>Edit Akun Pengguna</h1>
    <form action="{{ route('users.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="password" name="password">
            <small class="form-text text-muted">Kosongkan jika tidak ingin mengubah password.</small>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
