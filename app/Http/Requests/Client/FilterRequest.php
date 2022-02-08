<?php

namespace App\Http\Requests\Client;

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
            'agreement_date_from' => 'string',
            'agreement_date_till' => 'string',
            'delivery_price_from' => 'numeric',
            'delivery_price_till' => 'numeric',
            'region' => 'string',
        ];
    }
}
