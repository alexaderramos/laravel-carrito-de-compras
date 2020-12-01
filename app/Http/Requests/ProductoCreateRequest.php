<?php

namespace Bakery\Http\Requests;

use Bakery\Http\Requests\Request;

class ProductoCreateRequest extends Request
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
            'nombre'=>'required',
            'descripcion'=>'required',
            'stock'=>'required|numeric',
            'precio_es'=>'required|numeric',
            'categoria_id'=>'required',
            'foto'=>'required|image',
        ];
    }
}
