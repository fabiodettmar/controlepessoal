<?php

namespace controlepessoal\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ResponsavelRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'responsavel' => 'required|min:3',
            'cor' => 'required|min:4'
        ];
    }
    public function messages()
    {
      return [
        'required' => 'O :attribute é obrigatório!'
      ];
    }
}
