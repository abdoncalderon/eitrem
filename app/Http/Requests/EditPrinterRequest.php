<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditPrinterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'ip'=>'nullable',
            'office'=>'required',
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
            'office.required' => 'Unicación fisica requerida',
        ];
    }
}
