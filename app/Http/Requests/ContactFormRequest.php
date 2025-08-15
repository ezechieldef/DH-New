<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true; // Ajuster si auth spécifique
    }

    public function rules(): array
    {
        return [
            'nom'     => ['required','string','max:120'],
            'email'   => ['required','email','max:190'],
            'sujet'   => ['nullable','string','max:150'],
            'message' => ['required','string','min:10'],
        ];
    }

    public function messages(): array
    {
        return [
            'nom.required'     => 'Le nom est obligatoire.',
            'message.min'      => 'Le message doit contenir au moins :min caractères.',
        ];
    }
}