<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CostumerRequest extends FormRequest
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
			'dni' => 'required|numeric|unique:costumers,dni',
			'name_costumer' => 'required|string|max:50',
			'lastname_costumer' => 'required|string|max:50',
			'birth_date' => 'required',
			'gender' => 'required',
			'phone' => 'required|integer|min:7',
			'address' => 'required|max:50',
			'email' => 'required|email|max:50|unique:costumers,email',
			'id_origin' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'dni.unique' => 'The costumer already exists, please enter a different DNI.',
            'name_costumer.max' => 'The name can not be longer than 50 characters.',
            'lastname_costumer.max' => 'The last name can not be longer than 50 characters.',
            'phone.integer' => 'The phone must be a valid number, without spaces.',
            'phone.min' => 'The phone is too short.',
            'address.max' => 'The address can not be longer than 50 characters.',
            'email.email' => 'Must be a valid email.',
            'email.max' => 'The email can not be longer than 50 characters.',
            'email.unique' => 'The costumer already exists, please enter a different Email or edit the costumer.',
        ];
    }
}
