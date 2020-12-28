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
            'tituloprocesso' => 'required|min:3|max:255',
            'parteinteressada' => 'required|min:3|max:255',
            'parteprocessada' => 'required|min:3|max:255',
            'descricao' => 'required|min:0|max:2498',
            'relatorio' => 'required|min:0|max:2498',
            'comentario' => 'required|min:0|max:2498',
        ];
    }

    public function messages()
    {
        return [
            'number.required' => 'Numero é obrigatório',
            'tituloprocesso.min' => 'Ops! Informe pelo menos 3 caracteres em Título processo',
            'parteinteressada.min' => 'Ops! Informe pelo menos 3 caracteres em cliente',
            'parteprocessada.min' => 'Ops! Informe pelo menos 3 caracteres em parte processada',
            'descricao.min' => 'Ops! Informe pelo menos 1 caracteres em descricao',
            'relatorio.min' => 'Ops! Informe pelo menos 1 caracteres em relatorio',
            'comentario.min' => 'Ops! Informe pelo menos 1 caracteres em comentario',
            'descricao.max' => 'Ops! Não pode exceder 2498 caracteres em descricao',
            'relatorio.max' => 'Ops! Não pode exceder 2498 caracteres em relatorio',
            'comentario.max' => 'Ops! Não pode exceder 2498 caracteres em comentario'
        ];
    }
}
