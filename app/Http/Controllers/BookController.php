<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all()->where('is_active',false);
        return view('books.index', compact('books'));
    }
    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'cover_image' => 'nullable|string',
            'book_title' => 'required|string|max:255',
            'type'       => 'required|string|max:100',
            'description' => 'nullable|string'
        ]);

        Book::create($request->all());
        return redirect()->route('books.index')
                        ->with('success', 'Book created successful.');
    }
    public function edit(Book $book){
        return view('books.edit', compact('book'));
    }
    public function update(Request $request, Book $book)
    {
        $request->validate([
            'cover_image' => 'nullable|string',
            'book_title' => 'required|string|max:255',
            'type'       => 'required|string|max:100',
            'description' => 'nullable|string'
        ]);
        $book->update($request->all());
        return redirect()->route('books.index')
                        ->with('success', 'Book updated successful.');
    }

    public function destroy(Book $book)
    {
        $book->is_active = true;
        $book->save();
        return redirect()->route('books.index')
                        ->with('success','Book deleted successful.');
    }
}
