<?php

namespace controlepessoal\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContaRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'conta' => 'required|min:3'
        ];
    }
    public function messages()
    {
      return [
        'required' => 'O :attribute é obrigatório!'
      ];
    }
}
