<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AccesorioRequest extends FormRequest
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
            'sku' => 'bail|required|unique:SKU',
            'categoria_id' => 'bail|required|exists:categorias',
            'fabricante_id' => 'bail|required|exists:fabricantes',
            'pais_id' => 'bail|required|exists:paises',
            'descripcion' => 'required'
        ];
    }
}
