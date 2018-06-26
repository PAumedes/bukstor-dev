<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Book;
use App\Category;
use App\Author;
use App\Http\Requests\BooksRequest;

class BookController extends Controller
{

    public function __construct()
    {

        $this->middleware('admin')->only('create', 'edit');
    }

    public function index()
    {
        $books = Book::all();
        return view('books.index', compact('books'));
    }
    
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('books.create', compact('authors', 'categories'));
    }
    
    public function store(BooksRequest $request)
    {   
        
        Book::create($request->all());
        return redirect('/books');
    }

    public function edit(Book $book)
    {
        // $book = Book::find($id);
        $authors = Author::all();
        $categories = Category::all();
        return view('books.edit', compact('book', 'authors', 'categories'));
    }

    public function update(BooksRequest $request, $id)
    {
        $book = Book::findOrFail($id);
        $book->fill($request->all());
        $book->save();
        return redirect('/books');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function destroy($id)
    {
        $book = Book::findOrFail($id);
        $book->delete();
        return redirect('/books'); 
    }
}
