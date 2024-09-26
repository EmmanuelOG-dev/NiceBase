<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReferenceRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
			'name' => 'required|string|max:50|unique:references,name',
			'build_year' => 'required|integer|digits:4',
			'id_brand' => 'required',
			'id_category' => 'required',
			'engine_size' => 'required|integer|digits:4',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => 'The reference already exists, please enter a different reference.',
            'name.max' => 'The name can not be longer than 50 characters.',
            'build_year.integer' => 'The build year must be an integer.',
            'build_year.digits' => 'The build year can not have more than 4 digits.',
            'engine_size.integer' => 'The engine size must be an integer.',
            'engine_size.digits' => 'The engine size can not have more than 4 digits.',
        ];
    }
}
