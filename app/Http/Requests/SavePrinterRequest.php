<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SavePrinterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'sn'=>'required|unique:computers',
            'ip'=>'nullable',
            'black'=>'nullable',
            'color'=>'nullable',
            'usb'=>'nullable',
            'ethernet'=>'nullable',
            'wifi'=>'nullable',
        ];
    }

    public function messages()
    {
        return [
            'sn.required' => 'Numero de serie requerido',
            'sn.unique' => 'Número de serie ya existe',
        ];
    }
}
