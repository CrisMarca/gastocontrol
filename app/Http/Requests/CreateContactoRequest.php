<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContactoRequest extends FormRequest
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
            'nombre' => 'required|unique:contactos,nombre',
            'apellido' => 'required',
            'direccion' => 'required',
            'ci' => 'required|numeric',
            'celular' => 'required|numeric',
        ]; 
    }

    public function messages()
    {
        return [
        'ci.required' => 'El campo de la cedula de identidad es obligatorio y no puede estar vacio',        
        'nombre.unique' => 'Este nombre ya esta en uso',
        ];
    }
}
