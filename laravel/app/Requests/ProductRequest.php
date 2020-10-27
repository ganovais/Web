<?php

namespace App\Requests;

class ProductRequest extends RootRequest
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
            'name' => 'Nome',
        ];
    }

    public function messages()
    {
        return [ ];
    }
}
