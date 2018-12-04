<?php

namespace SafePet\Http\Requests;

use SafePet\Http\Requests\Request;

class MailFormRequest extends Request
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
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
        'nombre' => 'required',
        'correo' => 'required|email',
        'telefono'=>'required|numeric|min:1|max:999999999',
        'mensaje' => 'required'

        ];
    }
}
