<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveOfficeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|unique:models', 
            'region'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre Requerido',
            'name.unique' => 'Registro ya Existe',
            'region.required' => 'Region Requerida',
        ];
    }
}
