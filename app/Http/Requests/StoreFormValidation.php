<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormValidation extends FormRequest
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
                'name' =>'required|min:5',
                'email' => 'required|max:25',
                'g-recaptcha-response' => 'required|captcha'
        ];
    }

    public function messages()
    {
        return [
            'name.required'=> 'el campo nombre es requerido',
            'email.required'=> 'el campo correo es requerido',
            'name.min'=> 'el campo nombre minimo de 5 caracteres',
            'email.max'=> 'el campo correo maximo de 25 caracteres',
        ];
    }
}
