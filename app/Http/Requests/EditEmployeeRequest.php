<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idcard'=>'required', 
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
            'fullname.required' => 'Nombre Completo Requerido',
            'sector.required' => 'Sector Requerido',
            'function.required' => 'Cargo Requerido',
            'office.required' => 'Oficina Requerida',
        ];
    }
}
