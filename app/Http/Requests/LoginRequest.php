<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            "email" => ["required", "email", "max:255"],
            "password" => ["required", "max:255"],
        ];
    }


    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            "email.required" => "O campo email é obrigatório",
            "email.email" => "O campo email deve ser um email válido",
            "email.max" => "O campo email deve ter no máximo 255 caracteres",
            "password.required" => "O campo senha é obrigatório",
            "password.max" => "O campo senha deve ter no máximo 255 caracteres",
        ];
    }
}
