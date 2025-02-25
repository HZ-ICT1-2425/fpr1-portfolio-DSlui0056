@extends('components.layout.main')

@section('content')
    <link href="{{ URL::asset('css/blog.css') }}" rel="stylesheet">
    <div class="container">
        <h1>Edit Blog Post</h1>
        <form action="{{ route('blogs.update', $blog) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ old('title', $blog->title) }}">
                @error('title')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label">Body:</label>
                <textarea name="body" id="body" class="form-control" rows="5">{{ old('body', $blog->body) }}</textarea>
                @error('body')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
