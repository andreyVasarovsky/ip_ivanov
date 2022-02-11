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
            'title' => 'nullable|string', //OK
            'nitrogen_norm_from' => 'nullable|numeric',//ОК
            'nitrogen_norm_till' => 'nullable|numeric',//ОК
            'phosphorus_norm_from' => 'nullable|numeric',//OK
            'phosphorus_norm_till' => 'nullable|numeric',//OK
            'potassium_norm_from' => 'nullable|numeric',
            'potassium_norm_till' => 'nullable|numeric',
            'culture_group_id' => 'nullable|array', //OK
//            'district' => '',
            'price_from' => 'nullable|numeric',//OK
            'price_till' => 'nullable|numeric',//OK
            'desc' => 'nullable|string', //OK
            'purpose' => 'nullable|string', //OK
        ];
    }
}
