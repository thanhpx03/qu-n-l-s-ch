<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Teacher;

class StoreTeacherRequest extends FormRequest
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
        $table=(new Teacher())->getTable();
        return [
            //
            'name'=>'required|unique:'.$table,
            'gender'=>'required',
            'total'=>'required',
            'email'=>'required|email',
            'image'=>'required',
            'date'=>'required',
        ];
    }
}
