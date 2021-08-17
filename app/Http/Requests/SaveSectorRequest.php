<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveSectorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'name'=>'required|unique:sectors',
            'control_unity'=>'required|unique:sectors',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre Requerido',
            'control_unity.required' => 'Unidad de Control Requerida',
            'name.unique' => 'Registro ya Existe',
        ];
    }
}
