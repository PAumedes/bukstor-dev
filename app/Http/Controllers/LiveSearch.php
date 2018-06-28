<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class LiveSearch extends Controller
{
    public function index()
    {
        return view('books.index');
    }

    public function search(Request $request)
    {
        if($request->ajax())
        {
            $books=DB::table('books')->where('title', 'LIKE','%'.$request->search.'%')->get();
            return Response($books);
        }
    }
}
