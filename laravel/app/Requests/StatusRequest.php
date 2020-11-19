<?php

namespace App\Requests;

class StatusRequest extends RootRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required',
            'color' => 'required',
        ];
    }

    public function attributeNames()
    {
        return [
            'name' => 'NOME',
            'color' => 'COR',
        ];
    }

    public function messages()
    {
        return [ ];
    }
}
