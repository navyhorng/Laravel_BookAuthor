@extends('layouts.app')
@section('content')
    <h2>Edit Book</h2>
    <form class="book-form" action="{{ route('books.update', $book) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <label for="cover_image">Cover Image:</label>
        <input type="file" id="cover_image" name="cover_image" accept=".jpg" value="{{ $book->cover_image }}"><br>
        <label for="book_title">Book Title:</label>
        <input type="text" id="book_title" name="book_title" required class="input_type" value="{{ $book->book_title }}"><br>

        <label for="type">Book Type:</label>
        <select id="type" name="type" required class="select_type">
            <option value="">Select Type </option >
            <option value="fiction">Fiction</option>
            <option value="non-fiction">Non-fiction</option>
            <option value="biography">Biography</option>
            <option value="textbook">Textbook</option>
            <option value="other">Other</option>
            {{ $book->type }}
        </select><br>
        <label for="author_id">Author ID:</label>
        <input type="number" id="author_id" name="author_id" required class="input_type" value="{{ $book->author_id}}"><br>

        <label for="description">Description:</label>
        <textarea id="description" name="description" rows="4" placeholder="Write a brief description...">{{ $book->description }}</textarea><br>

        <div class="btn-row">
            <button class="submit-btn btn" type="submit">Update</button>
            <a href="{{ route('books.index') }}" class="back-btn btn">Back</a>
        </div>

  </form>
@endsection