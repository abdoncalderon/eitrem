<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveRegionRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    
    public function rules()
    {
        return [
            'name'=>'required|unique:regions',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre Requerido',
            'name.unique' => 'Registro ya Existe',
        ];
    }
}
