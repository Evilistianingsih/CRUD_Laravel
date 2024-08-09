@extends('layouts.app')

@section('content')
    <h1>Detail Post</h1>
    <p><strong>Kategori:</strong> {{ $post->category->name }}</p>
    <p><strong>Penulis:</strong> {{ $post->user->name }}</p>
    <p><strong>Judul:</strong> {{ $post->title }}</p>
    <p><strong>Slug:</strong> {{ $post->slug }}</p>
    <p><strong>Konten:</strong> {{ $post->content }}</p>
    <p><strong>Tanggal:</strong> {{ $post->date }}</p>
    <a href="{{ route('posts.index') }}" class="btn btn-primary">Kembali</a>
@endsection
