<?php

namespace App\Requests;

class ContactRequest extends RootRequest
{

    public function rules()
    {
        return [
            'name' => 'required',
            'email' => 'required',
            'address' => 'required',
            'subject' => 'required',
            'comment' => 'required',
        ];
    }

    public function attributeNames()
    {
        return [
            'name' => 'NOME',
            'email' => 'E-MAIL',
            'address' => 'ENDEREÇO',
            'subject' => 'ASSUNTO',
            'comment' => 'MENSAGEM',
        ];
    }

    public function messages()
    {
        return [ ];
    }
}
