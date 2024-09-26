<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaleRequest extends FormRequest
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
			'id_motorcycle' => 'required|unique:sales,id_motorcycle',
			'id_seller' => 'required',
			'id_costumer' => 'required',
			'id_status' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'id_motorcycle.unique' => 'The motorcycle is already at sale, please select a different motorcycle (Vin).',
        ];
    }
}
