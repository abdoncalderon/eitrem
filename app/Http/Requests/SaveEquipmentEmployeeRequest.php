<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveEquipmentEmployeeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'idcard'=>'required',
            'sn'=> 'required',
            'delivery_date'=>'required|date_format:Y/m/d',
            'delivery_user'=>'required',
            'observation'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'sn.required' => 'Numero de Serie Requerido',
            'delivery_date.required' => 'Fecha de Entrega requerida',
            'delivery_date.date_format' => 'Formato equivocado. Use AAAA-MM-DD',
        ];
    }
}
