@extends('components.layout.main')

@section('content')
<link href="{{ URL::asset('css/blog.css') }}" rel="stylesheet">

<div class="container">
        <h1>{{ $blog->title }}</h1>
        <p>{!! nl2br(e($blog->body)) !!}</p>
        <a href="{{ route('blogs.index') }}" class="btn btn-primary">Back to All Blogs</a>
    </div>
@endsection
