@extends('components.layout.main')

@section('content')
    <div class="container">
        <h1>Create New FAQ</h1>

        <form action="{{ route('faq.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="question">Question</label>
                <input type="text" name="question" id="question" class="form-control @error('question') is-invalid @enderror" value="{{ old('question') }}">
                @error('question')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="form-group">
                <label for="answer">Answer</label>
                <textarea name="answer" id="answer" rows="5" class="form-control @error('answer') is-invalid @enderror">{{ old('answer') }}</textarea>
                @error('answer')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            @if (session('success'))
                <div class="alert alert-success mt-3">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Position the button below -->
            <button type="submit" class="btn btn-success">Submit</button>
            <a href="{{ route('faq.index') }}" class="btn btn-secondary">Cancel</a>
        </form>
    </div>
@endsection
