<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveModelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|unique:models', 
            'brand'=> 'required',
            'type'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre Requerido',
            'name.unique' => 'Registro ya Existe',
            'brand.required' => 'Marca Requerida',
            'type.required' => 'Tipo Requerido',
        ];
    }
}
