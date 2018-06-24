<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Book;
use App\Http\Requests\BooksRequest;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(BooksRequest $request)
    {   
        
        Book::create($request->all());
        return redirect('/books');
    }

    public function edit(Book $book)
    {
        // $book = Book::find($id);
        return view('books.edit', compact('book'));
    }

    public function update(BooksRequest $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->fill($request->all());
        $book->save();
        return redirect('/books');
    }
}
