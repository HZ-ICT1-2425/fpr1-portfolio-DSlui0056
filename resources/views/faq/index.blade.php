@extends('components.layout.main')

@section('content')
<div class="container">
        <h1>FAQs</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if($faqs->count())
            <ul class="list-group">
                @foreach($faqs as $faq)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $faq->question }}</strong>
                            <p>{{ $faq->answer }}</p>
                        </div>

                        <div>
                            <a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-primary btn-sm">Edit</a>
                            <form action="{{ route('faq.destroy', $faq->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this FAQ?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
            <div class="mt-3">
                {{ $faqs->links() }} <!-- Pagination links -->
            </div>
        @else
            <p>No FAQs available.</p>
        @endif

        <a href="{{ route('faq.create') }}" class="btn btn-success mt-3">Create New FAQ</a>
    </div>
@endsection
