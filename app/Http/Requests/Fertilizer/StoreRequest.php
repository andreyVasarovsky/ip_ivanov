<?php

namespace App\Http\Requests\Fertilizer;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string',
            'nitrogen_norm' => 'numeric|min:0|max:100000.99',
            'phosphorus_norm' => 'numeric|min:0|max:100000.99',
            'potassium_norm' => 'numeric|min:0|max:100000.99',
            'culture_group_id ' => 'numeric|min:0|max:100000.99', //ToDo
            'district' => 'string',
            'price' => 'required|numeric|min:0|max:100000.99',
            'desc' => 'string',
            'purpose' => 'string',
        ];
    }
}
