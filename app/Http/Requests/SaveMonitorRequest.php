<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveMonitorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sn'=>'required|unique:computers',
            'size'=>'required',
            'hdmi'=>'nullable',
            'vga'=>'nullable',
            'dp'=>'nullable',
        ];
    }

    public function messages()
    {
        return [
            'sn.required' => 'Numero de serie requerido',
            'sn.unique' => 'Número de serie ya existe',
            'size.required' => 'Tamaño de pantalla requerido',
        ];
    }
}
