<?php

namespace App\Requests;

class PaymentMethodRequest extends RootRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
        ];
    }

    public function attributeNames()
    {
        return [
            'name' => 'NOME',
        ];
    }

    public function messages()
    {
        return [ ];
    }
}
