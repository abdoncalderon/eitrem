<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditBillingRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'number'=>'required|min:15|max:15', 
            'provider'=>'required', 
            'account'=> 'required',
            'date'=>'required|date_format:Y/m/d',
            'value'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'number.required' => 'Numero de factura Requerido',
            'number.min' => 'Numero de factura debe tener 15 digitos',
            'number.max' => 'Numero  de factura debe tener 15 digitos',
            'provider.required' => 'Nombre de proveedor Requerido',
            'account.required' => 'Tipo de cuenta Requerido',
            'date.required' => 'Fecha de factura Requerida',
            'date.date_format' => 'Formato de Fecha Incorrecto',
            'value.required' => 'Valor de la factura Requerido',
        ];
    }
}
