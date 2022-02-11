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
            'title' => 'nullable|string',
            'nitrogen_norm_from' => 'nullable|numeric',
            'nitrogen_norm_till' => 'nullable|numeric',
            'phosphorus_norm_from' => 'nullable|numeric',
            'phosphorus_norm_till' => 'nullable|numeric',
            'potassium_norm_from' => 'nullable|numeric',
            'potassium_norm_till' => 'nullable|numeric',
            'culture_group_id' => 'nullable|array',
//            'district' => '',
            'price_from' => 'nullable|numeric',
            'price_till' => 'nullable|numeric',
            'desc' => 'nullable|string',
            'purpose' => 'nullable|string',
        ];
    }
}
