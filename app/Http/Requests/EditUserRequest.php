<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'user'=>'required', 
            'role'=>'required', 
        ];
    }

    public function messages()
    {
        return [
            'user.required' => 'Nombre de Usuario Requerido',
            'role.required' => 'Rol Requerido',
        ];
    }
}
