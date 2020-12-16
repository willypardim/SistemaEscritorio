<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateProcessoRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'number' => 'required',
            'name' => 'required|min:3|max:255',
            'client' => 'required|min:3|max:255',
        ];
    }

    public function messages()
    {
        return [
            'number.required' => 'Numero é obrigatório',
            'name.min' => 'Ops! Informe pelo menos 3 caracteres em Título processo',
            'client.min' => 'Ops! Informe pelo menos 3 caracteres em cliente',
        ];
    }
}
