<?php

namespace App\Requests;

class BannerRequest extends RootRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {

        $rules = [
            'title' => 'required',
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
            'image' => 'IMAGEM'
        ];
    }

    public function messages()
    {
        return [ ];
    }
}
