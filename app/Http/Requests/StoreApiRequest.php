<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreApiRequest extends FormRequest
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
            'dni_S' => ['required', 'digits:8'],
        ];
    }

    public function messages(): array
    {
        return [
            'dni_S.required' => 'El campo DNI es obligatorio.',
            'dni_S.digits' => 'El DNI debe tener exactamente 8 dígitos.',
        ];
    }
}
