<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SellerRequest extends FormRequest
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
			'dni' => 'required|unique:sellers,dni',
			'name_seller' => 'required|string|max:50',
			'lastname_seller' => 'required|string|max:50',
        ];
    }

    public function messages()
    {
        return [
            'dni.unique' => 'The seller already exists, please enter a different seller DNI',
            'name_seller.max' => 'The name can not be longer than 50 characters.',
            'lastname_seller.max' => 'The last name can not be longer than 50 characters.',
        ];
    }
}
