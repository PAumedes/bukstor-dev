<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Author;

class AuthorsRequest extends FormRequest
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
        $id = Author::where('isbn', $this->isbn)->first();
        return [
            'name' => 'required|string',
            'last_name' => 'required|strings',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'porfavor autor',
            'last_name.required' => 'porfavor autor',
            
        ];
    }
}
