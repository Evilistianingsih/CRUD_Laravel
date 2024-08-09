@extends('layouts.app')

@section('content')
    <h1>Post</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary">Tambah Post</a>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>ID</th>
                <th>Kategori</th>
                <th>Penulis</th>
                <th>Judul</th>
                <th>Slug</th>
                <th>Tanggal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{ $post->id }}</td>
                    <td>{{ $post->category->name }}</td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->slug }}</td>
                    <td>{{ $post->date }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
