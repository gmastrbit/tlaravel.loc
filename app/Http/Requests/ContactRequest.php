<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ContactRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // альтернативна логіка авторизації, false по замовчуванню
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
            'name' => 'required',
            'email' => 'max:5|required'
        ];
    }

    public function messages()
    {
        return [
            // лише для поля name, якщо є правило required
            'name.required' => 'ПОЛЕ :attribute обов\'язкове для заповнення',
            'email.max' => 'Максимально допустима кількість символів :max',
        ];
    }
}
