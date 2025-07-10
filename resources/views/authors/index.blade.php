@extends('layouts.app')
@section('content')
    <div class="container-fluid p-4">
        <table class="w-100 border-1">
            <thead>
                <tr >
                    <th class="py-3 px-4 rounded-tl-lg">NAME</th>
                    <th class="py-3 px-4">GENDER</th>
                    <th class="py-3 px-4">EMAIL</th>
                    <th class="py-3 px-4">TOTAL-BOOK</th>
                    <th class="py-3 px-4 rounded-tr-lg text-right">ACTION</th>
                
                </tr>
            </thead>
            <tbody>
                @foreach ($authors as $author)
                    <tr class="data-row"
                        data-author-name="{{ $author->author_name }}">
                        <td class="py-4 px-4">{{ $author->author_name }}</td>
                        <td class="py-4 px-4">{{ $author->gender }}</td>
                        <td class="py-4 px-4">{{ $author->email }}</td>
                        <td class="py-4 px-4">{{ $author->total_book }}</td>
                        <td class="py-4 px-4">
                            
                            <a href="{{ route('authors.edit', $author->author_id) }}" class="btn btn-sm inline-flex items-center justify-content-center" title="Edit">
                                <i class="fas fa-pencil-alt"></i>
                            </a>
                    
                            <form action="{{ route('authors.delete', $author) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Are you sure you want to delete this book?');">
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
    