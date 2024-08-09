@extends('layouts.app')

@section('content')
    <h1>Detail Kategori</h1>
    <p><strong>Nama:</strong> {{ $category->name }}</p>
    <p><strong>Slug:</strong> {{ $category->slug }}</p>
    <a href="{{ route('categories.index') }}" class="btn btn-primary">Kembali</a>
@endsection
