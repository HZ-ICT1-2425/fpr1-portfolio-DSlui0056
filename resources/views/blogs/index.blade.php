@extends('components.layout.main')

@section('content')
<link href="{{ URL::asset('css/blog.css') }}" rel="stylesheet">

<div class="container-blog">
    <section id="blog-posts">
        <h2>Blog Posts</h2>
        <a href="{{ route('blogs.create') }}" class="btn">Add Blog Post</a>
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        @if ($blogs->isEmpty())
            <p>No blog posts found. <a href="{{ route('blogs.create') }}">Create a new post.</a></p>
        @else
            @foreach ($blogs as $blog)
                <article class="blog-item">
                    <img src="../images/datascience.jpg" alt="Blog Image">
                    <div class="blog-content">
                        <h3>{{ $blog->title }}</h3>
                        <p>{{ Str::limit(strip_tags($blog->body), 150, '...') }}</p>
                        <a href="{{ route('blogs.show', $blog) }}" class="btn">View</a>
                        <a href="{{ route('blogs.edit', $blog) }}" class="btn btn-edit">Edit</a>
                        <form action="{{ route('blogs.destroy', $blog) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-delete" onclick="return confirm('Are you sure you want to delete this blog?')">Delete</button>
                        </form>
                    </div>
                </article>
            @endforeach
        @endif
    </section>
</div>
@endsection
