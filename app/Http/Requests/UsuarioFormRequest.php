<?php

namespace SafePet\Http\Requests;

use SafePet\Http\Requests\Request;

class UsuarioFormRequest extends Request
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
        'id'=>'required',
        'NombreUsuario'=>'required',
        'FechaNacimiento_Usuario'=>'required',
        'Rol_IdRol'=>'required',
        'CorreoUsuario'=>'required',
        'PasswordUsuario'=>'required|min:6'];

    }
}
