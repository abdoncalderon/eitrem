<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveEquipmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sn'=>'required|unique:equipments|max:30',
            'model'=>'required',
            'provider'=>'required',
            'inventory'=>'nullable|max:30',
            'storedin'=>'required',
            'status'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'sn.required' => 'Numero de Serie Requerido',
            'sn.unique' => 'Número de Serie ya Existe',
            'sn.max' => 'Número de Serie no puede tener mas de 30 caracteres',
            'model.required' => 'Modelo de equipo Requerido',
            'provider.required' => 'Proveedor Requerido',
            'storedin.required' => 'Ubicación Inicial Requerida',
            'status.required' => 'Estado Inicial Requerido',
        ];
    }
}
