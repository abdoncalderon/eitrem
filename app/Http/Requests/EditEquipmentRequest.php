<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditEquipmentRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'model'=>'required',
            'provider'=>'required',
            'inventory'=>'nullable',
        ];
    }

    public function messages()
    {
        return [
            'model.required' => 'Modelo de equipo requerido',
            'provider.required' => 'Proveedor requerido',
        ];
    }
}
