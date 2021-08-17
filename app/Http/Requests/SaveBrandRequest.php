<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveBrandRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'name'=>'required|unique:brands',
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
