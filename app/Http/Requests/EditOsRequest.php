<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditOsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'name'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'Nombre Requerido',
        ];
    }
}
