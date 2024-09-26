<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StatusRequest extends FormRequest
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
			'status' => 'required|string|max:50|unique:statuses,status',
        ];
    }

    public function messages()
    {
        return [
            'status.unique' => 'The status already exists, please enter a different status.',
            'status.max' => 'The status can not be longer than 50 characters.',
        ];
    }
}
