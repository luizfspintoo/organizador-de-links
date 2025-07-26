<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MakeProfileRequest extends FormRequest
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
            "name" => ["required", "string"],
            'email' => ['required', 'email', Rule::unique('users')->ignore(auth()->user()->id)],
            "bio" => ["nullable", "max:255"],
            "image" => ["nullable", "image"],
            "id" => ["required"]
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório.',
            'name.string' => 'O nome deve ser um texto válido.',

            'email.required' => 'O e-mail é obrigatório.',
            'email.email' => 'Informe um e-mail válido.',

            'bio.required' => 'A bio é obrigatório.',
            'bio.max' => 'A bio deve ter no maximo 255 caracteres.',
        ];
    }
}
