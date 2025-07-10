@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2 class="mb-4 text-center">Book Details</h2>

    <div class="d-flex justify-content-center mb-5">
        <img src="{{ asset($book->cover_image) }}" alt="Book Cover" class="img-fluid shadow" style="max-height: 500px;">
    </div>

    <div class="table-responsive mb-4">
        <table class="table table-bordered text-center align-middle">
            <thead class="table-light">
                <tr>
                    <th>BOOK ID</th>
                    <th>BOOK TITLE</th>
                    <th>BOOK TYPE</th>
                    <th>Description</th>
                    <th>Author Name</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $book->book_id }}</td>
                    <td>{{ $book->book_title }}</td>
                    <td>{{ $book->type }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->author->author_name ?? 'Unknown' }}</td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="text-center">
        <a href="{{ route('books.index') }}" class="btn btn-pink px-5 py-2 rounded-pill" style="background-color: #de8ca4; color: white;">Back</a>
    </div>
</div>
@endsection
