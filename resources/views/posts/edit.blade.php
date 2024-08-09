@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="category_id">Kategori</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $post->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="user_id">Penulis</label>
            <select class="form-control" id="user_id" name="user_id" required>
                @foreach ($users as $user)
                    <option value="{{ $user->id }}" {{ $post->user_id == $user->id ? 'selected' : '' }}>
                        {{ $user->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="title">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="slug">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" value="{{ $post->slug }}" required>
        </div>
        <div class="form-group">
            <label for="content">Konten</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="date">Tanggal</label>
            <input type="date" class="form-control" id="date" name="date" value="{{ $post->date }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
