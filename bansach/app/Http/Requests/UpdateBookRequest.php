<?php

namespace App\Http\Requests;
use  App\Models\Book;

use Illuminate\Foundation\Http\FormRequest;

class UpdateBookRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        $tablename= (new Book())->getTable();
        return [
            'id_category' =>"required|max:11",
            'name_book' =>"required|string|max:50",
            'describe' =>"required|string|max:255",
            'quantity' =>"required|max:11",
            'price' =>"required|max:11",
            'img' =>"required|string|max:255",
         
            
        ];
    }
}
