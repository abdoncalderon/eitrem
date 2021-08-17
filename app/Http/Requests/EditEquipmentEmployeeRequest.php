<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditEquipmentEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idcard'=>'required',
            'sn'=>'required',
            'delivery_date'=>'required',
            'return_date'=>'required|date|date_format:Y/m/d|after_or_equal:delivery_date',
            'return_user'=>'required',
            'observation'=>'required',

        ];
    }

    public function messages()
    {
        return [
            'return_date.required' => 'Fecha de Entrega requerida',
            'return_date.date_format' => 'Formato equivocado. Use AAAA-MM-DD',
            'return_date.after_or_equal' => 'Fecha de devolución no puede ser menor a fecha de entrega',
            'return_date.date' => 'No es una valor correcto para fecha'
        ];
    }
}
