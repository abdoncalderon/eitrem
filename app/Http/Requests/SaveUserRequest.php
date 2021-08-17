<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveUserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required|string|max:255', 
            'user'=>'required|string|unique:users|max:30', 
            'email'=> 'required|string|email|unique:users|max:255',
            'role'=>'required|string|max:30',
            'password'=>'required|string|confirmed|min:8',
            'status'=>'required',
            
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre Requerido',
            'name.max' => 'Nombre excede tamaño permitido',
            'user.required' => 'Usuario Requerido',
            'user.unique' => 'Usuario ya existe',
            'email.required' => 'Email Requerido',
            'email.unique' => 'Email ya existe',
            'password.required' => 'Password Requerido',
            'password.min' => 'Minimo 8 caracteres',
            'password.confirmed' => 'Claves no coinciden',
            'role.required' => 'Rol Requerido',
        ];
    }
}
