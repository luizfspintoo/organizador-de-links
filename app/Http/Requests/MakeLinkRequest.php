<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MakeLinkRequest extends FormRequest
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
            "title" => ["required", "string", "min:5"],
            "platform" => ["required", "string", "min:5"],
            "link" => ["required", "url"],
            "image" => ["nullable", "image"],
            "user_id" => ["required"]
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'O titulo é obrigatório.',
            'title.string' => 'O titulo deve ser um texto válido.',
            'title.min' => 'O titulo ter no minimo 5 caracteres.',

            'platform.required' => 'A plataforma é obrigatório.',
            'platform.string' => 'A plataforma deve ser um texto válido.',
            'platform.min' => 'A plataforma ter no minimo 5 caracteres.',

            'link.required' => 'O link é obrigatório.',
            'link.url' => 'O link deve ter uma URL válido.'
        ];
    }
}
