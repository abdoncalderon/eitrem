<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveBudgetRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'account'=> 'required',
            'year'=>'required|min:4|max:4',
            'month_'=>'required|max:2',
            'value'=>'required',
        ];
    }

    public function messages()
    {
        return [
            'account.required' => 'Tipo de cuenta Requerido',
            'year.required' => 'Año Requerido',
            'month_.required' => 'Mes Requerido',
            'value.required' => 'Valor Requerido',
        ];
    }
}
