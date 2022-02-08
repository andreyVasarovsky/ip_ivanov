<?php

namespace App\Http\Requests\Fertilizer;

use Illuminate\Foundation\Http\FormRequest;

class FilterRequest extends FormRequest
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
            'title' => 'string',
            'nitrogen_norm' => 'numeric',
            'phosphorus_norm' => 'numeric',
            'potassium_norm' => 'numeric',
            'culture_group_id' => 'numeric',
//            'district' => '',
            'price' => 'numeric',
            'desc' => '',
            'purpose' => '',
        ];
    }
}
