<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MotorcycleRequest extends FormRequest
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
			'vin' => 'required|max:25|regex:/^[a-zA-Z0-9]+$/|unique:motorcycles,vin',
			'id_reference' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'vin.unique' => 'The motorcycle already exists, please enter a different vin.',
            'vin.max' => 'The vin is too long.',
            'vin.regex' => 'The vin can only contain letters and numbers, no special characters.',
        ];
    }
}
