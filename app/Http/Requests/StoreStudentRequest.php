<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentRequest extends FormRequest
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
            'dni_S' => 'required|min:8|max:8',
            'name_S' => 'required|min:3|max:255',
            'last_name_S' => 'required|min:3|max:255',
            'middle_name_S' => 'required|min:3|max:255',
            'slug_name_S' => 'required|min:3|max:255',
            'phone_S' => 'required',
            'address_S' => 'required',
            'school_S' => 'required',
            'guardian_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'dni_S.required' => 'Este campo es obligatorio.',
            'name_S.required' => 'required|min:3|max:255',
            'last_name_S.required' => 'required|min:3|max:255',
            'middle_name_S.required' => 'required|min:3|max:255',
            'slug_name_S.required' => 'required|min:3|max:255',
            'phone_S.required' => 'required',
            'address_S.required' => 'required',
            'school_S.required' => 'required',
            'guardian_id.required' => 'required',
        ];
    }
}
