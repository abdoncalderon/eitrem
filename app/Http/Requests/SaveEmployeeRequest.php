<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idcard'=>'required|unique:employees|max:10', 
            'fullname'=>'required', 
            'sector'=> 'required',
            'function'=>'required',
            'office'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'idcard.required' => 'Documento de Identificación Requerido',
            'idcard.unique' => 'Documendo de Identificación ya existe',
            'idcard.max' => 'Documendo de Identificación solo admite 10 caracteres',
            'fullname.required' => 'Nombre Completo Requerido',
            'sector.required' => 'Sector Requerido',
            'function.required' => 'Cargo Requerido',
            'office.required' => 'Oficina Requerida',
        ];
    }
}
