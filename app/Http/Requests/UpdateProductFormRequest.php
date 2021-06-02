<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProductFormRequest extends FormRequest
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
   /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'      =>  'required|max:255',
            'sku'       =>  'required',
            'price'     =>  'required',
            'image'     =>  'mimes:png,jpg,jpeg,gif|max:2000',
            'quantity'  =>  'required|numeric',
        ];
    }


    public function messages()
    {
        return [
            'required' => 'Ce champ est requit',
            'name.max' => 'le champ :attribute ne doit dépasser :max caractères'
        ];
    }
}
