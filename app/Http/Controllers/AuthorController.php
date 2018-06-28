<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;
use App\Book;
use App\Http\Requests\AuthorsRequest;
use Validator;

class AuthorController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors.index', compact('authors'));
    }

    public function create()
    {
        return view('authors.create');
    }

    public function store(AuthorsRequest $request)
    {   
        
        Author::create($request->all());
        return redirect('/authors');
    }

    public function edit(Author $author)
    {
        // $book = Book::find($id);
        return view('authors.edit', compact('author'));
    }

    public function update(AuthorsRequest $request, $id)
    {
        $author = Author::findOrFail($id);
        $author->fill($request->all());
        $author->save();
        return redirect('/authors');
    }

    public function show(Author $author)
    {
        $books = Book::with('author')->get();
        return view('authors.show', compact('books', $books));
    }

    public function destroy($id)
    {
        $author = Author::findOrFail($id);
        $author->delete();
        return redirect('/authors'); 
    }
}
