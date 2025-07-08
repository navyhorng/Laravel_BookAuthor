@extends('layouts.app')
@section('content')
    <h2>Edit Author</h2>
    <form class="book-form" action="{{ route('authors.update', $author) }}" method="POST" >
        @csrf
        @method('PUT')
        <label for="author_name">Author Name:</label>
        <input type="text" id="author_name" name="author_name" required class="input_type" value="{{ $author->author_name }}"><br>

        <label for="gender">Gender:</label>
        <select id="gender" name="gender" required class="select_type">
            <option value="">Select Type </option >
            <option value="female">Female</option>
            <option value="male">Male</option>
        </select><br>
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required class="input_type" value="{{ $author->email }}"><br>
        <label for="total_book">Total-Book:</label>
        <input type="number" id="total_book" name="total_book" required class="input_type" value="{{ $author->total_book }}"><br>
    <!-- <button class="submit-btn" type="submit">Submit</button>
     <a href="/navbra.html" class="back-btn">Back To Book Pag</a> -->

        <div class="btn-row">
            <button class="submit-btn btn" type="submit">Update</button>
            <a href="{{ route('authors.index') }}" class="back-btn btn">Back</a>
        </div>

  </form>
@endsection