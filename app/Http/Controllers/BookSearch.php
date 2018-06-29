<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{

    public function index(Request $request)
    {
        $s = $request->input('s');
        dd($s);

        $books = Book::latest()
            ->search($s)
            ->paginate(6);

        return view('books.search', compact('books', 's'));
    }
}