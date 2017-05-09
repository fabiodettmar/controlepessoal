<?php

namespace controlepessoal\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegistroRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'valor' => 'required',
            'id_tipo_registro' => 'required',
            'data_entrada' => 'required'
        ];
    }
    public function messages()
    {
      return [
        'required' => 'O :attribute é obrigatório!'
      ];
    }
}
