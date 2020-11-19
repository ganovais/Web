<?php

namespace App\Requests;

class CategoryRequest extends RootRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'title' => 'required',
        ];
    }

    public function attributeNames()
    {
        return [
            'title' => 'TÍTULO',
        ];
    }

    public function messages()
    {
        return [ ];
    }
}
