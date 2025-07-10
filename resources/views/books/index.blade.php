@extends('layouts.app')
@section('content')
<div class="container-fluid p-4">
    <table class="w-100 border-1">
        <thead>
            <tr >
                <th class="py-3 px-4 rounded-tl-lg">Cover</th>
                <th class="py-3 px-4">TITLE</th>
                <th class="py-3 px-4">TYPE</th>
                <th class="py-3 px-4">AUTHOR</th>
                <th class="py-3 px-4 rounded-tr-lg text-right">ACTION</th>
                
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr class="data-row"
                    data-book-title="{{ $book->book_title }}">
                    <td class="py-4 px-4">
                        @if($book->cover_image)
                            <img src="{{ asset($book->cover_image) }}" alt="Cover image" width="80">
                    
                        @else
                            <span>No image</span>
                            
                        @endif
                    </td>
                    <td class="py-4 px-4">{{ $book->book_title }}</td>
                    <td class="py-4 px-4">{{ $book->type }}</td>
                    <td class="py-4 px-4 book-author">{{ $book->author->author_name ?? 'Unknown' }}</td>
                    <td class="py-4 px-4 fs-2">
                        <a href="{{ route('books.show', $book->book_id) }}" class="btn btn-sm inline-flex items-center justify-content-center" title="BookDetail">
                                <i class="fa-solid fa-book-open-reader"></i>
                            </a>
                        <a href="{{ route('books.edit', $book->book_id) }}" class="btn btn-sm inline-flex items-center justify-content-center" title="Edit">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                    
                        <form action="{{ route('books.delete', $book) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this book?');">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-sm inline-flex items-center justify-content-center" title="Delete">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
    

    
          