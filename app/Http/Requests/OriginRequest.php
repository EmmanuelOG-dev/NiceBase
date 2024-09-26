<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OriginRequest extends FormRequest
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
			'origin' => 'required|string|max:50|unique:origins,origin',
        ];
    }

    public function messages()
    {
        return [
            'origin.unique' => 'The origin already exists, please enter a different origin.',
            'origin.max' => 'The origin can not be longer than 50 characters.',
        ];
    }
}
