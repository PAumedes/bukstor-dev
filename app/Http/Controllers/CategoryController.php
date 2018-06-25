<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Validator;
use App\Http\Requests\CategoriesRequest;

class CategoryController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(CategoriesRequest $request)
    {   
        
        Categorie::create($request->all());
        return redirect('/categories');
    }

    public function edit(Category $category)
    {
        // $book = Book::find($id);
        return view('categories.edit', compact('category'));
    }

    public function update(CategoriesRequest $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->fill($request->all());
        $category->save();
        return redirect('/categories');
    }

    public function show(Category $category)
    {
        return view('categories.show', compact('category'));
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();
        return redirect('/categories'); 
    }    
}
