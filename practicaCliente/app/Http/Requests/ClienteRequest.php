<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClienteRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

   /* public function attributes()
    {
        return [
            'nombre'             => 'nombre',
            'descripcion'        => 'descripcion',
            'precio'             => 'precio',
            'iva'                => 'iva',
            'descuento'          => 'descuento',
            'observaciones'      => 'observaciones',
        ];
    }*/

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'nombre'           => 'required|min:2|max:50',
            'apellidos'      => 'required|min:2|max:255',
            'correo'           => 'required',
            'tlf'              => 'required|numeric',
            'clave'        => 'required',
            'dirrecion'      => 'nullable',
            'ip'      => 'nullable',
            'estado'      => 'nullable',
            'nacimiento'      => 'nullable',
            'sueldo_anual'      => 'nullable',

        ];
    }
  /*  public function messages()
    {
        $required='El campo :attribute es obligatorio';
        $min='La longitud minima de :attribute es :min';
        $max='La longitud maxima de :attribute es :max';
        $comun='El campo :attribute no tiene un formato valido';
        return [
            'nombre.required' => $required,
            'nombre.min' => $min,
            'nombre.max' => $max,            
            'descripcion.required' => $required,
            'descripcion.min' => $min,
            'descripcion.max' => $max,
            'precio.required' => $required,
            'precio.numeric' => $comun,
            'iva.required' =>$required,
            
        ];
    }*/
}
