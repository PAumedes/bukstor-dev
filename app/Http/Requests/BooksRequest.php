<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Book;

class BooksRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        $book = Book::where('isbn', $this->isbn)->first();

        switch($this->method())
        {
            case 'GET':
            case 'DELETE':
            {
                return [];
            }
            case 'POST':
            {
                return [
                    'name' => 'required|string',
                    'cost' => 'required|numeric',
                    'price' => 'required|numeric',
                    'description' => 'required',
                    'isbn' => 'required|unique:books,isbn',
                    'author_id' => 'required|numeric',
                    'category_id' => 'required|numeric',
                ];
            }
            case 'PUT':
            case 'PATCH':
            {
                return [
                    'name' => 'required|string',
                    'cost' => 'required|numeric',
                    'price' => 'required|numeric',
                    'description' => 'required',
                    'isbn' => 'required|unique:books,isbn,' . $book->id,
                    'author_id' => 'required|numeric',
                    'category_id' => 'required|numeric',
                ];
            }
            default:break;
        }
    }
    public function messages()
    {
        return [
            'name.required' => 'porfavor libro',
            'cost.required' => 'porfavor libro',
            
        ];
    }
}
