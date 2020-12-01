<?php

namespace Bakery\Http\Requests\Categoria;

use Bakery\Http\Requests\Request;

class CategoriaCreateRequest extends Request
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
            'nombrec' =>'required|unique:categorias,nombrec',
            'descripcion' =>'required',
        ];
    }

     public function messages()
    {
        return[
            'nombrec.required'=>'Es oblidatorio el <strong>NOMBRE DE CATEGORIA</strong>',
            'nombrec.unique'=>'El <strong>NOMBRE DE CATEGORIA</strong> ya esta registrado.',

            'descripcion.required'=>'Describa el producto porfavor.'

        ];
    }
}
