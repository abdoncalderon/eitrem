<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditMonitorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'size'=>'required',
            'hdmi'=>'nullable',
            'vga'=>'nullable',
            'dp'=>'nullable',
        ];
    }

    public function messages()
    {
        return [
            'size.required' => 'Tamaño de pantalla requerido',
        ];
    }
}
