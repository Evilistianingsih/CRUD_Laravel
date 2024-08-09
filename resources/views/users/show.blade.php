@extends('layouts.app')

@section('content')
    <h1>Detail Akun Pengguna</h1>
    <p><strong>Nama:</strong> {{ $user->name }}</p>
    <p><strong>Email:</strong> {{ $user->email }}</p>
    <a href="{{ route('users.index') }}" class="btn btn-primary">Kembali</a>
@endsection
