<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveProviderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|unique:providers', 
            'contact'=>'required', 
            'phone1'=> 'required',
            'email'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre de Proveedor Requerido',
            'name.unique' => 'Nombre de Proveedor Ya Existe',
            'contact.required' => 'Nombre de Persona de contacto Requerido',
            'phone1.required' => 'Telefono de contacto Requerido',
            'email.required' => 'Email de contacto Requerido',
        ];
    }
}
