<?php

namespace SafePet\Http\Requests;

use SafePet\Http\Requests\Request;

class PublicidadFormRequest extends Request
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
            'fecha_inicio'=>'required|date',
            'fecha_termino'=>'required|date',
            'imagen_publi'=>'required',
            'link_redirect'=>'required|max:50',
            'mensaje_publi'=>'required|max:100',
            'est_publicidad'=>'required|max:10',
            'Usuario_Id_Usuario'=>'required|max:10'

        ];
    }
}
