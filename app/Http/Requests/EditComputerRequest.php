<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditComputerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'os'=>'required',
            'hostname'=>'nullable',
            'hd'=>'required',
            'ram'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'os.required' => 'Sistema Operativo requerido',
            'hd.required' => 'Capacidad de disco duro requerida',
            'ram.required' => 'Tamaño de memoria RAM  requerido',
        ];
    }
}
