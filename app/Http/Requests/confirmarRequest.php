<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class confirmarRequest extends FormRequest
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
            'cantidad-equipaje' => 'required|integer',
            'peso-equipaje' => 'required|numeric',
            'costo' => 'required|numeric'
        ];
    }
}
