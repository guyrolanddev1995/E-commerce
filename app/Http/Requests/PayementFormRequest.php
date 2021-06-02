<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PayementFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'money_espece'      =>  'required|numeric',
            'type_payement' => 'required|in:bitcoin,freecacoin,sairui,tbc', 
            'money_crypto'     =>  'required|numeric'
        ];
    }

    public function messages()
    {
        return [
            'type_payement.required' => 'Selectionner le type de paiement',
            'required' => 'Ce champ est requit',
            'numeric' => 'Entrer une valeur numerique'
        ];
    }
}
