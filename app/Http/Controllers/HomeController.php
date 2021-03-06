<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Book;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $book = Book::first();
        $user = Auth::user();
        return view('index', compact('user', $user, 'book', $book));
    }

    public function home()
    {
        $user = Auth::user();
        return view('home', compact('user', $user));
    }
}
