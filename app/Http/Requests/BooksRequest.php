<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string',
            'cost' => 'required|numeric',
            'price' => 'required|numeric',
            'description' => 'required',
            'isbn' => 'required|unique:books',
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'porfavor libro',
            'cost.required' => 'porfavor libro',
            
        ];
    }
}
