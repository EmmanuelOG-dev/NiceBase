<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BrandRequest extends FormRequest
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
			'brand' => 'required|string|max:50|unique:brands,brand',
        ];
    }

    public function messages()
    {
        return [
            'brand.unique' => 'The brand already exists, please enter a different brand.',
            'brand.max' => 'The brand can not be longer than 50 characters.',
        ];
    }

}
