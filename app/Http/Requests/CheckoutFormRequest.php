<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CheckoutFormRequest extends FormRequest
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
            'nom' => 'required',
            'prenom' => 'required',
            'phone1' => 'required|numeric',
            'adresse' => 'required',
            'region' => 'required',
            'ville' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'required' => 'Ce champ est requit',
            'numeric' => 'Entrer une valeur numerique'
        ];
    }
}
