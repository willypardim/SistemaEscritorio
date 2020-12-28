<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUpdateAgendaRequest extends FormRequest
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
            'data' => 'required',
            'hora' => 'required',
            'local' => 'required|min:3|max:255',
            'endereco' => 'required|min:3|max:255',
            'complemento' => 'required|min:3|max:120',
            'numero' => 'required|min:0|max:15',
            'processos_id' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'data.required' => 'Data é obrigatório',
            'hora.required' => 'Ops! Hora é obrigatório!',
            'local.min' => 'Ops! Informe pelo menos 3 caracteres em local',
            'endereco.min' => 'Ops! Informe pelo menos 3 caracteres em endereço',
            'local.max' => 'Ops! Excedeu o número de caracteres em local!',
            'endereco.max' => 'Ops! Excedeu o número de caracteres em endereco!',
            'complemento.min' => 'Ops! Informe pelo menos 3 caracteres em complemento',
            'complemento.max' => 'Ops! Excedeu o número de caracteres em complemento',
            'numero' => 'Número é obrigatório!',
            'processos_id' => 'Numero do processo é obrigatório!'
        ];
    }
}
