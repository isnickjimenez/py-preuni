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
            'dni_S' => 'required',
            'slug_name_S' => 'required',
            'phone_S' =>  'required',
            // 'address_S' => 'required',
            // 'school_S' => 'required',
            // 'dni_G' => 'required',
            // 'name_G' => 'required',
            // 'last_name_G' => 'required',
            // 'middle_name_G' => 'required',
            // 'slug_name_G' => 'required',
            // 'phone_G' => 'required',
            // 'address_G' => 'required',
            // 'group_G' => 'required',
            // 'carrer_G' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'dni_S.required' => 'Este campo debe tener un dni',
            'slug_name_S.required' => 'Este campo debe tener un nombre',
            'phone_S.required' => 'Este campo es obligatorio.',
            // 'address_S.required' => 'Este campo es obligatorio.',
            // 'school_S.required' => 'Este campo es obligatorio.',
            // 'dni_G.required' => 'Este campo es obligatorio.',
            // 'slug_name_G.required' => 'Este campo es obligatorio.',
            // 'phone_G.required' => 'Este campo es obligatorio.',
            // 'address_G.required' => 'Este campo es obligatorio.',
            // 'group_G.required' => 'Este campo es obligatorio.',
            // 'carrer_G.required' => 'Este campo es obligatorio.',
        ];
    }
}
