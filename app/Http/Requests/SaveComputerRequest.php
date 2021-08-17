<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveComputerRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sn'=>'required|unique:computers',
            'os'=>'required',
            'hostname'=>'required|max:20',
            'hd'=>'required|numeric',
            'ram'=>'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'sn.required' => 'Numero de serie requerido',
            'sn.unique' => 'Número de serie ya existe',
            'hostname.required' => 'Hostname requerido',
            'os.required' => 'Sistema Operativo requerido',
            'hd.required' => 'Capacidad de disco duro requerida',
            'hd.numeric' => 'Cantidad de HD en numeros enteros',
            'ram.required' => 'Tamaño de memoria RAM  requerido',
            'ram.numeric' => 'Cantidad de RAM en numeros enteros',
        ];
    }
}
