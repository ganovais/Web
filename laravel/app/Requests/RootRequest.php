<?php

namespace App\Requests;

use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;

class RootRequest extends FormRequest
{

    public function withValidator($validator)
    {
        $validator->setAttributeNames($this->attributeNames());
    }

    protected function failedAuthorization()
    {
        throw new AuthorizationException('Este usuário não tem permissão para realizar esta ação.');
    }

    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(
            response()->json($validator->errors()->first(), 422)
        );
    }

}
