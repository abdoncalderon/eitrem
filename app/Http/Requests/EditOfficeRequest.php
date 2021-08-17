<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditOfficeRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name'=>'required', 
            'region'=> 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre Requerido',
            'region.required' => 'Region Requerida',
        ];
    }
}
}
