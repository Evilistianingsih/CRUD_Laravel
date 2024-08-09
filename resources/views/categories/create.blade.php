@extends('layouts.app')

@section('content')
    <h1>Tambah Kategori</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" required>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
