<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index(){
        $authors = Author::all()->where('is_active', true);
        $pageType = 'authors';
        return view('authors.index', compact('authors', 'pageType'));
    }
    
    public function create()
    {
        // $authors = Author::all()->where('is_active',true);
        return view('authors.create');
    }
    public function store(Request $request)
    {
        $validated = $request->validate([
            'author_name' => 'required|string|max:255',
            'gender' => 'required|string|max:10',
            'email' => 'required|email|max:150|unique:tb_authors,email',
            'total_book' => 'nullable|integer|min:0',
            'is_active' => 'boolean'
        ]);

        Author::create($validated);
        return redirect()->route('authors.index')
                        ->with('success','Author created successfully.');
    }
    public function edit(Author $author)
    {
        return view('authors.edit', compact('author'));
    }
    public function update(Request $request, Author $author)
    {
        $validated = $request->validate([
            'author_name' => 'required|string|max:100',
            'gender' => 'required|string|max:10',
            'email' => 'required|email|max:150|unique:tb_authors,email,' . $author->author_id . ',author_id',
            'total_book' => 'nullable|integer|min:0',
            'is_active' => 'boolean'
        ]);
        
        $author->update($validated);
        return redirect()->route('authors.index')
                        ->with('success', 'Author update successfully.');
    }
    public function destroy(Author $author)
    {
        $author->is_active = false;
        $author->save();

        return redirect()->route('authors.index')
                        ->with('success', 'Author deleted successfully.');
    }


}
