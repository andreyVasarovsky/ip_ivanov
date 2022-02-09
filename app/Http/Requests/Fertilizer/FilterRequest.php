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
            'title' => 'string', //OK
            'nitrogen_norm_from' => 'numeric',
            'nitrogen_norm_till' => 'numeric',
            'phosphorus_norm_from' => 'numeric',
            'phosphorus_norm_till' => 'numeric',
            'potassium_norm_from' => 'numeric',
            'potassium_norm_till' => 'numeric',
            'culture_group_id' => 'array',
//            'district' => '',
            'price_from' => 'numeric',
            'price_till' => 'numeric',
            'desc' => 'string',
            'purpose' => 'string',
        ];
    }
}
