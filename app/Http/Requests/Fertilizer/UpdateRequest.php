<?php

namespace App\Http\Requests\Fertilizer;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'culture_group_id' => 'required|exists:culture_groups,id|numeric',
            'district' => '',
            'price' => 'required|numeric|min:0|max:100000.99',
            'desc' => '',
            'purpose' => '',
        ];
    }
}
