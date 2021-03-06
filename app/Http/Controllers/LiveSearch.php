<?php

namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use DB;
 
class LiveSearch extends Controller { 
   
    public function index()
    {
        return view('books.livesearch');
    }
 
 
    public function search(Request $request)
    {
        if($request->ajax())
        {
            $output="";
            $products=DB::table('books')->where('name','LIKE','%'.$request->search."%")->get();
            if($products)
            {
                foreach ($products as $key => $product) 
                {
                    $output.='<tr>'.
                    '<td>'.$product->id.'</td>'.
                    '<td>'.$product->title.'</td>'.
                    '<td>'.$product->description.'</td>'.
                    '<td>'.$product->price.'</td>'.
                    '</tr>'; 
                }
                return Response($output);
            }
        }
    }
}