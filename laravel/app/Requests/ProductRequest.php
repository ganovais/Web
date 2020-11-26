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
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ];
    }

    public function attributeNames()
    {
        return [
            'title' => 'TÍTULO',
            'description' => 'DESCRIÇÃO',
            'price' => 'PREÇO',
            'category_id' => 'CATEGORIA',
        ];
    }

    public function messages()
    {
        return [ ];
    }
}
