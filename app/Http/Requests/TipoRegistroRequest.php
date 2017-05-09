<?php

namespace controlepessoal\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TipoRegistroRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'tipo_registro' => 'required|min:3'
        ];
    }
    public function messages()
    {
      return [
        'required' => 'O :attribute é obrigatório!'
      ];
    }
}
