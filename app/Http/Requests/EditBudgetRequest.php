<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditBudgetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'value'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'value.required' => 'Valor Requerido',
        ];
    }
}
