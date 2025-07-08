<?php

namespace App\Http\Controllers;

use App\Models\Book;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with('author')->where('is_active', true)->get();
        $pageType = 'books';
        return view('books.index', compact('books', 'pageType'));
    }

    public function create()
    {
        return view('books.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cover_image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'book_title' => 'required|string|max:255',
            'type'       => 'required|string|max:100',
            'author_id' => 'required|exists:tb_authors,author_id',
            'description' => 'nullable|string'
        ]);

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/book', $filename);
            $validated['cover_image'] = 'book/' . $filename;
        }
        $book = Book::create($validated);

        $book->author()->increment('total_book');

        return redirect()->route('books.index')
            ->with('success', 'Book created successfully.');
    }
    public function edit(Book $book)
    {
        return view('books.edit', compact('book'));
    }
    public function update(Request $request, Book $book)
    {
        $validated = $request->validate([
            'cover_image' => 'nullable|image|mimes:jpg|max:2048',
            'book_title' => 'required|string|max:255',
            'type'       => 'required|string|max:100',
            'author_id' => 'required|exists:tb_authors,author_id',
            'description' => 'nullable|string'
        ]);

        if ($request->hasFile('cover_image')) {
            $file = $request->file('cover_image');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->storeAs('public/book', $filename);
            $validated['cover_image'] = 'book/' . $filename;
        }

        $book->update($validated);

        return redirect()->route('books.index')->with('success', 'Book updated successfully.');
    }


    public function destroy(Book $book)
    {
        $author = $book->author;

        $book->is_active = false;

        $author->decrement('total_book');
        $book->save();
        return redirect()->route('books.index')
            ->with('success', 'Book deleted successful.');
    }
}
