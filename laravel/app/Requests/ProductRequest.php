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

        $rules = [
            'title' => 'required',
            'price' => 'required',
            'category_id' => 'required',
            'description' => 'required',
        ];

        $id = $this->segment(3);

        if(empty($id)) {
            $image = [
                'image' => 'required',
            ];
        } else {
            $image = [
                'image' => 'nullable',
            ];
        }

        return array_merge($rules, $image);
    }

    public function attributeNames()
    {
        return [
            'title' => 'TÍTULO',
            'description' => 'DESCRIÇÃO',
            'price' => 'PREÇO',
            'category_id' => 'CATEGORIA',
            'image' => 'IMAGEM'
        ];
    }

    public function messages()
    {
        return [ ];
    }
}
