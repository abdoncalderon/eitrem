<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditModelRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required', 
            'brand'=> 'required',
            'type'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre Requerido',
            'brand.required' => 'Marca Requerida',
            'type.required' => 'Tipo Requerido',
        ];
    }
}
