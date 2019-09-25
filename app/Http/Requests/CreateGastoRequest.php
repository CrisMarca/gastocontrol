<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateGastoRequest extends FormRequest
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
            'nombre_g' => 'required|string',
            'descripcion_g' => 'required',
            'fecha_g' => 'required',
            'monto_g' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
             'nombre_g.required' => 'El campo del nombre es requerido',
             'descripcion_g.required' => 'El campo de la descripcion es requerido',
             'fecha_g.required' => 'El campo de la fecha es requerido',
             'monto_g.required' => 'El campo del gasto es requerido',
        ];
    }
}
