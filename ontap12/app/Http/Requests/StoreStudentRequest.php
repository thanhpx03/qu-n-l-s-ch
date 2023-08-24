<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Student;

class StoreStudentRequest extends FormRequest
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
        $table=(new Student())->getTable();
        return [
            //
            'name'=>'required|unique:'.$table,
            'gender'=>'required',

            'total'=>'required',

            'email'=>'required',

            'image'=>'required',

            'date'=>'required',

        ];
    }
}
